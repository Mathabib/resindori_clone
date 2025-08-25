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
    color: black !important;
    background: #ffca2c; /* warna hover default Bootstrap warning */
    background: linear-gradient(to bottom, #ffca2c 0%, #e0a800 100%);
    box-shadow: inset 0 1px 0 #ffe58f, 0 0 10px rgba(0, 0, 0, 0.4);
}
.active{
    color: black !important;
    background: #ffca2c; /* warna hover default Bootstrap warning */
    background: linear-gradient(to bottom, #ffca2c 0%, #e0a800 100%);
    box-shadow: inset 0 1px 0 #ffe58f, 0 0 10px rgba(0, 0, 0, 0.4);
}

.button-services:active {
  border-top-width: 2px;
  box-shadow: none;
  padding-bottom: 8px;
}
</style>
    <h3 class="page-title">Our Services</h3>
<hr>


<div class="row">
    <div class="side-button-kontainer col-3 bg-secondary p-0">
        <div class="kontainer-title bg-warning mb-3 d-flex align-items-center justify-content-center">
            <p>Services</p>
        </div>
         <div class="d-flex container-fluid flex-column gap-2">
            <a class="btn button-services fw-bold shadow" href="">Project Development & Construction Services</a>
            <a class="btn button-services fw-bold shadow" href="">Engineering Services</a>
            <a class="btn button-services fw-bold shadow" href="">Design & Drafting Services, Shop Drawings</a>
            <a class="btn button-services fw-bold shadow" href="">Coal Development</a>
            <a class="btn button-services fw-bold shadow" href="">Minerals Development</a>
            <a class="btn button-services fw-bold shadow" href="">Wash Plants BoP</a>
            <a class="btn button-services fw-bold shadow" href="">Oil & Gas</a>
            <a class="btn button-services fw-bold shadow" href="">Power Generation</a>
            <a class="btn button-services fw-bold shadow" href="">Site Communications  & IT System Design</a>
            <a class="btn button-services fw-bold shadow" href="">Steel Fabrication Management</a>
            <a class="btn button-services fw-bold shadow" href="">Minerals Trading Support</a>
            <a class="btn button-services fw-bold shadow" href="">Local Content</a>
            <a class="btn button-services fw-bold shadow" href="">Specialist Skill</a>
        </div>
    </div>
    <div class="col">

    </div>

</div>
    
@endsection