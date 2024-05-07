@extends('layouts.user')

@section('content')
    <section id="hero" class="hero d-flex flex-column justify-content-center align-items-center">
        <div class="container">
            <div class="card-body">
                <div class="card text-center">
                    <div class="card-header text-left">
                      <h2  class="text-black" ><strong>Informasi Pembayaran</strong></h2>
                    </div>
                    <div class="card-body">
                      <h5 class="card-title"> Silahkan Melakukan Pembayaran Rekening Di Bawah Ini</h5>
                      @include('user.bank')
                      @if ($data->status_dp == 'selesai')
                      <form action="{{ route('transaction.upload_pay_per', $data->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group text-left">
                            <h3><strong> <label for="image"> Foto Bukti Pembayaran Fullpayment</label></strong></h3>
                            <input type="file" name="image_pay" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                      @else
                      <form action="{{ route('transaction.upload_dp_per', $data->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group text-left mb-4">
                            <h3><strong> <label for="image"> Foto Bukti Pembayaran Deposit</label></strong></h3>
                            <input type="file" name="image_dp" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                      @endif
                    </div>
                  </div>
            </div>
        </div>
    </section><!-- End Hero Section -->
@endsection
