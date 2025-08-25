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
</style>

    <h3 class="page-title">About Us</h3>
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

    <div class="row mt-5">
        <div class="col">
            <img width="200" src="{{ asset('images/no_image.jpg') }}" alt="">
        </div>
        <div class="col">
            <img width="200" src="{{ asset('images/no_image.jpg') }}" alt="">
        </div>
        <div class="col">
            <img width="200" src="{{ asset('images/no_image.jpg') }}" alt="">
        </div>
        <div class="col">
            <img width="200" src="{{ asset('images/no_image.jpg') }}" alt="">
        </div>
    </div>
@endsection
