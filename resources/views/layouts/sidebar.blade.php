
        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="dlabnav">
            <div class="dlabnav-scroll">
				<ul class="metismenu" id="menu">
                    <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
							<i class="fas fa-home"></i>
							<span class="nav-text">Dashboard</span>
						</a>
                        <ul aria-expanded="false">
							<li><a href="contacts.html">Contacts</a></li>
							<li><a href="calendar-page.html">Calendar</a></li>
							<li><a href="message.html">Messages</a></li>	
						</ul>

                    </li>
                    {{-- income start --}}
                    <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
							<i class="icofont-dollar-plus"></i>
							<span class="nav-text">Income</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{{url('income')}}">Income</a></li>
                            <li><a href="{{url('/income/category')}}">Income Category</a></li>
                            <li><a href="{{url('/income/report')}}">Income Report</a></li>
						</ul>
                    </li>
                    {{-- Expense start --}}
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
							<i class="icofont-card"></i>
							<span class="nav-text">Expense</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{{url('expense')}}">Expense</a></li>
                            <li><a href="{{url('/expense/category')}}">Expense Category</a></li>
                            <li><a href="{{url('/expense/report')}}">Expense Report</a></li>
						</ul>
                    </li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
							<i class="icofont-justify-all"></i>
							<span class="nav-text">Total</span>
						</a>
                        <ul aria-expanded="false">
                             <li><a href="{{'/total'}}" class="" aria-expanded="false">
							
							<span class="nav-text">Total Report</span>
						</a>
					</li>
						</ul>
                    </li>
                    {{-- Total report --}}
                    {{-- Edit profile --}}
                     <li><a href="{{'/edit/profile'}}" class="" aria-expanded="false">
							<i class="fas fa-user"></i>
							<span class="nav-text">Edit Profile</span>
						</a>
					</li>
                   {{-- Edit profile --}}
					
                    <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
						<i class="fas fa-info-circle"></i>
							<span class="nav-text">Services</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{{'/contact'}}">Contact</a></li>
                            <li><a href="{{'/contact/list'}}">ContactList</a></li>
                            <li><a href="{{'/email'}}">Email</a></li>
							{{-- <li><a href="post-details.html">Post Details</a></li>
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Email</a>
                                <ul aria-expanded="false">
                                    <li><a href="email-compose.html">Compose</a></li>
                                    <li><a href="email-inbox.html">Inbox</a></li>
                                    <li><a href="email-read.html">Read</a></li>
                                </ul>
                            </li>
                            <li><a href="app-calender.html">Calendar</a></li> --}}
							
                        </ul>
                    </li>
                    <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
							<i class="fas fa-chart-line"></i>
							<span class="nav-text">Charts</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="chart-chartist.html">Chartist</a></li>
                            <li><a href="chart-peity.html">Peity</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
							<i class="fas fa-heart"></i>
							<span class="nav-text">Plugins</span>
						</a>
                        <ul aria-expanded="false">
							<li><a href="uc-lightgallery.html">Light Gallery</a></li>
                        </ul>
                    </li>
                   
                    <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
							<i class="fas fa-table"></i>
							<span class="nav-text">Table</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="table-datatable-basic.html">Datatable</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
							<i class="fas fa-clone"></i>
							<span class="nav-text">Pages</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="page-login.html">Login</a></li>
                            <li><a href="page-register.html">Register</a></li>
                            {{-- <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Error</a>
                                <ul aria-expanded="false">
                                    <li><a href="page-error-400.html">Error 400</a></li>
                                    <li><a href="page-error-403.html">Error 403</a></li>
                                    <li><a href="page-error-404.html">Error 404</a></li>
                                    <li><a href="page-error-500.html">Error 500</a></li>
                                    <li><a href="page-error-503.html">Error 503</a></li>
                                </ul>
                            </li> --}}
                            <li><a href="page-lock-screen.html">Lock Screen</a></li>
                        </ul>
                    </li>
                </ul>
				<div class="side-bar-profile">
					<div class="d-flex align-items-center justify-content-between mb-3">
						<div class="side-bar-profile-img">
							<img src="images/user.jpg" alt="">
						</div>
						<div class="profile-info1">
							<h4 class="fs-18 font-w500">Soeng Souy</h4>
							<span>example@mail.com</span>
						</div>
						<div class="profile-button">
							<i class="fas fa-caret-down scale5 text-light"></i>
						</div>
					</div>	
					<div class="d-flex justify-content-between mb-2 progress-info">
						<span class="fs-12"><i class="fas fa-star text-orange me-2"></i>Task Progress</span>
						<span class="fs-12">20/45</span>
					</div>
					<div class="progress default-progress">
						<div class="progress-bar bg-gradientf progress-animated" style="width: 45%; height:10px;" role="progressbar">
							<span class="sr-only">45% Complete</span>
						</div>
					</div>
				</div>
				
				<div class="copyright">
					<p><strong class="">Fillow Saas Admin</strong> © 2021 All Rights Reserved</p>
					<p class="fs-12">Made with <span class="heart"></span> by DexignLabs</p>
				</div>
			</div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->