<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

        <link rel="stylesheet" href="frontend/css/bootstrap.min.css">
        <link rel="stylesheet" href="frontend/css/animate.min.css">
        <link rel="stylesheet" href="frontend/css/owl.carousel.min.css">
        <link rel="stylesheet" href="frontend/css/owl.theme.default.min.css">
        <link rel="stylesheet" href="frontend/css/jquery.fancybox.min.css">
        <link rel="stylesheet" href="frontend/fonts/icomoon/style.css">
        <link rel="stylesheet" href="frontend/fonts/flaticon/font/flaticon.css">
        <link rel="stylesheet" href="frontend/css/aos.css">
        <link rel="stylesheet" href="frontend/css/style.css">
        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
        </style>
    </head>
    <body>
        @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            <div class="site-mobile-menu">
                <div class="site-mobile-menu-header">
                  <div class="site-mobile-menu-close">
                    <span class="icofont-close js-menu-toggle"></span>
                  </div>
                </div>
                <div class="site-mobile-menu-body"></div>
              </div>  
              <nav class="site-nav mb-5">
                <div class="pb-2 top-bar mb-3">
                  <div class="container">
                    <div class="row align-items-center">
            
                      <div class="col-6 col-lg-9">
                        <a href="#" class="small mr-3"><span class="icon-question-circle-o mr-2"></span> <span class="d-none d-lg-inline-block">Have a questions?</span></a> 
                        <a href="#" class="small mr-3"><span class="icon-phone mr-2"></span> <span class="d-none d-lg-inline-block">10 20 123 456</span></a> 
                        <a href="#" class="small mr-3"><span class="icon-envelope mr-2"></span> <span class="d-none d-lg-inline-block">info@mydomain.com</span></a> 
                      </div>
            
                      <div class="col-6 col-lg-3 text-right">
                        <a href="login.html" class="small mr-3">
                          <span class="icon-lock"></span>
                          Log In
                        </a>
                        <a href="register.html" class="small">
                          <span class="icon-person"></span>
                          Register
                        </a>
                      </div>
            
                    </div>
                  </div>
                </div>
                <div class="sticky-nav js-sticky-header">
                  <div class="container position-relative">
                    <div class="site-navigation text-center">
                      <a href="index.html" class="logo menu-absolute m-0">Learner<span class="text-primary">.</span></a>
            
                      <ul class="js-clone-nav d-none d-lg-inline-block site-menu">
                        <li class="active"><a href="index.html">Home</a></li>
                        <li class="has-children">
                          <a href="#">Dropdown</a>
                          <ul class="dropdown">
                            <li><a href="elements.html">Elements</a></li>
                            <li class="has-children">
                              <a href="#">Menu Two</a>
                              <ul class="dropdown">
                                <li><a href="#">Sub Menu One</a></li>
                                <li><a href="#">Sub Menu Two</a></li>
                                <li><a href="#">Sub Menu Three</a></li>
                              </ul>
                            </li>
                            <li><a href="#">Menu Three</a></li>
                          </ul>
                        </li>
                        <li><a href="staff.html">Our Staff</a></li>
                        <li><a href="news.html">News</a></li>
                        <li><a href="gallery.html">Gallery</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="contact.html">Contact</a></li>
                      </ul>
            
                      <a href="#" class="btn-book btn btn-secondary btn-sm menu-absolute">Enroll Now</a>
            
                      <a href="#" class="burger ml-auto float-right site-menu-toggle js-menu-toggle d-inline-block d-lg-none light" data-toggle="collapse" data-target="#main-navbar">
                        <span></span>
                      </a>
            
                    </div>
                  </div>
                </div>
              </nav>
              <div class="untree_co-hero overlay" style="background-image: url('images/hero-img-1-min.jpg');">
            
            
                <div class="container">
                  <div class="row align-items-center justify-content-center">
            
                    <div class="col-12">
            
                      <div class="row justify-content-center ">
            
                        <div class="col-lg-6 text-center ">
                          <a href="#" href="https://vimeo.com/342333493" data-fancybox data-aos="fade-up" data-aos-delay="0" class="caption mb-4 d-inline-block">Watch the video</a>
            
                          <h1 class="mb-4 heading text-white" data-aos="fade-up" data-aos-delay="100">Education is the Mother of Leadership</h1>
                          <p class="mb-0" data-aos="fade-up" data-aos-delay="300"><a href="#" class="btn btn-secondary">Explore courses</a></p>
            
                        </div>
            
            
                      </div>
            
                    </div>
            
                  </div> <!-- /.row -->
                </div> <!-- /.container -->
            
              </div> <!-- /.untree_co-hero -->
              <div class="untree_co-section">
                <div class="container">
                  <div class="row justify-content-center mb-3">
                    <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="0">
                      <h2 class="line-bottom text-center mb-4">Browse Top Category</h2>
                    </div>
                  </div>
                  <div class="row align-items-stretch">
                    <div class="col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="0">
                      <a href="#" class="category d-flex align-items-start h-100">
                        <div>
                          <i class="uil uil-atom"></i>
                        </div>
                        <div>
                          <h3>Science</h3>
                          <span>1,391 courses</span>
                        </div>
                      </a>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="100">
                      <a href="#" class="category d-flex align-items-start h-100">
                        <div>
                          <i class="uil uil-briefcase"></i>
                        </div>
                        <div>
                          <h3>Business</h3>
                          <span>3,234 courses</span>
                        </div>
                      </a>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="200">
                      <a href="#" class="category d-flex align-items-start h-100">
                        <div>
                          <i class="uil uil-calculator"></i>
                        </div>
                        <div>
                          <h3>Finance Accounting</h3>
                          <span>931 courses</span>
                        </div>
                      </a>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="300">
                      <a href="#" class="category d-flex align-items-start h-100">
                        <div>
                          <i class="uil uil-pen"></i>
                        </div>
                        <div>
                          <h3>Design</h3>
                          <span>7,291 courses</span>
                        </div>
                      </a>
                    </div>
            
            
                    <div class="col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="0">
                      <a href="#" class="category d-flex align-items-start h-100">
                        <div>
                          <i class="uil uil-music"></i>
                        </div>
                        <div>
                          <h3>Music</h3>
                          <span>9,114 courses</span>
                        </div>
                      </a>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="100">
                      <a href="#" class="category d-flex align-items-start h-100">
                        <div>
                          <i class="uil uil-chart-pie"></i>
                        </div>
                        <div>
                          <h3>Marketing</h3>
                          <span>2,391 courses</span>
                        </div>
                      </a>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="200">
                      <a href="#" class="category d-flex align-items-start h-100">
                        <div>
                          <i class="uil uil-camera"></i>
                        </div>
                        <div>
                          <h3>Photography</h3>
                          <span>7,991 courses</span>
                        </div>
                      </a>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="300">
                      <a href="#" class="category d-flex align-items-start h-100">
                        <div>
                          <i class="uil uil-circle-layer"></i>
                        </div>
                        <div>
                          <h3>Animation</h3>
                          <span>6,491 courses</span>
                        </div>
                      </a>
                    </div>
                    
            
                  </div>
            
                  <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="400">
                    <div class="col-lg-8 text-center">
                      <p>We have more category here. <a href="#">Browse all</a></p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="services-section">
                <div class="container">
                  <div class="row justify-content-between">
                    <div class="col-lg-4 mb-5 mb-lg-0">
            
                      <div class="section-title mb-3" data-aos="fade-up" data-aos-delay="0">
                        <h2 class="line-bottom mb-4">Become an Instructor</h2>
                      </div>
            
                      <p data-aos="fade-up" data-aos-delay="100">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live.</p>
            
                      <ul class="ul-check list-unstyled mb-5 primary" data-aos="fade-up" data-aos-delay="200">
                        <li>Behind the word Mountains.</li>
                        <li>Far far away Mountains.</li>
                        <li>Large language Ocean.</li>
                      </ul>
            
                      <p data-aos="fade-up" data-aos-delay="300"><a href="#" class="btn btn-primary">Get Started</a></p>
            
                    </div>
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="0">
                      <figure class="img-wrap-2">
                        <img src="images/teacher-min.jpg" alt="Image" class="img-fluid">
                        <div class="dotted"></div>
                      </figure>
            
                    </div>
                  </div>
                </div>
              </div>
              <div class="untree_co-section">
                <div class="container"> 
                  <div class="row justify-content-center mb-5">
                    <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="0">
                      <h2 class="line-bottom text-center mb-4">We Have Best Education</h2>
                      <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-6 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                      <div class="feature">
                        <span class="uil uil-music"></span>
                        <h3>Music Class</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                      </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                      <div class="feature">
                        <span class="uil uil-calculator-alt"></span>
                        <h3>Math Class</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                      </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                      <div class="feature">
                        <span class="uil uil-book-open"></span>
                        <h3>English Class</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                      </div>
                    </div>
            
            
                    <div class="col-6 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay=100">
                      <div class="feature">
                        <span class="uil uil-book-alt"></span>
                        <h3>Reading for Kids</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                      </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                      <div class="feature">
                        <span class="uil uil-history"></span>
                        <h3>History Class</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                      </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                      <div class="feature">
                        <span class="uil uil-headphones"></span>
                        <h3>Music</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                      </div>
                    </div>
                  </div>
                </div> <!-- /.container -->
              </div> <!-- /.untree_co-section -->
              <div class="untree_co-section bg-light">
                <div class="container"> 
                  <div class="row justify-content-center mb-5">
                    <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="0">
                      <h2 class="line-bottom text-center mb-4">The Right Course For You</h2>
                      <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0">
                      <div class="custom-media">
                        <a href="#"><img src="images/img-school-1-min.jpg" alt="Image" class="img-fluid"></a>
                        <div class="custom-media-body">
                          <div class="d-flex justify-content-between pb-3">
                            <div class="text-primary"><span class="uil uil-book-open"></span> <span>43 lesson</span></div>
                            <div class="review"><span class="icon-star"></span> <span>4.8</span></div>
                          </div>
                          <h3>Education Program Title</h3>
                          <p class="mb-4">Lorem ipsum dolor sit amet once is consectetur adipisicing elit optio.</p>
                          <div class="border-top d-flex justify-content-between pt-3 mt-3 align-items-center">
                            <div><span class="price">$87.00</span></div>
                            <div><a href="#">Learn More</a></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0">
                      <div class="custom-media">
                        <a href="#"><img src="images/img-school-2-min.jpg" alt="Image" class="img-fluid"></a>
                        <div class="custom-media-body">
                          <div class="d-flex justify-content-between pb-3">
                            <div class="text-primary"><span class="uil uil-book-open"></span> <span>43 lesson</span></div>
                            <div class="review"><span class="icon-star"></span> <span>4.8</span></div>
                          </div>
                          <h3>Education Program Title</h3>
                          <p class="mb-4">Lorem ipsum dolor sit amet once is consectetur adipisicing elit optio.</p>
                          <div class="border-top d-flex justify-content-between pt-3 mt-3 align-items-center">
                            <div><span class="price">$93.00</span></div>
                            <div><a href="#">Learn More</a></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0">
                      <div class="custom-media">
                        <a href="#"><img src="images/img-school-3-min.jpg" alt="Image" class="img-fluid"></a>
                        <div class="custom-media-body">
                          <div class="d-flex justify-content-between pb-3">
                            <div class="text-primary"><span class="uil uil-book-open"></span> <span>43 lesson</span></div>
                            <div class="review"><span class="icon-star"></span> <span>4.8</span></div>
                          </div>
                          <h3>Education Program Title</h3>
                          <p class="mb-4">Lorem ipsum dolor sit amet once is consectetur adipisicing elit optio.</p>
                          <div class="border-top d-flex justify-content-between pt-3 mt-3 align-items-center">
                            <div><span class="price">$65.00</span></div>
                            <div><a href="#">Learn More</a></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="untree_co-section pt-0 bg-img overlay" style="background-image: url('images/img-school-1-min.jpg');">
                <div class="container">
                  <div class="row align-items-center justify-content-center text-center">
                    <div class="col-lg-7">
                      <h2 class="text-white mb-3" data-aos="fade-up" data-aos-delay="0">Education for Tomorrow's Leaders</h2>
                      <p class="text-white h5 mb-4" data-aos="fade-up" data-aos-delay="100">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                      <p><a href="#" class="btn btn-secondary" data-aos="fade-up" data-aos-delay="200">Enroll Now</a></p>
                    </div>
                  </div>
                </div>  
              </div> <!-- /.untree_co-section -->
              <div class="untree_co-section">
                <div class="container">
                  <div class="row justify-content-between">
                    <div class="col-lg-5 mb-5">
                      <h2 class="line-bottom mb-4" data-aos="fade-up" data-aos-delay="0">About Us</h2>
                      <p data-aos="fade-up" data-aos-delay="100">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                      <ul class="list-unstyled ul-check mb-5 primary" data-aos="fade-up" data-aos-delay="200">
                        <li>Separated they live</li>
                        <li>Bookmarksgrove right at the coast</li>
                        <li>large language ocean</li>
                      </ul>
            
                      <div class="row count-numbers mb-5">
                        <div class="col-4 col-lg-4" data-aos="fade-up" data-aos-delay="0">
                          <span class="counter d-block"><span data-number="12023">0</span><span>+</span></span>
                          <span class="caption-2">No. Students</span>
                        </div>
                        <div class="col-4 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                          <span class="counter d-block"><span data-number="49">0</span><span></span></span>
                          <span class="caption-2">No. Teachers</span>
                        </div>
                        <div class="col-4 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                          <span class="counter d-block"><span data-number="12">0</span><span></span></span>
                          <span class="caption-2">No. Awards</span>
                        </div>
                      </div>
            
                      <p data-aos="fade-up" data-aos-delay="200">
                        <a href="#" class="btn btn-primary mr-1">Admission</a>
                        <a href="#" class="btn btn-outline-primary">Learn More</a>
                      </p>
                    </div>
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                      <div class="bg-1"></div>
                      <a href="https://vimeo.com/342333493" data-fancybox class="video-wrap">
                        <span class="play-wrap"><span class="icon-play"></span></span>
                        <img src="images/img-school-4-min.jpg" alt="Image" class="img-fluid rounded">
                      </a>
                    </div>
                  </div>
                </div>
              </div> <!-- /.untree_co-section -->
              <div class="untree_co-section bg-light">
                <div class="container">
                  <div class="row justify-content-center mb-5">
                    <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="0">
                      <h2 class="line-bottom text-center mb-4">School News</h2>
                      <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    </div>
                  </div>
                  <div class="row align-items-stretch">
                    <div class="col-lg-6"  data-aos="fade-up" data-aos-delay="100">
                      <div class="media-h d-flex h-100">
                        <figure>
                          <img src="images/img-school-1-min.jpg" alt="Image">
                        </figure>
                        <div class="media-h-body">
                          <h2 class="mb-3"><a href="#">Education for Tomorrow's Leaders</a></h2>
                          <div class="meta mb-2"><span class="icon-calendar mr-2"></span><span>June 22, 2020</span>  <span class="icon-person mr-2"></span>Admin</div>
                          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                          <p><a href="#">Learn More</a></p>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6"  data-aos="fade-up" data-aos-delay="200">
                      <div class="media-h d-flex h-100">
                        <figure>
                          <img src="images/img-school-2-min.jpg" alt="Image">
                        </figure>
                        <div class="media-h-body">
                          <h2 class="mb-3"><a href="#">Enroll Your Kids This Summer to get 30% off</a></h2>
                          <div class="meta mb-2"><span class="icon-calendar mr-2"></span><span>June 22, 2020</span>  <span class="icon-person mr-2"></span>Admin</div>
                          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                          <p><a href="#">Learn More</a></p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div> <!-- /.untree_co-section -->
              <div class="untree_co-section">
                <div class="container">
                  <div class="row justify-content-center mb-5">
                    <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="0">
                      <h2 class="line-bottom text-center mb-4">Pricing</h2>
                      <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 mb-4 mb-lg-0 col-lg-4" data-aos="fade-up" data-aos-delay="00">
                      <div class="pricing">
                        <!-- <div class="pricing-img mb-4"><img src="images/1x/asset-1.png" alt="Image" class="img-fluid"></div> -->
                        <div class="pricing-body">
            
                          <h3 class="pricing-plan-title">Starter</h3>
                          <div class="price"><span class="fig">$50.99</span><span>/month</span></div>
                          <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                          
                          <p><a href="#" class="btn btn-outline-primary">Get Started</a></p>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 mb-4 mb-lg-0 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                      <div class="pricing">
                        <!-- <div class="pricing-img mb-4"><img src="images/1x/asset-2.png" alt="Image" class="img-fluid"></div> -->
                        <div class="pricing-body">
            
                          <h3 class="pricing-plan-title">Business</h3>
                          <div class="price"><span class="fig">$99.99</span><span>/month</span></div>
                          <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                          
                          <p><a href="#" class="btn btn-primary">Get Started</a></p>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 mb-4 mb-lg-0 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                      <div class="pricing">
                        <!-- <div class="pricing-img mb-4"><img src="images/1x/asset-3.png" alt="Image" class="img-fluid"></div> -->
                        <div class="pricing-body">
            
                          <h3 class="pricing-plan-title">Premium</h3>
                          <div class="price"><span class="fig">$199.99</span><span>/month</span></div>
                          <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                          
                          <p><a href="#" class="btn btn-outline-primary">Get Started</a></p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div> <!-- /.untree_co-section -->
              <div class="untree_co-section bg-light">
                <div class="container">
                  <div class="row">
                    <div class="col-lg-7 text-center mx-auto">
            
                      <h3 class="line-bottom mb-4">Testimonials</h3>
                      <div class="owl-carousel wide-slider-testimonial">
                        <div class="item">
                          <blockquote class="block-testimonial">
            
                            <p>
                            &ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
                            <div class="author">
                              <img src="images/person_1.jpg" alt="Free template by TemplateUX">
                              <h3>John Doe</h3>
                              <p class="position">CEO, Founder</p>
                            </div>
                          </blockquote>
                        </div>
            
                        <div class="item">
                          <blockquote class="block-testimonial">
            
                            <p>
                            &ldquo;When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.&rdquo;</p>
                            <div class="author">
                              <img src="images/person_2.jpg" alt="Free template by TemplateUX">
                              <h3>James Woodland</h3>
                              <p class="position">Designer at Facebook</p>
                            </div>
                          </blockquote>
                        </div>
            
                        <div class="item">
                          <blockquote class="block-testimonial">
            
                            <p>
                            &ldquo;A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.&rdquo;</p>
                            <div class="author">
                              <img src="images/person_3.jpg" alt="Free template by TemplateUX">
                              <h3>Rob Smith</h3>
                              <p class="position">Product Designer at Twitter</p>
                            </div>
                          </blockquote>
                        </div>
                      </div>
            
                    </div>
                  </div>
                </div>
              </div>
              <div class="untree_co-section">
            
            
                <div class="container">
                  <div class="row">
                    <div class="col-lg-5 mr-auto mb-5 mb-lg-0"  data-aos="fade-up" data-aos-delay="0">
                      <img src="images/img-school-5-min.jpg" alt="image" class="img-fluid">
                    </div>
                    <div class="col-lg-7 ml-auto" data-aos="fade-up" data-aos-delay="100">
                      <h3 class="line-bottom mb-4">Why Choose Us</h3>
                      <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
            
                      <div class="custom-accordion" id="accordion_1">
                        <div class="accordion-item">
                          <h2 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Good Teachers and Staffs</button>
                          </h2>
            
                          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion_1">
                            <div class="accordion-body">
                              <div class="d-flex">
                                <div class="accordion-img mr-4">
                                  <img src="images/img-school-1-min.jpg" alt="Image" class="img-fluid">
                                </div>
                                <div>
                                  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                                  <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div> <!-- .accordion-item -->
            
                        <div class="accordion-item">
                          <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">We Value Good Characters</button>
                          </h2>
                          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion_1">
                            <div class="accordion-body">
                              <div class="d-flex">
                                <div class="accordion-img mr-4">
                                  <img src="images/img-school-2-min.jpg" alt="Image" class="img-fluid">
                                </div>
                                <div>
                                  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                                  <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div> <!-- .accordion-item -->
                        <div class="accordion-item">
                          <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Your Children are Safe</button>
                          </h2>
            
                          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion_1">
                            <div class="accordion-body">
                              <div class="d-flex">
                                <div class="accordion-img mr-4">
                                  <img src="images/img-school-3-min.jpg" alt="Image" class="img-fluid">
                                </div>
                                <div>
                                  <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane.</p>
                                  <p>Pityful a rethoric question ran over her cheek, then she continued her way.</p>
                                </div>
                              </div>
            
                            </div>
                          </div>
            
                        </div> <!-- .accordion-item -->
            
                      </div>
            
                    </div>
                  </div>
                </div>
              </div> <!-- /.untree_co-section -->
              <div class="site-footer">
                <div class="container">
                  <div class="row">
                    <div class="col-lg-3 mr-auto">
                      <div class="widget">
                        <h3>About Us<span class="text-primary">.</span> </h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                      </div> <!-- /.widget -->
                      <div class="widget">
                        <h3>Connect</h3>
                        <ul class="list-unstyled social">
                          <li><a href="#"><span class="icon-instagram"></span></a></li>
                          <li><a href="#"><span class="icon-twitter"></span></a></li>
                          <li><a href="#"><span class="icon-facebook"></span></a></li>
                          <li><a href="#"><span class="icon-linkedin"></span></a></li>
                          <li><a href="#"><span class="icon-pinterest"></span></a></li>
                          <li><a href="#"><span class="icon-dribbble"></span></a></li>
                        </ul>
                      </div> <!-- /.widget -->
                    </div> <!-- /.col-lg-3 -->
            
                    <div class="col-lg-2 ml-auto">
                      <div class="widget">
                        <h3>Projects</h3>
                        <ul class="list-unstyled float-left links">
                          <li><a href="#">Web Design</a></li>
                          <li><a href="#">HTML5</a></li>
                          <li><a href="#">CSS3</a></li>
                          <li><a href="#">jQuery</a></li>
                          <li><a href="#">Bootstrap</a></li>
                        </ul>
                      </div> <!-- /.widget -->
                    </div> <!-- /.col-lg-3 -->
            
                    <div class="col-lg-3">
                      <div class="widget">
                        <h3>Gallery</h3>
                        <ul class="instafeed instagram-gallery list-unstyled">
                          <li><a class="instagram-item" href="images/gal_1.jpg" data-fancybox="gal"><img src="images/gal_1.jpg" alt="" width="72" height="72"></a>
                          </li>
                          <li><a class="instagram-item" href="images/gal_2.jpg" data-fancybox="gal"><img src="images/gal_2.jpg" alt="" width="72" height="72"></a>
                          </li>
                          <li><a class="instagram-item" href="images/gal_3.jpg" data-fancybox="gal"><img src="images/gal_3.jpg" alt="" width="72" height="72"></a>
                          </li>
                          <li><a class="instagram-item" href="images/gal_4.jpg" data-fancybox="gal"><img src="images/gal_4.jpg" alt="" width="72" height="72"></a>
                          </li>
                          <li><a class="instagram-item" href="images/gal_5.jpg" data-fancybox="gal"><img src="images/gal_5.jpg" alt="" width="72" height="72"></a>
                          </li>
                          <li><a class="instagram-item" href="images/gal_6.jpg" data-fancybox="gal"><img src="images/gal_6.jpg" alt="" width="72" height="72"></a>
                          </li>
                        </ul>
                      </div> <!-- /.widget -->
                    </div> <!-- /.col-lg-3 -->
            
            
                    <div class="col-lg-3">
                      <div class="widget">
                        <h3>Contact</h3>
                        <address>43 Raymouth Rd. Baltemoer, London 3910</address>
                        <ul class="list-unstyled links mb-4">
                          <li><a href="tel://11234567890">+1(123)-456-7890</a></li>
                          <li><a href="tel://11234567890">+1(123)-456-7890</a></li>
                          <li><a href="mailto:info@mydomain.com">info@mydomain.com</a></li>
                        </ul>
                      </div> <!-- /.widget -->
                    </div> <!-- /.col-lg-3 -->
            
                  </div> <!-- /.row -->
            
                  <div class="row mt-5">
                    <div class="col-12 text-center">
                      <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script>. All Rights Reserved. &mdash; Designed with love by <a href="https://untree.co">Untree.co</a>  Distributed By <a href="https://themewagon.com">ThemeWagon</a> <!-- License information: https://untree.co/license/ -->
                      </div>
                    </div>
                  </div> <!-- /.container -->
                </div> <!-- /.site-footer -->
                <div id="overlayer"></div>
                <div class="loader">
                  <div class="spinner-border" role="status">
                    <span class="sr-only">Loading...</span>
                  </div>
                </div>
                <script src="frontend/js/jquery-3.4.1.min.js"></script>
                <script src="frontend/js/popper.min.js"></script>
                <script src="frontend/js/bootstrap.min.js"></script>
                <script src="frontend/js/owl.carousel.min.js"></script>
                <script src="frontend/js/jquery.animateNumber.min.js"></script>
                <script src="frontend/js/jquery.waypoints.min.js"></script>
                <script src="frontend/js/jquery.fancybox.min.js"></script>
                <script src="frontend/js/jquery.sticky.js"></script>
                <script src="frontend/js/aos.js"></script>
                <script src="frontend/js/custom.js"></script>
    </body>
</html>
