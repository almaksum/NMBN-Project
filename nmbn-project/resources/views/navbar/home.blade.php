@extends('layouts.master')

@section('utama')
    <div style="background-image: url('{{ asset('gambar/home/background2.png') }}'); background-repeat: no-repeat; background-size: cover; margin-top: 50px">
        <div class="container mt-5">
            <div class="row">
                <div class="col-sm-7 text-light" style="padding-top: 80px" id="pagehome">
                    <b class="fs-2">NMBN-PROJECT</b>
                    <p class="fs-6">
                        Di dirikan oleh bapak Marto Susanto dan resmikan pada 16 september 2020. PT.
                        Brilliant Jaya Pondasi berkomitmen untuk berperan aktif menyumbangkan tenaga dan
                        pikiran berupa pelayanan jasa pelaksanaan konstruksi sebagai rekanan bagi pihak
                        pemerintah maupun swasta.
                    </p>

                    <a href="#"><button class="btn text-light btn-primary">Selengkapnya</button></a>

                </div>

                <div class="col-sm-5 text-center" id="home1">
                    <img src="gambar/logo/nmbn.jpeg" alt="NMBN-PROJECT" class="img-fluid justify-content-center py-5">
                </div>
                
            </div>
        </div>
    </div>
    
    <div style="background: #fff; background-repeat: no-repeat; background-size: cover">
        <div class="container">
            <div class="row">

                <div class="col-sm-8 mx-auto text-center" style="padding-top: 80px">
                    <b class="fs-2">Kenapa NMBN-PROJECT?</b>
                    <p class="fs-6">
                        NMBN-PROJECT membangun bangunan masa depan yang berkualitas dengan gedung baru,
                        kami yang menawarkan desain inovatif, keandalan struktural, dan kenyamanan yang luar biasa. 
                        Bersama kami, wujudkan visi Anda dalam bentuk gedung yang tak hanya memikat secara
                        visual, tetapi juga menjawab kebutuhan fungsional dengan presisi
                    </p>
                </div>
                
            </div>
        </div>
    </div>

    <div style="margin-top: 120px">
        <div class="container">
            <div class="row">
                <b class="fs-1 text-center">Layanan Kami</b>
            </div>
        </div>
    </div>

    <div style="background: #808080; background-repeat: no-repeat; background-size: cover; margin-top: 50px">
        <div class="container mt-5 py-5">
            <div class="row">
                
                <div class="col-sm-6 text-center" id="home2">
                    <img src="gambar/service/1.jpg" alt="NMBN-PROJECT" class="img-fluid justify-content-center py-5">
                </div>

                <div class="col-sm-6" style="padding-top: 80px">
                    <b class="fs-2">Design Bangunan</b>
                    <p class="fs-6">
                        Desain bangunan kami menggabungkan keindahan estetika dengan kepraktisan
                        fungsional. Menghadirkan kemewahan dalam setiap detailnya, desain ini diciptakan
                        dengan fokus pada kenyamanan pengguna serta memperhatikan keberlanjutan
                        lingkungan. Dari konsep hingga realisasi, kami memastikan bahwa setiap elemen
                        dirancang untuk menghadirkan pengalaman yang luar biasa
                    </p>

                    <a href="/layanan-kami"><button class="btn text-light btn-primary">Selengkapnya</button></a>

                </div>
                
            </div>
        </div>
    </div>

    <div style="background: #fff; background-repeat: no-repeat; background-size: cover; margin-top: 50px">
        <div class="container mt-5 py-5">
            <div class="row">

                <div class="col-sm-6" style="padding-top: 80px">
                    <b class="fs-2">Pembangunan Baru</b>
                    <p class="fs-6">
                        Merupakan proyek pembangunan gedung baru yang menggabungkan kecanggihan
                        arsitektur modern dengan teknologi mutakhir, menciptakan lingkungan yang
                        inspiratif dan fungsional. Dengan perhatian terhadap detail dan kualitas bahan
                        terbaik, kami hadir untuk menghadirkan sebuah landmark yang memperkaya setiap kota
                    </p>

                    <a href="/layanan-kami"><button class="btn text-light btn-primary">Selengkapnya</button></a>

                </div>

                <div class="col-sm-6 text-center" id="home2">
                    <img src="gambar/service/2.jpg" alt="NMBN-PROJECT" class="img-fluid justify-content-center py-5">
                </div>
                
            </div>
        </div>
    </div>

@endsection