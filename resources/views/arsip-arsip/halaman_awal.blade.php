<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>
<body class="bg-dark text-light">

<div class="container" id="wrapper">

    {{-- Bagian Atas --}}
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

    <nav class="navbar navbar-expand-lg my-3 bg-light border rounded shadow-sm">
    <div class="container-fluid justify-content-center flex-wrap gap-2">
        <a class="btn button-28 fw-bold shadow" href="#">Main Menu</a>
        <a class="btn button-28 fw-bold shadow" href="#">About Us</a>
        <a class="btn button-28 fw-bold shadow" href="#">Services</a>
        <a class="btn button-28 fw-bold shadow" href="#">Operations</a>
        <a class="btn button-28 fw-bold shadow" href="#">Clients</a>
        <a class="btn button-28 fw-bold shadow" href="#">Contact Us</a>
        <a class="btn button-28 fw-bold shadow" href="#">Resindo Portal</a>
        <a class="btn button-28 fw-bold shadow" href="#">Career</a>
    </div>
    </nav>



    {{-- Slider --}}
    <div id="carouselExample" class="carousel slide mb-4" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('modules/mod_slidergallery/gallery/01.jpg') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('modules/mod_slidergallery/gallery/01.jpg') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('modules/mod_slidergallery/gallery/01.jpg') }}" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>

    {{-- Banner --}}
    <div class="text-center mb-4">
        <img src="{{ asset('images/stories/bannerdepan21.jpg') }}" class="img-fluid" alt="Banner">
    </div>

    {{-- Blog Content --}}
    <div class="row leading">
        <div class="col-md-4">
            <img src="{{ asset('images/stories/paower generation.jpg') }}" alt="" class="img-fluid rounded">
        </div>
        <div class="col-md-8">
            <h2 class="text-warning">Welcome to Resindo</h2>
            <p>
                Resindo’s approach is to work closely with our Clients and align ourselves 
                to jointly meet the project goals in cost, schedule, safety and environmental management. 
                <br><br>
                Resindo strives to maximise the opportunity for local contractors wherever 
                practical through direct supervision and support.
            </p>
        </div>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
