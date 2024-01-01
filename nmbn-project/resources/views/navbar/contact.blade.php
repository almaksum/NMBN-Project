@extends('layouts.master')

@section('utama')
    <div style="background: #808080; background-repeat: no-repeat; background-size: cover; margin-top: 50px">
        <div class="container mt-5">
            <div class="row">
                
                <div class="col-sm-6 text-center" id="home2">
                    <img src="gambar/contact/cs1.png" alt="NMBN-PROJECT" class="img-fluid justify-content-center py-5">
                </div>

                <div class="col-sm-6 text-center" style="padding-top: 80px">
                    <b class="fs-2">Hubungi Kami</b>
                    <p class="fs-6">
                        Di dirikan oleh bapak Marto Susanto dan resmikan pada 16 september 2020. PT.
                        Brilliant Jaya Pondasi berkomitmen untuk berperan aktif menyumbangkan tenaga dan
                        pikiran berupa pelayanan jasa pelaksanaan konstruksi sebagai rekanan bagi pihak
                        pemerintah maupun swasta.
                    </p>
                </div>
                
            </div>
        </div>
    </div>

    <div>
        <div class="container px-5">
            <div class="row py-5 mt-3 g-5">
                <div class="col-md-6">
                    <a href="https://api.whatsapp.com/send?phone=6285399492529" target="blank" style="text-decoration: none"><img src="gambar/contact/phone.png" class="img-fluid my-5" alt="Nomor Tlp&WA"></a>
                </div>
                
                <div class="col-md-6">
                    <a href="mailto:almaksum3@gmail.com" target="blank" style="text-decoration: none"><img src="gambar/contact/email.png" class="img-fluid my-5" alt="Alamat E-mail NMBN-Project"></a>
                </div>
            </div>
        </div>
    </div>

@endsection