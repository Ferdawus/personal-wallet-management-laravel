<?php

namespace App\Http\Controllers;
use App\Models\Contact;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class ContactController extends Controller
{
    public function index()
    {
        $ContactShows = Contact::all();
        // return $ContactShows;
        return view('contact.list', compact('ContactShows'));
        
    }
    public function create()
    {
        return view('contact.index');
    }
    public function store(Request $request)
    {
        $ContactAdd = new Contact();

        $ContactAdd->Name  = $request->Name;
        $ContactAdd->Email = $request->Email;
        $ContactAdd->Phone = $request->Phone;
        $ContactAdd->save();

        return back();
    }
    public function edit(Contact $id)
    {
       $Contacts = Contact::find($id)->first();
    //    return $Contacts;
       return view('contact.edit',compact('Contacts'));
    }
    public function update(Request $request)
    {
        //    return $request->all();
        Contact::find($request->id)->update($request->all());
        return back();
    }

    public function destroy($id)
    {
        Contact::find($id)->delete();
        return back();
    }
    public function destroyAll()
    {
        Contact::withTrashed()->delete();
        return back();
    }

    public function trash()
    {
        $TrashedContacts = Contact::onlyTrashed()->get();
        return view('contact.trash',compact('TrashedContacts'));
       
    }
    public function restore($id)
    {
        Contact::withTrashed()->where('id',$id)->restore();
        return back();
       
    }
    public function restoreAll()
    {
        Contact::withTrashed()->restore();
        return back();
       
    }
    public function forceDeleted($id)
    {
       Contact::withTrashed()->where('id',$id)->forceDelete();
       return back();
    }
    public function emptyTrashed()
    {
       Contact::onlyTrashed()->forceDelete();
       return back();
    }

}
