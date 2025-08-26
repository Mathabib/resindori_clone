@extends('layouts.app')

@section('content')
<style>
    *{
        /* border: solid red; */
    }
    .tulisan-konten{
        font-size: 16px !important;
    }
    .page-title{
        text-align: center;
    }

/* 
    body {
	align-items: center;
	justify-content: center;
    } */

@keyframes scroll {
    0% { transform: translateX(0); }
    100% { transform: translateX(calc(-250px * 7)); }
}

.slider {
    height: 100px;
    margin: auto;
    overflow: hidden;
    position: relative;
    width: 100%; /* biar penuh */
}

.slider .slide-track {
    animation: scroll 40s linear infinite;
    display: flex;
    width: calc(250px * 14);
}

.slider .slide {
    height: 100px;
    width: 250px;
    flex-shrink: 0; /* jangan mengecil */
}

.slide{
    margin-right: 30px;
    margin-left: 30px;
}

</style>

    <h3 class="page-title" style="color: #00aeef;">Our Clients</h3>
    <hr>

    <div class="row">
        <div class="col-3 d-flex flex-column gap-5">
            <div class="col">
                <img width="200" src="{{ asset('images/no_image.jpg') }}" alt="">
            </div>
            <div class="col">
                <img width="200" src="{{ asset('images/no_image.jpg') }}" alt="">
            </div>
        </div>
        <div class="col-9">
            <p class="tulisan-konten">
                Many of our recent and current Clients include some of the world’s leading banks, major Coal Clients, national & international Clients and Process Groups for Gold, Copper, Nickel and other minerals & metals. 
                Details may be discussed on a case specific basis where appropriate and in consideration of the confidential nature of some works. 
            </p>
        </div>
    </div>

   <style>
  
  

</style>

<div class="slider mt-5">
	<div class="slide-track">
		<div class="slide">
			<img src="{{ asset('assets/clients_logo/adaro.png') }}" height="" width="200" alt="" />
		</div>
		<div class="slide">
			<img src="{{ asset('assets/clients_logo/amman.png') }}" height="" width="200" alt="" />
		</div>
		<div class="slide">
			<img src="{{ asset('assets/clients_logo/buma.png') }}" height="" width="200" alt="" />
		</div>
		<div class="slide">
			<img src="{{ asset('assets/clients_logo/pertamina.png') }}" height="" width="200" alt="" />
		</div>
		<div class="slide">
			<img src="{{ asset('assets/clients_logo/petrosea.png') }}" height="" width="200" alt="" />
		</div>
		<div class="slide">
			<img src="{{ asset('assets/clients_logo/solway.png') }}" height="" width="200" alt="" />
		</div>
		<div class="slide">
			<img src="{{ asset('assets/clients_logo/vale.png') }}" height="" width="200" alt="" />
		</div>
	</div>
</div>
@endsection
