<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <link rel="stylesheet" href="{{ asset('css/index_baru.css') }}">
        {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('/modules/mod_slidergallery/css/image-slideshow.css') }}" type="text/css">
         @stack('css')
    </head>
    <body data-bs-theme="dark">
       <div class="wrapper" id="wrapper">
           

             <div class="d-flex justify-content-between align-items-end py-2">
                <div id="logo">
                    <a href="#">
                        <img src="{{ asset('images/stories/resindo logo3.jpg') }}" alt="Logo" class="img-fluid" style="max-height:70px">
                    </a>
                </div>

                <div class="d-flex align-items-end">
                    {{-- Sitemap --}}
                    <div class="me-3 text-end">
                        <div class="mb-1">
                            <a href="#"><img src="{{ asset('images/stories/australia2.jpg') }}" class="img-fluid me-1" style="max-height:20px"></a>
                            <a href="#"><img src="{{ asset('images/stories/indonesia23.jpg') }}" class="img-fluid me-1" style="max-height:20px"></a>
                        </div>
                        <a href="#" class="text-secondary small">SITEMAP</a>
                    </div>

                    {{-- Search --}}
                    <form action="" method="post" class="d-flex">
                        <input type="text" class="form-control form-control-sm" placeholder="Search">
                        <button class="btn btn-sm btn-outline-light ms-2">
                            <img src="{{ asset('images/M_images/searchButton.gif') }}" alt="Search">
                        </button>
                    </form>
                </div>
            </div>

            <nav class="navbar navbar-expand-lg my-3 bg-secondary border rounded shadow-sm">
                    <div class="container-fluid justify-content-center flex-wrap gap-2">
                        <a class="btn button-28 fw-bold shadow {{ request()->routeIs('home') ? 'active' : ''  }}" href="{{ route('home') }}">Main Menu</a>
                        <a class="btn button-28 fw-bold shadow {{ request()->routeIs('about') ? 'active' : ''  }}" href="{{ route('about') }}">About Us</a>
                        <a class="btn button-28 fw-bold shadow {{ request()->routeIs('services') ? 'active' : ''  }}" href="{{ route('services') }}">Services</a>
                        <a class="btn button-28 fw-bold shadow {{ request()->routeIs('operations') ? 'active' : ''  }}" href="{{ route('operations') }}">Operations</a>
                        <a class="btn button-28 fw-bold shadow" href="#">Clients</a>
                        <a class="btn button-28 fw-bold shadow" href="#">Contact Us</a>
                        <a class="btn button-28 fw-bold shadow" href="#">Resindo Portal</a>
                        <a class="btn button-28 fw-bold shadow" href="#">Career</a>
                    </div>
            </nav>

            
            @yield('content')

           
            {{-- @include('components.footer') --}}
       </div>
        <div class="footer d-flex align-items-center justify-content-center">
            <p>copyright @ 2025 resergy. Allrigh Reserved</p>
        </div>
       @stack('js')
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
        <script src="{{ asset('/modules/mod_slidergallery/js/image-slideshow.js') }}" language="JavaScript1.2"></script>
        <script src="{{ asset('/js/gallery.js') }}"></script>
        
    </body>
</html>
