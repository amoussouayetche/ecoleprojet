<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="favicon.png">

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap4" />
    <title>Gestion Ecole Primaire</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Display+Playfair:wght@400;700&family=Inter:wght@400;700&display=swap"
        rel="stylesheet">

    @include('layouts.frontend.include.style')
</head>

<body>
    <div class="site-mobile-menu">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close">
                <span class="icofont-close js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>
    <nav class="site-nav mb-5">
      @include('layouts.frontend.partials.header')
        @include('layouts.frontend.partials.navbar')
    </nav>
    <div class="untree_co-hero overlay" style="background-image: url('frontend/images/hero-img-1-min.jpg');">
      <div class="container">
          <div class="row align-items-center justify-content-center">
  
              <div class="col-12">
  
                  <div class="row justify-content-center ">
  
                      <div class="col-lg-6 text-center ">
                          {{-- <a href="#" href="https://vimeo.com/342333493" data-fancybox data-aos="fade-up"
                              data-aos-delay="0" class="caption mb-4 d-inline-block">Watch the video</a> --}}
  
                          <h1 class="mb-4 heading text-white" data-aos="fade-up" data-aos-delay="100">@yield('textHero')</h1>
                          <p class="mb-0" data-aos="fade-up" data-aos-delay="300"><a href="#"
                                  class="btn btn-secondary"> @yield('boutontextHero')</a></p>
  
                      </div>
  
  
                  </div>
  
              </div>
  
          </div> <!-- /.row -->
      </div> <!-- /.container -->
  
  </div> 
    @yield('content')
    @include('layouts.frontend.partials.footer')
    <div id="overlayer"></div>
    <div class="loader">
        <div class="spinner-border" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    @include('layouts.frontend.include.script')
</body>

</html>
