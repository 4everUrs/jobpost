<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
         <title>Job Posting </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

		<!-- CSS here -->
            <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
            <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
            <link rel="stylesheet" href="{{asset('assets/css/flaticon.css')}}">
            <link rel="stylesheet" href="{{asset('assets/css/price_rangs.css')}}">
            <link rel="stylesheet" href="{{asset('assets/css/slicknav.css')}}">
            <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">
            <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
            <link rel="stylesheet" href="{{asset('assets/css/fontawesome-all.min.css')}}">
            <link rel="stylesheet" href="{{asset('assets/css/themify-icons.css')}}">
            <link rel="stylesheet" href="{{asset('assets/css/slick.css')}}">
            <link rel="stylesheet" href="{{asset('assets/css/nice-select.css')}}">
            <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">\
            @livewireStyles
   </head>

<body>
    <div class="header-area header-transparrent">
        <div class="headder-top header-sticky">
             <div class="container">
                 <div class="row align-items-center">
                     <div class="col-lg-3 col-md-2">
                         <!-- Logo -->
                         <div class="logo">
                             <a href="index.html"><img src="{{asset('assets/img/logo/logo.png')}}" height="60px"alt=""></a>
                         </div>  
                     </div>
                     <div class="col-lg-9 col-md-9">
                         <div class="menu-wrapper">
                             <!-- Main-menu -->
                             <div class="main-menu">
                                 <nav class="d-none d-lg-block">
                                     <ul id="navigation">
                                         <li><a href="{{route('home')}}" style="margin-left:600px">Home</a></li>
                                         <li><a href="{{route('listing')}}">Find a Jobs </a></li>
                                         
                                     </ul>
                                 </nav>
                             </div>          
                             <!-- Header-btn -->
                           
                         </div>
                     </div>
                     <!-- Mobile Menu -->
                     <div class="col-12">
                         <div class="mobile_menu d-block d-lg-none"></div>
                     </div>
                 </div>
             </div>
        </div>
    </div>

    <div class="main">
        {{$slot}}
    </div>
    <footer>
        <!-- Footer Start-->
        <div class="footer-area footer-bg footer-padding">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <!--<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">-->
                       <div class="single-footer-caption mb-50">
                         <div class="single-footer-caption mb-30">
                             <div class="footer-tittle">
                                 <h4>About Us</h4>
                                 <div class="footer-pera">
                                    <p>Tech-Trendz Human Resources will serve as a third party for job seekers and employers. 
                                        It is a website where Job seekers can apply for as much as job vacancies they want to apply and employers can have a larger selection of potential candidates. 
                                        Tech-Trendz Human Resources will recruit applicants for the employers through the online job posting, Advertising, and job fair program. We will also be qualifying applicants for the employers. 
                                        Tech-Trendz Human Resources will offer training and orientation for the applicants and we will also track the employee’s performance when they get hired. <br>
                                        The main purpose of Tech-Trendz Human Resources is to give more job opportunities. 
                                        Creating jobs helps the economy by GDP. When an individual is employed, they are paid by their employer. 
                                        This results in them having money to spend on food, clothing, entertainment, and in a variety of other areas. 
                                        The more an individual spends, the more that demand increases. When demand for a product or service increases, companies increase their output to meet the increased demand. 
                                        Companies do this by investing more and hiring more workers.</p>
                                </div>
                             </div>
                         </div>

                       </div>
                    </div>
                    <!--<div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">-->
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Contact Info</h4>
                                <ul>
                                    <li>
                                    <p>Address : Quezon City</p>
                                    </li>
                                    <li><a href="#">Contact : +639293838671</a></li>
                                    <li><a href="#">Email : coretransaction7@gmail.com</a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    
                    
                </div>
               <!--  -->
               <!--<div class="row footer-wejed justify-content-between">-->
                   
               </div>
            </div>
        </div>
        <!-- footer-bottom area -->
        <div class="footer-bottom-area footer-bg">
            <div class="container">
                <div class="footer-border">
                     <div class="row d-flex justify-content-between align-items-center">
                         <div class="col-xl-10 col-lg-10 ">
                             <div class="footer-copy-right">
                                                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        <a href="Disclamer: This is for educational purposes only. Provided by the student of Bestlink College of the Philippines" target="_blank">Disclamer: This is for educational purposes only. Provided by the student of Bestlink College of the Philippines</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                             </div>
                         </div>
                         <div class="col-xl-2 col-lg-2">
                             <div class="footer-social f-right">
                                 <a href="#"><i class="fab fa-facebook-f"></i></a>
                                 <a href="#"><i class="fab fa-twitter"></i></a>
                                 <a href="#"><i class="fas fa-globe"></i></a>
                                 <a href="#"><i class="fab fa-behance"></i></a>
                             </div>
                         </div>
                     </div>
                </div>
            </div>
        </div>
        @stack('modals')
    
    @livewireScripts
    
    @stack('scripts')
        <!-- Footer End-->
    </footer>
        <script src="{{asset('assets/js/vendor/modernizr-3.5.0.min.js')}}"></script>
		<!-- Jquery, Popper, Bootstrap -->
		<script src="{{asset('assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
        <script src="{{asset('assets/js/popper.min.js')}}"></script>
        <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="{{asset('assets/js/jquery.slicknav.min.js')}}"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('assets/js/slick.min.js')}}"></script>
        <script src="{{asset('assets/js/price_rangs.js')}}"></script>
        
		<!-- One Page, Animated-HeadLin -->
        <script src="{{asset('assets/js/wow.min.js')}}"></script>
		<script src="{{asset('assets/js/animated.headline.j')}}s"></script>
        <script src="{{asset('assets/js/jquery.magnific-popup.js')}}"></script>

		<!-- Scrollup, nice-select, sticky -->
        <script src="{{asset('assets/js/jquery.scrollUp.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery.nice-select.min.js')}}"></script>
		<script src="{{asset('assets/js/jquery.sticky.js')}}"></script>
        
        <!-- contact js -->
        <script src="{{asset('assets/js/contact.js')}}"></script>
        <script src="{{asset('assets/js/jquery.form.js')}}"></script>
        <script src="{{asset('assets/js/jquery.validate.min.js')}}"></script>
        <script src="{{asset('assets/js/mail-script.js')}}"></script>
        <script src="{{asset('assets/js/jquery.ajaxchimp.min.js')}}"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="{{asset('assets/js/plugins.js')}}"></script>
        <script src="{{asset('assets/js/main.js')}}"></script>
</body>
</html>