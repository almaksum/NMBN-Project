<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Boostrap --}}

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

    <!-- swiper css -->

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"
    />

    {{-- vanilla CSS --}}

    <link rel="stylesheet" href="{{ url('css/style.css') }}">

    <link rel="stylesheet" href="{{ url('css/layanan.css') }}">

    {{-- Fav-icon --}}

    <link rel="shortcut icon" href="{{ url('gambar/logo/nmbn.ico') }}" type="image/x-icon">

    <title>{{ $title }}</title>
</head>
<body>
    {{-- Navbar --}}
    
    @include('layouts.partial1')

    {{-- end navbar --}}

    {{-- Body --}}

    <div class="py-5">
        @yield('utama')
    </div>

    {{-- end Body --}}

    {{-- Footer --}}

    <footer class="text-light">
        <div class="container py-5 px-5">
          <div class="row">
            <div class="col-md-4 text-center" id="footer">
              <img src="gambar/logo/nmbn.jpeg" class="img-fluid rounded-circle" alt="NMBN-PROJECT">
            </div>
            
            <div class="col-md-4 text-center mt-5">
              <ul class="list-unstyled">
                <li><a href="/" style="color: white; text-decoration: none">Home</a></li>
                <li><a href="/layanan" style="color: white; text-decoration: none">Layanan</a></li>
                <li><a href="/galeri" style="color: white; text-decoration: none">Galeri</a></li>
                <li><a href="/kontak" style="color: white; text-decoration: none">Kontak</a></li>
                <li><a href="/tentang" style="color: white; text-decoration: none">Tentang</a></li>
              </ul>
            </div>

            <div class="col-md-2 mt-5 ms-auto text-center">
              <ul class="list-unstyled">
              <li><h5>Hubungi Kami</h5></li>
              
              <li><a href="mailto:almaksum3@gmail.com" target="blank" style="color: #fff; text-decoration: none"><i class="bi bi-envelope-at"> admin@gmail.com</i></a></li>
              
              <li><a href="https://api.whatsapp.com/send?phone=6285399492529" target="blank" style="color: #fff; text-decoration: none"><i class="bi bi-telephone-x"> +62-851-7678-7803</i></a></li>
              
              </ul>
            </div>
            
          </div>
        </div>
        <div class="text-center py-4" style="background: #000">
          &copy; 2023 NMBN-PROJECT
        </div>
      </footer>

    {{-- end Footer --}}

    
    <!-- swiper js -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="js/layanan.js"></script>
    
</body>
</html>