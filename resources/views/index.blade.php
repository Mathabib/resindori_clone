@extends('layouts.app')
@section('content')
<style>
    .text-content{
        color: black;
    }
    .kontainer-gambar img{
        height: 400px;
        object-fit: cover;
    }
</style>
    <div id="carouselExample" class="carousel carousel-dark slide mb-4" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="kontainer-gambar carousel-item active">
                <img src="{{ asset('images/no_image.jpg') }}" class="d-block w-100" alt="...">
                {{-- <img src="{{ asset('modules/mod_slidergallery/gallery/01.jpg') }}" class="d-block w-100" alt="..."> --}}
            </div>
            <div class="kontainer-gambar carousel-item">
                <img src="{{ asset('images/no_image.jpg') }}" class="d-block w-100" alt="...">
                {{-- <img src="{{ asset('modules/mod_slidergallery/gallery/01.jpg') }}" class="d-block w-100" alt="..."> --}}
            </div>
            <div class="kontainer-gambar carousel-item">
                <img src="{{ asset('images/no_image.jpg') }}" class="d-block w-100" alt="...">
                {{-- <img src="{{ asset('modules/mod_slidergallery/gallery/01.jpg') }}" class="d-block w-100" alt="..."> --}}
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
    {{-- <div class="text-center mb-4">
        <img src="{{ asset('images/stories/bannerdepan21.jpg') }}" class="img-fluid" alt="Banner">
    </div> --}}

    <div style="width: 100%; height: 80px; background-color: #00aeef">
        <div>
            <h3 style="text-align: center">CONSULTING, ENGGINEERING, & IMPLEMENTATION</h3>
            <h5 style="text-align: center">FOR MINERALS, METALS & POWERS GENERATION THROUGHOUT THE REGION</h5>
        </div>
    </div>
    <hr style="border: 4px solid #049dea">

    {{-- Blog Content --}}
    <div class="row leading">
        <div class="col-md-4">
            <img src="{{ asset('images/stories/paower generation.jpg') }}" alt="" class="img-fluid rounded">
        </div>
        <div class="col-md-8">
            <h2 class="" style="color: #00aeef">Welcome to Resergy</h2>
            <p class="text-content">
                Resergy’s approach is to work closely with our Clients and align ourselves 
                to jointly meet the project goals in cost, schedule, safety and environmental management. 
                <br><br>
                Resergy strives to maximise the opportunity for local contractors wherever 
                practical through direct supervision and support.
            </p>
        </div>
    </div>
    
@endsection