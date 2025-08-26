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
                   Resindo provides a range of services as listed, both direct to our Clients, Third Party Consultants and Contractors. 
                </p>
                <p>
                    Resindo works in dual languages for effective communication; Indonesian and English. 
                    This ensures we provide the highest level of service to our National & International 
                    Clients and maximises local supplier and contractor opportunities for participation in 
                    projects throughout the country.
                </p>

                <ul>
                    <li>
                        Project Development, Project & Construction Management, EPCM
                    </li>
                    <li>
                        Feasibility Studies, Engineering, Design  Drafting, Shop Drawings
                    </li>
                    <li>
                        Minerals , Metals & Coal Plant Infrastructure, Process Plant Detail
                    </li>
                    <li>
                        Bulk Materials Handling, Crushing , Stacking & Load Out Systems
                    </li>
                    <li>
                        Coastal & River Port Design & Development; Bulk & Container Handling
                    </li>
                    <li>
                        Hydro, Coal , MFO & Gas Power Generation 
                    </li>
                    <li>
                        Oil & Gas Infrastructure; Structures, Fuel Farms, Piping Systems
                    </li>
                    <li>
                        Greenfield Developments & Brownfield Expansions
                    </li>
                    <li>
                        Steel Fabrication Management
                    </li>
                    <li>
                        Operation
                    </li>
                    <li>
                        Plant Efficiency Improvement
                    </li>
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