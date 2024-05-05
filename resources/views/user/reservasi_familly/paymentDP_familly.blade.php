@extends('layouts.user')

@section('content')
    <section id="hero" class="hero d-flex flex-column justify-content-center align-items-center">
        <div class="container">
            <div class="card-body">
                <div class="card text-center">
                    <div class="card-header text-left">
                      <h2><strong>Informasi Pembayaran</strong></h2>
                    </div>
                    <div class="card-body">
                      <h5 class="card-title"> Silahkan Melakukan Pembayaran Rekening Di Bawah Ini</h5>
                      {{-- @foreach ($bank as $bk )
                      <div class="">
                        <a class="navbar-brand text-black" href="#">
                            <img src="{{ asset('storage/' . $bk->image) }}" width="70" height="40" class="d-inline-block align-top" alt="">
                            {{ $bk->no_rekening }}
                        </a>
                      </div>
                      @endforeach --}}
                      @if ($data->status_dp == 'selesai')
                      <form action="{{ route('transaction.upload_pay_fam', $data->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group text-left">
                            <h3><strong> <label for="image"> Foto Bukti Pembayaran Fullpayment</label></strong></h3>
                            <input type="file" name="image_pay" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                      @else
                      <form action="{{ route('transaction.upload_dp_fam', $data->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group text-left">
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
