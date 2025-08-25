@extends('layouts.app')
@section('content')

<style>
    .carousel-item img {
  height: 500px;
  object-fit: cover;

}
.page-title{
    text-align: center;
}

.side-button-kontainer{
    border-radius: 20px;
}
.kontainer-title{
    width: 100%;
    height: 50px;
    background: #343a40; /* abu-abu gelap seperti bootstrap .btn-dark */
    border: 1px solid #1d2124;
    border-radius: 4px;
    box-shadow: inset 0 1px 0 #495057;
    color: white;
    cursor: pointer;
    display: inline-block;
    font-size: 16px;
    font-weight: bold;
    outline: 0;
    padding: 10px 12px;
    text-decoration: none;
    text-shadow: 0 -1px 0 #000; /* bayangan teks lebih gelap */
    background: linear-gradient(to bottom, #343a40 0%, #1d2124 100%);
    transition: padding 50ms ease-in-out, border-top-width 50ms ease-in-out, box-shadow 150ms ease-in-out;
}


.button-services {
  background: #343a40; /* abu-abu gelap seperti bootstrap .btn-dark */
  border: 1px solid #1d2124;
  border-radius: 4px;
  box-shadow: inset 0 1px 0 #495057;
  color: white;
  cursor: pointer;
  display: inline-block;
  font-size: 13px;
  font-weight: bold;
  outline: 0;
  padding: 3px;
  text-decoration: none;
  text-shadow: 0 -1px 0 #000; /* bayangan teks lebih gelap */
  background: linear-gradient(to bottom, #343a40 0%, #1d2124 100%);
  transition: padding 50ms ease-in-out, border-top-width 50ms ease-in-out, box-shadow 150ms ease-in-out;
}

.button-services:hover {
    color: white !important;
    background: linear-gradient(to bottom, #4fb6e1 0%, #007bb7 100%);
    box-shadow: inset 0 1px 0 #80d4f5, 0 0 10px rgba(0, 0, 0, 0.4);
}

.active {
    color: white !important;
    background: linear-gradient(to bottom, #4fb6e1 0%, #007bb7 100%);
    box-shadow: inset 0 1px 0 #80d4f5, 0 0 10px rgba(0, 0, 0, 0.4);
}

.active2 {
    color: white !important;
    background: linear-gradient(to bottom, #4fb6e1 0%, #007bb7 100%);
    box-shadow: inset 0 1px 0 #80d4f5, 0 0 10px rgba(0, 0, 0, 0.4);
}

.button-services:active {
  border-top-width: 2px;
  box-shadow: none;
  padding-bottom: 8px;
}

/* =======================BAGIAN KONTEN=================== */

.kontainer-konten{
    display: flex;
}
.text-konten{
    flex: 1;
}
</style>
    <h3 class="page-title">Our Services</h3>
<hr>


<div class="row">
    <div class="side-button-kontainer col-3 bg-secondary p-0">
        <div class="kontainer-title bg-warning mb-3 d-flex align-items-center justify-content-center">
            <p>Services</p>
        </div>
         <div class="d-flex container-fluid flex-column gap-2 mb-3">
            <a class="btn button-services fw-bold shadow {{ request()->routeIs('service1') ? 'active' : ''  }}" href="{{ route('service1') }}">Project Development & Construction Services</a>
            <a class="btn button-services fw-bold shadow {{ request()->routeIs('service2') ? 'active' : ''  }}" href="{{ route('service2') }}">Engineering Services</a>
            <a class="btn button-services fw-bold shadow {{ request()->routeIs('service3') ? 'active' : ''  }}" href="{{ route('service3') }}">Design & Drafting Services, Shop Drawings</a>
            <a class="btn button-services fw-bold shadow {{ request()->routeIs('service4') ? 'active' : ''  }}" href="{{ route('service4') }}">Coal Development</a>
            <a class="btn button-services fw-bold shadow {{ request()->routeIs('service5') ? 'active' : ''  }}" href="{{ route('service5') }}">Minerals Development</a>
            <a class="btn button-services fw-bold shadow {{ request()->routeIs('service6') ? 'active' : ''  }}" href="{{ route('service6') }}">Wash Plants BoP</a>
            <a class="btn button-services fw-bold shadow {{ request()->routeIs('service7') ? 'active' : ''  }}" href="{{ route('service7') }}">Oil & Gas</a>
            <a class="btn button-services fw-bold shadow {{ request()->routeIs('service8') ? 'active' : ''  }}" href="{{ route('service8') }}">Power Generation</a>
            <a class="btn button-services fw-bold shadow {{ request()->routeIs('service9') ? 'active' : ''  }}" href="{{ route('service9') }}">Site Communications  & IT System Design</a>
            <a class="btn button-services fw-bold shadow {{ request()->routeIs('service10') ? 'active' : ''  }}" href="{{ route('service10') }}">Steel Fabrication Management</a>
            <a class="btn button-services fw-bold shadow {{ request()->routeIs('service11') ? 'active' : ''  }}" href="{{ route('service11')}}">Minerals Trading Support</a>
            <a class="btn button-services fw-bold shadow {{ request()->routeIs('service12') ? 'active' : ''  }}" href="{{ route('service12')}}">Local Content</a>
            <a class="btn button-services fw-bold shadow {{ request()->routeIs('service13') ? 'active' : ''  }}" href="{{ route('service13')}}">Specialist Skill</a>
        </div>
    </div>
    <div class="kontainer-konten col flex-column">
        <div class="text-konten d-flex flex-row">
            {{-- <div class=" d-flex flex-column gap-5">
                <div class="col">
                    <img width="180" src="{{ asset('images/no_image.jpg') }}" alt="">
                </div>
                <div class="col">
                    <img width="180" src="{{ asset('images/no_image.jpg') }}" alt="">
                </div>
            </div> --}}
            <div class="">
                <p class="tulisan-konten">
                    Resindo is formally qualified by the Ministry of Energy and Mineral Resources, Republic of Indonesia, to undertake Feasibility Studies works in our field that are submitted to the Government as part of a Project’s Development and permit application requirement. 
                    This includes the approval and certification of Resindo Indonesian technical personnel required as part of this qualification. 
                    Resindo undertakes the full range of feasibility studies for  project development including Technical Due Diligence works to support Acquisitions.
                    Our area is Concept Development through to full Design, Capital & Operating Cost development with Economic Models for greenfields or expansion projects including:	
                </p>
                <ul>
                    <li>Process Plant Detail & Balance of Plant</li>
                    <li>Plant Electrical & Control Systems, Communication Systems</li>
                    <li>Power Plants</li>
                    <li>RoM systems, Crushing, Stockyards, Conveyors</li>
                    <li>Haul Roads & Earthworks Optimisation/Modeling</li>
                    <li>Camps, Workshops & Support Facilities</li>
                    <li>River & Coastal Ports</li>
                    <li>Loadout to Barges or Vessels</li>
                </ul>
            </div>
        </div>

        {{-- <div class="row mt-5">
            <div class="col">
                <img width="210" src="{{ asset('images/no_image.jpg') }}" alt="">
            </div>
            <div class="col">
                <img width="210" src="{{ asset('images/no_image.jpg') }}" alt="">
            </div>
            <div class="col">
                <img width="210" src="{{ asset('images/no_image.jpg') }}" alt="">
            </div>
        </div> --}}
    </div>

</div>
    
@endsection