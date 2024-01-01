@extends('layouts.master')

@section('utama')
<main>
    <div class="tcd">
        <h1>Layanan Tersedia</h1>
        <hr />

      <a href="#"><i>Pesan Sekarang!</i></a>
    </div>

    <!-- slide -->
    <div class="swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide slide-1">
          <div>
            <h2>Design Bangunan</h2>

            <a href="#">explore</a>
          </div>
        </div>

        <div class="swiper-slide slide-2">
          <div>
            <h2>Pembangunan Baru</h2>

            <a href="#">explore</a>
          </div>
        </div>

        <div class="swiper-slide slide-3">
          <div>
            <h2>Renovasi Bangunan</h2>

            <a href="#">explore</a>
          </div>
        </div>
      </div>

      <!-- Pagination -->
      <div class="paginate"></div>

      <!-- Tombol Geser -->

      <!-- Tombol Geser -->
      <div class="swiper-buttons">
        <button class="swiper-button-prev" aria-label="Previous"></button>
        <button class="swiper-button-next" aria-label="Next"></button>
      </div>
    </div>
  </main>

@endsection