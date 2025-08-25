@extends('layouts.app')

@section('content')

<style>
.card-stack {
  position: relative;
  width: 100%;
  height: 500px;
  margin-bottom: 10px;
}

.card {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  border-radius: 10px;
  box-shadow: 0 4px 8px rgba(0,0,0,0.3);
  transition: all 0.4s ease-in-out;
  
  transform: scale(0.9) translate(80px, 60px);
  z-index: 1;
}

.card.active {
  
  transform: scale(1) translate(0,0);
  z-index: 2;
}

.controls {
  text-align: center;
}

.controls button {
  margin: 0 5px;
  padding: 5px 10px;
  border: none;
  border-radius: 6px;
  background: #444;
  color: white;
  cursor: pointer;
  transition: background 0.3s;
}

.controls button:hover {
  background: #666;
}

.controls button.active {
  background: #ffc107;
  color: black;
}

#map-title{
    text-align: center
}

.information{
    margin-top: 50px;
}
.card-stack img{
    object-fit: cover;
}
</style>

    <div class="title">
        <h2 id="map-title">Our Operations through Indonesia</h2>
    </div>
    <div class="card-stack">
        <!-- kasih data-title untuk tiap gambar -->
        <img src="{{ asset('images/no_image.jpg') }}" 
             alt="Gambar 1" 
             class="card active" 
             data-title="Our Operations through Indonesia"
             data-information="Selected projects shown, details available on request. In addition Resindo undertakes works overseas on an invitation basis, including; Malaysia, Philippines, Australia, China, Dominican Republic, others. Many Metals & Minerals projects include Power Plants, Oil & Gas facilities.(Indonesia) ">

        <img src="{{ asset('images/no_image.jpg') }}" 
             alt="Gambar 2" 
             class="card" 
             data-title="Our Operations through Overseas"
             data-information="Selected projects shown, details available on request. In addition Resindo undertakes works overseas on an invitation basis, including; Malaysia, Philippines, Australia, China, Dominican Republic, others. Many Metals & Minerals projects include Power Plants, Oil & Gas facilities. (Overseas)">
    </div>

    <div class="information">
        <p id="map-information">
            Selected projects shown, details available on request. In addition Resindo undertakes works overseas on an invitation basis, including; Malaysia, Philippines, Australia, China, Dominican Republic, others. Many Metals & Minerals projects include Power Plants, Oil & Gas facilities. 
        </p>
    </div>

    <div class="controls">
        <button data-index="0">Indonesia Map</button>
        <button data-index="1">World Map</button>
    </div>


<script>
const cards = document.querySelectorAll(".card");
const buttons = document.querySelectorAll(".controls button");
const title = document.getElementById("map-title");
const information = document.getElementById('map-information')


buttons.forEach((btn, index) => {
  btn.addEventListener("click", () => {
    // reset semua kartu & tombol
    cards.forEach(c => c.classList.remove("active"));
    buttons.forEach(b => b.classList.remove("active"));

    // aktifkan kartu sesuai tombol
    cards[index].classList.add("active");
    btn.classList.add("active");

    // update judul sesuai data-title
    title.textContent = cards[index].getAttribute("data-title");
    information.textContent = cards[index].getAttribute('data-information')
  });
});

// Set tombol pertama aktif di awal
buttons[0].classList.add("active");
</script>

@endsection
