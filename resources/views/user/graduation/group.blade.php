@extends('layouts.user')

@section('content')
    <section id="hero" class="hero d-flex flex-column justify-content-center align-items-center">
        <div class="container mb-4">
            <div class="row">
                <div class="card-body">
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-lg-3 text-center">
                                <img src="asset/img/logo/logo.jpg" alt="" width="300px">
                                <div class="card-body text-white rounded fullscreen-bg "
                                    style="background-image: url('asset/img/logo/bg1.jpg')">
                                    <span style="font-family: 'Times New Roman', Times, serif; ">DOCUMENTATIONS</span>
                                    <p style="font-family: 'Times New Roman'; font-size:200%">GROUP PHOTO
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-8 text-center">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <img class="mb-4" src="asset/img/group/gp4.jpg" alt=""
                                            width="400px">
                                        <img class="mb-4" src="asset/img/group/gp3.jpg" alt=""
                                            width="400px">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body text-center">
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-lg-12">
                                <img src="asset/img/group/gp2.jpg" alt="" width="500px">
                                <img src="asset/img/group/gp1.jpg" alt="" width="500px">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-header mb-4" style="border: 1px solid white; padding:10px">
            <span style="font-family: 'Times New Roman'; font-size:200%">PACKAGE LISTS <b>GROUP PHOTO
                </b></span>
        </div>
        <div class="container py-4">
            <div id="preweddingCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    @foreach ($group as $key => $pw)
                        <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                            <div class="row justify-content-center">
                                <div class="col-xl-5 col-sm-4 col-8">
                                    <div class="card mb-3 fullscreen-bg"
                                        style="background-image: url(asset/img/logo/bg1.jpg)">
                                        <div class="card-header text-center" style="color: white;">
                                            <h5 class="card-title" style="font-family: 'Times New Roman', Times, serif">
                                                <i>{{ $pw->basic->name }} (<span>Rp.
                                                        {{ number_format($pw->price, 2, '.', ',') }}</span>)</i>
                                            </h5>
                                        </div>
                                        <div class="card-body" style="color: white;">
                                            <div class="card-text" style="font-family: 'Times New Roman', Times, serif">
                                                INCLUDE
                                            </div>
                                            <p>
                                                <i>{!! $pw->description !!}</i>
                                            </p>
                                            <a href="#" class="btn btn-success">Reservation</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#preweddingCarousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#preweddingCarousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section><!-- End Hero Section -->
    <div class="card text-white" style="width: 200px; height: 150px; margin-left: 5%; background-image: url(asset/img/logo/bg1.jpg); border: 1px solid white;">
        <div class="card-body" style="font-size: 40%">
            <b>
                <span>NOTE : </span>
                <p>- Penambahan 1 Orang / Rp. 150.000</p>
                <p>- Add time 100.000 / 30 minutes</p>
                <p>- Cetak ukuran 22R + Frame Rp. 350.000</p>
                <p>- Cetak ukuran 11R + Frame Rp. 100.000</p>
                <p>- Cetak ukuran 4R + Frame Rp. 50.000</p>
            </b>
        </div>
    </div>    
@endsection

