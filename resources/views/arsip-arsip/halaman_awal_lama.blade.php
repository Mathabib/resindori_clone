<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <link rel="stylesheet" href="{{ asset('css/index.css') }}">
        {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> --}}
        
    </head>
    <body>
       <div class="wrapper" id="wrapper">
            <div class="bagian_atas">
                <div id="logo">
                    <div class="moduletable">
                        <p>
                            <a href="">
                                <img src="{{ asset('images/stories/resindo logo3.jpg') }}" alt="">
                            </a>
                        </p>
                    </div>
                </div>
                <div class="sitemap_dan_search">
                        <div id="sitemap">
                            <div class="moduletableflag">
                                <p>
                                    <a href="" title="English">
                                        <img style="margin-left: 5px; margin-right: 5px;" mce_style="margin-left: 5px; margin-right: 5px;" src="{{ asset('images/stories/australia2.jpg') }}" alt="">
                                    </a>
                                    <a href="" title="Indonesia">
                                        <img style="margin-left: 5px; margin-right: 5px;" mce_style="margin-left: 5px; margin-right: 5px;" src="{{ asset('images/stories/indonesia23.jpg') }}" alt="">
                                    </a>
                                </p>
                            </div>
                            <div class="moduletable">
                                <ul class="menu">
                                    <li class="item26">
                                        <a href="">
                                            <span>SITEMAP |</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div id="search">
                            <div class="moduletablesearch">
                                <form action="" method="post" class="searchsearch">
                                    {{-- <label for=""> Search </label> --}}
                                    <input type="text" placeholder="Search">
                                    <input type="image" style="margin-left: 5px" value="GO" class="buttonsearch" src="{{ asset('images/M_images/searchButton.gif') }}">
                                    {{-- <button ><img src="{{ asset('images/M_images/searchButton.gif') }}" alt=""></button> --}}
                                    <input type="hidden" name="option" value="com_search">
                                    <input type="hidden" name="task" value="search">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="menu">
                    <div class="moduletable_menu">
                    {{-- ========================================BAGIAN MENU TOMBOL ====================                 --}}
                        <ul class="menu">
                            <li class="item">
                                <a href="">
                                    <span>Main Menu</span>
                                </a>
                            </li>
                            <li class="item">
                                <a href="">
                                    <span>About Us</span>
                                </a>
                            </li>
                            <li class="item">
                                <a href="">
                                    <span>Services</span>
                                </a>
                            </li>
                            <li class="item">
                                <a href="">
                                    <span>Operations</span>
                                </a>
                            </li>
                            <li class="item">
                                <a href="">
                                    <span>Clients</span>
                                </a>
                            </li>
                            <li class="item">
                                <a href="">
                                    <span>Contact Us</span>
                                </a>
                            </li>
                            <li class="item">
                                <a href="">
                                    <span>Resindo Portal</span>
                                </a>
                            </li>
                            <li class="item">
                                <a href="">
                                    <span>Career</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

            
            <script src="{{ asset('/modules/mod_slidergallery/js/image-slideshow.js') }}" language="JavaScript1.2"></script>
            <script src="{{ asset('/js/gallery.js') }}"></script>
            <link rel="stylesheet" href="{{ asset('/modules/mod_slidergallery/css/image-slideshow.css') }}" type="text/css">
            <div id="slider">
                <div class="moduletablegallery">
                    <div id="slidergallery" style="width: 944px;">
                        <div id="previewPane" style="height: 274px; background:#1e2023">
                            <img src="{{ asset('modules/mod_slidergallery/gallery/01.jpg') }}" alt="">
                            <div id="waitMessage" style="display: none"></div>
                        </div>
                        <div id="galleryContainer">
                            <div id="arrow_left">
                                <img src="{{ asset('modules/mod_slidergallery/images/arrow_left.gif') }}" alt="">
                            </div>
                            <div id="arrow_right">
                                <img src="{{ asset('modules/mod_slidergallery/images/arrow_right.gif') }}" alt="">
                            </div>
                            <div id="theImages">
                                <a href="#">
                                    <img src="{{ asset('modules/mod_slidergallery/gallery/01.jpg') }}" height="100" width="160" style="opacity: 0.5" alt="">
                                    <img src="{{ asset('modules/mod_slidergallery/gallery/01.jpg') }}" height="100" width="160" style="opacity: 0.5" alt="">
                                    <img src="{{ asset('modules/mod_slidergallery/gallery/01.jpg') }}" height="100" width="160" style="opacity: 0.5" alt="">
                                    <img src="{{ asset('modules/mod_slidergallery/gallery/01.jpg') }}" height="100" width="160" style="opacity: 0.5" alt="">
                                    <img src="{{ asset('modules/mod_slidergallery/gallery/01.jpg') }}" height="100" width="160" style="opacity: 0.5" alt="">
                                    <img src="{{ asset('modules/mod_slidergallery/gallery/01.jpg') }}" height="100" width="160" style="opacity: 0.5" alt="">
                                    <img src="{{ asset('modules/mod_slidergallery/gallery/01.jpg') }}" height="100" width="160" style="opacity: 0.5" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="banner">
                <div class="moduletablebannerdepan">
                    <p>
                        <img src="{{ asset('images/stories/bannerdepan21.jpg') }}" alt="">
                    </p>
                </div>
            </div>
            <div id="maincolumn">
                <div id="main">
                    <div class="blog">
                        <div class="leading">
                            <div class="gambar_blog">
                                <img src="{{ asset('images/stories/paower generation.jpg') }}" alt="">
                            </div>
                            <div class="tulisan_blog">
                                <h2>Welcome to Resindo</h2>
                                <p>
                                    Resindo’s approach is to work closely with our Clients and align ourselves to jointly meet the project goals in cost, schedule, safety and environmental  management. 
                                    <br><br>
                                    Resindo strives to maximise the oportunity for local contractors wherever practical through direct supervision and support
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>
