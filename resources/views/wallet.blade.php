<!DOCTYPE html>
<html lang="en">
<!-- Basic -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Site Metas -->
    <title>PWM</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="#" type="template/image/x-icon" />

    <link rel="apple-touch-icon" href="#" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="template/css/bootstrap.min.css" />
    <!-- Pogo Slider CSS -->
    <link rel="stylesheet" href="template/css/pogo-slider.min.css" />
    <!-- Site CSS -->
    <link rel="stylesheet" href="template/css/style.css"/>
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="template/css/responsive.css" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="template/css/custom.css" />
    <link rel="stylesheet" href="{{URL::asset('css/custom.css')}}">
    <link rel="stylesheet" href="{{URL::asset('icons/icofont.min.css')}}">

    {{-- <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]--> --}}

</head>

<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">
    <section class="topbar">
        <div class="container">
            <div class="d-flex align-items-center">
                <div class="col-md-6">
                    <div class="topbar__left">
                        <h6 class="theme_color"> Wellcome Personal Wallate Management</h6>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="topbar__right">
                        <ul class="d-flex justify-content-end  mt-2">
                            <li class="">
                                @if (Route::has('login'))
                                    <div class="">
                                        @auth
                                            <a href="{{ url('/dashboard') }}" class="">Dashboard</a>
                                        @else
                                            <a href="{{ route('login') }}" class="login__icon"><span><i class="icofont-login"></i></span>Log in</a>

                                            @if (Route::has('register'))
                                                <a href="{{ route('register') }}" class="register__icon"><span><i class="icofont-ui-user"></i></span> Register</a>
                                            @endif
                                        @endauth
                                    </div>
                                @endif
                            </li>
                            <li class="help__icon"><a href="" class=""><i class="icofont-hand-drag2"></i>Help</a></li>
                            <li class="support__icon"><a href=""><i class="icofont-live-support"></i> Support</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> 
    </section>

    <!-- LOADER -->
    <div id="preloader">
        <div class="loader">
            <img src="template/images/loader.gif" alt="#" />
        </div>
    </div>
    <!-- end loader -->
    <!-- END LOADER -->

    <!-- Start header -->
    <header class="top-header">
        <div class="header_top">
            
            <div class="container">
                <div class="row">
                    <div class="logo_section">
                        <a class="navbar-brand" href="#"><img src="template/images/wallet.png" alt="image" width="70px" height="70px"></a>
                    </div>
                    <div class="site_information">
                        <ul>
                            <li><a href="mailto:exchang@gmail.com"><img src="template/images/mail_icon.png" alt="#" />ferdawusm@gmail.com</a></li>
                            <li><a href="tel:exchang@gmail.com"><img src="template/images/phone_icon.png" alt="#" />+7123569847</a></li>
                            <li><a class="join_bt" href="#">Join us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        
        </div>
        <div class="header_bottom">
          <div class="container">
            <div class="col-sm-12">
                <div class="menu_orange_section" style="background: #ff880e;">
                   <nav class="navbar header-nav navbar-expand-lg"> 
                     <div class="menu_section">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                    <ul class="navbar-nav">
                        <li><a class="nav-link active" href="index.html">Home</a></li>
                        <li><a class="nav-link" href="about.html">About</a></li>
                        <li><a class="nav-link" href="exchange.html">Exchange</a></li>
                        <li><a class="nav-link" href="services.html">Services</a></li>
                        <li><a class="nav-link" href="new.html">News</a></li>
                        <li><a class="nav-link" href="contact.html">Contact</a></li>
                    </ul>
                </div>
                     </div>
                 </nav>
                 <div class="search-box">
                    <input type="text" class="search-txt" placeholder="Search">
                    <a class="search-btn">
                        <img src="template/images/search_icon.png" alt="#" />
                    </a>
                </div> 
                </div>
            </div>
          </div>
        </div>
        
    </header>
    <!-- End header -->

    <!-- Start Banner -->
    <div class="ulockd-home-slider">
        <div class="container-fluid">
            <div class="row">
                <div class="pogoSlider" id="js-main-slider">
                    <div class="pogoSlider-slide" style="background-image:url(template/images/slide1.jpg);">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="slide_text white_fonts">
                                        
                                        <h3 style="color: #F76E11 !important">Carry your most important goal in your wallet</h3>
                                        <br>
                                        <a class="start_exchange_bt" href="exchange.html">Start Exchange ></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pogoSlider-slide" style="background-image:url(template/images/slide5.jpg);">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="slide_text white_fonts">
                                        
                                        <h3 style="color: #F76E11 !important;">The way to a woman's heart is through your wallet.
                                        </h3>
                                        <br>
                                        <a class="start_exchange_bt" href="exchange.html">Start Exchange ></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- .pogoSlider -->
            </div>
        </div>
    </div>
    <!-- End Banner -->
    
	<!-- section -->
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="full text_align_right_img">
                        <img src="template/images/img1.png" alt="#" />
                    </div>
                </div>
                <div class="col-md-6 layout_padding">
                    <div class="full paddding_left_15">
                        <div class="heading_main text_align_left">
						   <h2 style="color: #fff"><span class="theme_color">Welcome</span> To PWM</h2>	
                        </div>
                    </div>
                    <div class="full paddding_left_15">
                        <p style="color: #fff">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                    </div>
                    <div class="full paddding_left_15">
                        <a class="main_bt" href="#">About more ></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- end section -->
    <!-- section -->
    <div class="section layout_padding">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="heading_main text_align_center">
                           <h2 style="color: #fff"><span class="theme_color"></span>Services</h2>    
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="full services_blog" style="background-color: #f4711f">
                       <img class="img-responsive" src="template/images/s1.png" alt="#" />
                       <h4 style="color: #fff">Safe & Secure</h4>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="full services_blog" style="background-color: #f4711f">
                        <img class="img-responsive" src="template/images/s2.png" alt="#" />
                        <h4 style="color: #fff">Mobile Apps</h4>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="full services_blog" style="background-color: #f4711f">
                        <img class="img-responsive" src="template/images/s3.png" alt="#" />
                        <h4 style="color: #fff">Personal Wallet</h4>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="full services_blog" style="background-color: #f4711f">
                        <img class="img-responsive" src="template/images/s4.png" alt="#" />
                        <h4 style="color: #fff">Experts Support</h4>
                    </div>
                </div>
            </div>
            <div class="row margin-top_30">
                <div class="col-sm-12">
                    <div class="full">
                        <div class="center">
                            <a class="main_bt" href="#">About more ></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end section -->
    <!-- section -->
    <div class="section white_fonts" style="background: #2a2a2a;">
        <div class="container">
            <div class="row">
                <div class="col-md-6" style="background: #fff;">
                    <div class="full text_align_right_img">
                        <img src="template/images/img2.png" alt="#" />
                    </div>
                </div>
                <div class="col-md-6 layout_padding">
                    <div class="full paddding_left_15">
                        <div class="heading_main text_align_left">
                           <h2><span class="theme_color">Apply for</span> Exchange</h2>    
                        </div>
                    </div>
                    <div class="full paddding_left_15">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                    </div>
                    <div class="full paddding_left_15">
                        <a class="main_bt" href="#">Exchange ></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end section -->
	<!-- section -->
    <div class="section layout_padding about_bg">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="full paddding_left_15">
                        <div class="heading_main text_align_left">
                           <h2 style="color: #fff">About</h2>    
                        </div>
                    </div>
                    <div class="full paddding_left_15">
                        <p style="color: #fff">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                    </div>
                    <div class="full paddding_left_15">
                        <a class="main_bt" href="#">Read More ></a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="full text_align_right_img">
                        <img src="template/images/img3.png" alt="#"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end section -->
	<!-- section -->
    <div class="section layout_padding padding_top_0">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="heading_main text_align_center">
                           <h2 style="color: #fff"><span class="theme_color"></span>News</h2>    
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="full news_blog">
                       <img class="img-responsive" src="template/images/b1.png" alt="#" />
                       <div class="overlay"><a class="main_bt transparent" href="#">View</a></div>
                       <div class="blog_details">
                         <h3>Bitcoin News</h3>
                         <p>pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                       </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="full news_blog">
                        <img class="img-responsive" src="template/images/b2.png" alt="#" />
                        <div class="overlay"><a class="main_bt transparent" href="#">View</a></div>
                       <div class="blog_details">
                         <h3>Ethereum News</h3>
                         <p>pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                       </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="full news_blog">
                        <img class="img-responsive" src="template/images/b3.png" alt="#" />
                        <div class="overlay"><a class="main_bt transparent" href="#">View</a></div>
                       <div class="blog_details">
                         <h3>Light News</h3>
                         <p>pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                       </div>
                    </div>
                </div>
             </div>
        </div>
    </div>
    <!-- end section -->
    <!-- section -->
    <div class="section layout_padding padding_top_0">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="heading_main text_align_center">
                           <h2 style="color: #fff"><span class="theme_color"></span>Contact</h2>    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end section -->
    <!-- contact_form -->
    <div class="section contact_form">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12 offset-lg-3">
                    <div class="full">
                        <form class="contact_form_inner" action="#">
                            <fieldset>
                                <div class="field">
                                    <input type="text" name="name" placeholder="Your name" />
                                </div>
                                <div class="field">
                                    <input type="email" name="email" placeholder="Email" />
                                </div>
                                <div class="field">
                                    <input type="text" name="phone_no" placeholder="Phone number" />
                                </div>
                                <div class="field">
                                    <textarea placeholder="Message"></textarea>
                                </div>
                                <div class="field center">
                                    <button>SEND</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end contact_form -->
    <!-- end section -->
    <!-- Start Footer -->
    <footer class="footer-box">
        <div class="container">
            <div class="row">
               <div class="col-md-12 white_fonts">
                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="full">
                                
                                <img src="template/images/wallet.png" alt="image" width="100px" height="100px">
                                
                                <h6 style="font-size: 20px;margin-top: 8px">Personal Wallate</h6>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="full">
                                <h3>Quick Links</h3>
                            </div>
                            <div class="full">
                                <ul class="menu_footer">
                                    <li><a href="#">> Home</a></li>
                                    <li><a href="#">> About</a></li>
                                    <li><a href="#">> Exchange</a></li>
                                    <li><a href="#">> Services</a></li>
                                    <li><a href="#">> News</a></li>
                                    <li><a href="#">> Contact</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="full">
                                <div class="footer_blog full white_fonts">
                             <h3>Newsletter</h3>
                             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
                             <div class="newsletter_form">
                                <form action="index.html">
                                   <input type="email" placeholder="Your Email" name="#" required="">
                                   <button>Submit</button>
                                </form>
                             </div>
                         </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="full">
                                <div class="footer_blog full white_fonts">
                             <h3>Contact us</h3>
                             <ul class="full">
                               <li><img src="template/images/i5.png"><span>Gulshan 1<br>Bangladesh</span></li>
                               <li><img src="template/images/i6.png"><span>fedawusm@gmail.com</span></li>
                               <li><img src="template/images/i7.png"><span>+12586954775</span></li>
                             </ul>
                         </div>
                            </div>
                        </div>
					</div>
                </div>
			 </div>
        </div>
    </footer>
    <!-- End Footer -->

    <div class="footer_bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p class="crp">© Copyrights 2022 design by M.Ferdawus</p>
                </div>
            </div>
        </div>
    </div>

    <a href="#" id="scroll-to-top" class="hvr-radial-out"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="template/js/jquery.min.js"></script>
	<script src="template/js/popper.min.js"></script>
    <script src="template/js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="template/js/jquery.magnific-popup.min.js"></script>
    <script src="template/js/jquery.pogo-slider.min.js"></script>
    <script src="template/js/slider-index.js"></script>
    <script src="template/js/smoothscroll.js"></script>
    <script src="template/js/form-validator.min.js"></script>
    <script src="template/js/contact-form-script.js"></script>
    <script src="template/js/isotope.min.js"></script>
    <script src="template/js/images-loded.min.js"></script>
    <script src="template/js/custom.js"></script>
	<script>
	/* counter js */

