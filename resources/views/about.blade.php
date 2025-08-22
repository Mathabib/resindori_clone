<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <title>Document</title>
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
    
        <div>
            
        </div>
    </div>
</body>
</html>