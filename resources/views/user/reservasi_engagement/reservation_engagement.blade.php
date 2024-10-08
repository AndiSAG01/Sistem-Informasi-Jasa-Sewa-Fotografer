@extends('layouts.user')

@section('content')
    <section id="hero" class="hero d-flex flex-column justify-content-center align-items-center">
        <div class="container">
            <div class="card-header mb-4 text-center" style="border: 1px solid white; padding:10px">
                <span style="font-family: 'Times New Roman'; font-size:200%">FORM PACKAGE<b> ENGAGEMENT</b></span>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-5 col-sm-4 col-8">
                    <div class="card mb-3 fullscreen-bg" style="background-image: url(/asset/img/logo/bg1.jpg)">
                        <div class="card-header text-center" style="color: white;">
                            <h5 class="card-title" style="font-family: 'Times New Roman', Times, serif">
                                <i>{{ $engagement->basic->name }} (<span>Rp.
                                        {{ number_format($engagement->price, 2, '.', ',') }}</span>)</i>
                            </h5>
                        </div>
                        <div class="card-body" style="color: white;">
                            <div class="card-text" style="font-family: 'Times New Roman', Times, serif">
                                INCLUDE
                            </div>
                            <p>
                                <i>{!! $engagement->description !!}</i>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Row start -->
            <div class="row gx-3 justify-content-center">
                <div class="col-md-6">
                    <div class="card mb-3">
                        <div class="card-header">
                            <h5 class="card-title">Form Reservation</h5>
                        </div>
                        <div class="card-body">
                            <!-- Row start -->
                            <form class="row g-3" action="{{ route('store_engagement') }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="engagement_id" value="{{ $engagement->id }}">
                                <input type="hidden" name="user_id" value="{{ Auth()->user()->id }}">
                                <input type="hidden" name="basic_id" value="{{ $engagement->id }}">
                                <div class="col-md-6">
                                    <label for="inputEmail4" class="form-label">Name <span
                                            class="text-danger">*</span></label>
                                    <input type="text" name="name" class="form-control" id="inputEmail4" />
                                </div>
                                <div class="col-md-6">
                                    <label for="inputPassword4" class="form-label">Tanggal <span
                                            class="text-danger">*</span></label>
                                    <input type="date" name="date" class="form-control" id="inputPassword4" />
                                    @error('date')
                                        <p class="text-danger" style="font-size: 90%">Tanggal Tidak Boleh Kurang Dari Hari Ini</p>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label for="" class="form-label">Address <span
                                            class="text-danger">*</span></label>
                                    <input type="text" name="address" class="form-control">
                                </div>
                                <div class="col-md-12">
                                    <label for="selected" class="form-label">Selected Guide <span
                                            class="text-danger">*</span> </label>
                                    <span class="text-danger">Silahkan Pilih Sesuai Paket Yang Anda Ambil</span>
                                    <select name="selected" class="form-control">
                                        <option value="">==Selected Guide==</option>
                                        <option value="Prewedding">Prewedding</option>
                                        <option value="Wedding">Wedding</option>
                                        <option value="Engagement">Engagement</option>
                                        <option value="Aqiqah">Aqiqah</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-success">Reservasi</button>
                            </form>
                            <!-- Row end -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Row end -->
        </div>
    </section><!-- End Hero Section -->
@endsection
