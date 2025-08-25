@extends('layouts.app')
@section('content')

<style>
    .carousel-item img {
  height: 500px;
  object-fit: cover;

}
</style>
    <div>
        <h1>Our Services</h1>
    </div>
    <div id="carouselExampleDark" class="carousel carousel-dark slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="4" aria-label="Slide 5"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="5" aria-label="Slide 6"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="6" aria-label="Slide 7"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="7" aria-label="Slide 8"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="8" aria-label="Slide 9"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="9" aria-label="Slide 10"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="10" aria-label="Slide 11"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="11" aria-label="Slide 12"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="12" aria-label="Slide 13"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="13" aria-label="Slide 14"></button>
        </div>
        <div class="carousel-inner">
            
            {{-- === 1 === --}}
            <a href="">
                <div class="carousel-item active" data-bs-interval="10000">
                <img src="{{ asset('images/no_image.jpg') }}" height="500px" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>
                        Feasibility Studies & Technical Due Diligence
                    </h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            </a>
            

            {{-- === 2 === --}}
            <div class="carousel-item" data-bs-interval="2000">
                <img src="{{ asset('images/no_image.jpg') }}" height="500px" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>
                        Project Development & Construction Services
                    </h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>

            {{-- === 3 === --}}
            <div class="carousel-item">
                <img src="{{ asset('images/no_image.jpg') }}" height="500px" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>
                        Engineering Services
                    </h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>

            {{-- === 4 === --}}
            <div class="carousel-item">
                <img src="{{ asset('images/no_image.jpg') }}" height="500px" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>
                       Design & Drafting Services, Shop Drawings
                    </h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>

            {{-- === 5 === --}}
            <div class="carousel-item">
                <img src="{{ asset('images/no_image.jpg') }}" height="500px" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>
                        Coal Development
                    </h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>

            {{-- === 6 === --}}
            <div class="carousel-item">
                <img src="{{ asset('images/no_image.jpg') }}" height="500px" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>
                        Minerals Development
                    </h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>

            {{-- === 7 === --}}
            <div class="carousel-item">
                <img src="{{ asset('images/no_image.jpg') }}" height="500px" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>
                        Wash Plants BoP
                    </h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>

            {{-- === 8 === --}}
            <div class="carousel-item">
                <img src="{{ asset('images/no_image.jpg') }}" height="500px" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>
                        Oil & Gas
                    </h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>

            {{-- === 9 === --}}
            <div class="carousel-item">
                <img src="{{ asset('images/no_image.jpg') }}" height="500px" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>
                        Power Generation   
                    </h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>

            {{-- === 10 === --}}
            <div class="carousel-item">
                <img src="{{ asset('images/no_image.jpg') }}" height="500px" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>
                        Site Communications  & IT System Design    
                    </h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>

            {{-- === 11 === --}}
            <div class="carousel-item">
                <img src="{{ asset('images/no_image.jpg') }}" height="500px" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>
                        Steel Fabrication Management    
                    </h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>

            {{-- === 12 === --}}
            <div class="carousel-item">
                <img src="{{ asset('images/no_image.jpg') }}" height="500px" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>
                        Minerals Trading Support    
                    </h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>

            {{-- === 13 === --}}
            <div class="carousel-item">
                <img src="{{ asset('images/no_image.jpg') }}" height="500px" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>
                        Local Content
                    </h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>

            {{-- === 14 === --}}
            <div class="carousel-item">
                <img src="{{ asset('images/no_image.jpg') }}" height="500px" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>
                        Specialist Skill
                    </h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

@endsection