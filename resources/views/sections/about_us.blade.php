@extends('layouts.app')

@section('content')
<style>
    *{
        /* border: solid red; */
    }
    .tulisan-konten{
        font-size: 16px !important;
    }
</style>
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
                Resindo is a project and technology specialist Indonesian company, established in 2009 yet comprising long term personnel from Indonesia and the Region experienced in all aspects of successful project design and development for the Minerals, Mining & Power Generation sectors.
                Resindo works closely with some of the region’s leading process design houses for minerals process plant and related infrastructure development for coal, nickel, gold and other minerals, coal preparation plants and power generation.
                This also includes on a non-conflict of interest basis, the local support of specialist overseas manufacturers for projects; Gas, Coal  & Hydropower turbine generators and related specialised services, which are combined with our local integration & balance of plant capabilities.
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