(function ($) {
	$.fn.countTo = function (options) {
		options = options || {};
		
		return $(this).each(function () {
			// set options for current element
			var settings = $.extend({}, $.fn.countTo.defaults, {
				from:            $(this).data('from'),
				to:              $(this).data('to'),
				speed:           $(this).data('speed'),
				refreshInterval: $(this).data('refresh-interval'),
				decimals:        $(this).data('decimals')
			}, options);
			
			// how many times to update the value, and how much to increment the value on each update
			var loops = Math.ceil(settings.speed / settings.refreshInterval),
				increment = (settings.to - settings.from) / loops;
			
			// references & variables that will change with each update
			var self = this,
				$self = $(this),
				loopCount = 0,
				value = settings.from,
				data = $self.data('countTo') || {};
			
			$self.data('countTo', data);
			
			// if an existing interval can be found, clear it first
			if (data.interval) {
				clearInterval(data.interval);
			}
			data.interval = setInterval(updateTimer, settings.refreshInterval);
			
			// initialize the element with the starting value
			render(value);
			
			function updateTimer() {
				value += increment;
				loopCount++;
				
				render(value);
				
				if (typeof(settings.onUpdate) == 'function') {
					settings.onUpdate.call(self, value);
				}
				
				if (loopCount >= loops) {
					// remove the interval
					$self.removeData('countTo');
					clearInterval(data.interval);
					value = settings.to;
					
					if (typeof(settings.onComplete) == 'function') {
						settings.onComplete.call(self, value);
					}
				}
			}
			
			function render(value) {
				var formattedValue = settings.formatter.call(self, value, settings);
				$self.html(formattedValue);
			}
		});
	};
	
	$.fn.countTo.defaults = {
		from: 0,               // the number the element should start at
		to: 0,                 // the number the element should end at
		speed: 1000,           // how long it should take to count between the target numbers
		refreshInterval: 100,  // how often the element should be updated
		decimals: 0,           // the number of decimal places to show
		formatter: formatter,  // handler for formatting the value before rendering
		onUpdate: null,        // callback method for every time the element is updated
		onComplete: null       // callback method for when the element finishes updating
	};
	
	function formatter(value, settings) {
		return value.toFixed(settings.decimals);
	}
}(jQuery));

jQuery(function ($) {
  // custom formatting example
  $('.count-number').data('countToOptions', {
	formatter: function (value, options) {
	  return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
	}
  });
  
  // start all the timers
  $('.timer').each(count);  
  
  function count(options) {
	var $this = $(this);
	options = $.extend({}, options || {}, $this.data('countToOptions') || {});
	$this.countTo(options);
  }
});
	</script>
</body>

</html>