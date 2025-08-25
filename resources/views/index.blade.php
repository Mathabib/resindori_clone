@extends('layouts.app')
@section('content')
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
    
@endsection