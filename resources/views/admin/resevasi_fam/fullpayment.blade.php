@extends('layouts.admin')

@section('content')
{{-- breadcrumb --}}
<div class="row mb-3">
    <div class="col-lg-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="#">Familly</a></li>
                <li class="breadcrumb-item"><a href="#">Fullpayment</a></li>
            </ol>
        </nav>
    </div>
</div>
{{-- end breadcrumb --}}

{{-- alerts --}}
<div class="row mb-3">
    <div class="col-lg-12">
        @if(session('success'))
        <div class="alert border-success alert-dismissible fade show text-success" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @elseif (session('danger'))
        <div class="alert border-danger alert-dismissible fade show text-danger" role="alert">
            {{ session('danger') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
    </div>
</div>
{{-- end alerts --}}

<!-- Row start -->
<div class="row">
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-body bg-black">
                <div class="mb-2 d-flex align-items-end justify-content-between">
                    <h5 class="card-title">Data Transaction Package Familly</h5>
                </div>
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered align-middle m-0">
                        <thead>
                            <tr>
                                <th class="text-white" width="50px">#</th>
                                <th width="200px">
                                    <div class="d-flex align-items-center text-white">
                                        Name
                                    </div>
                                </th>
                                <th>
                                    <div class="d-flex align-items-center text-white">
                                        Package
                                    </div>
                                </th>
                                <th>
                                    <div class="d-flex align-items-center text-white">
                                        Basic
                                    </div>
                                </th>
                                <th width="150px">
                                    <div class="d-flex align-items-center text-white">
                                        Price
                                    </div>
                                </th>
                                <th width="150px">
                                    <div class="d-flex align-items-center text-white">
                                        Date
                                    </div>
                                </th>
                                <th width="200px">
                                    <div class="d-flex align-items-center text-white">
                                        Address
                                    </div>
                                </th>
                                <th width="200px">
                                    <div class="d-flex align-items-center text-white">
                                        Fullpayment
                                    </div>
                                </th>
                                <th width="200px">
                                    <div class="d-flex align-items-center text-white">
                                        Status
                                    </div>
                                </th>
                                <th width="200px">
                                    <div class="d-flex align-items-center text-white">
                                        Action
                                    </div>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($resevasi as $no => $us)
                                <tr>
                                    <td class="text-white">{{ ++$no }}</td>
                                    <td class="text-white">{{ $us->name }}</td>
                                    <td class="text-white">{{ $us->selected }}</td>
                                    <td class="text-white">{{ $us->basic->name }}</td>
                                    <td class="text-white">Rp.
                                        {{ number_format($us->familly->price, 2, '.', ',') }}</td>
                                    <td class="text-white">{{ $us->date }}</td>
                                    <td class="text-white">{{ $us->address }}</td>
                                        <td>
                                            @if ($us->image_pay)
                                            <a href="{{ Storage::url($us->image_pay) }}" data-lightbox="dp-images" data-title="Gambar DP">
                                                <img src="{{ Storage::url($us->image_pay) }}" class="img-fluid rounded w-25" alt="Gambar DP">
                                            </a>
                                            @else
                                                <span class="btn btn-danger">Belum Bayar</span>
                                            @endif
                                        </td>
                                    <td>
                                        @if ($us->status_pay == 'selesai')
                                        <a class="btn btn-success" href="#" role="button">Selesai</a>
                                        @elseif($us->status_pay == 'telah di sewa')
                                        <a class="btn btn-info" href="#" role="button">Foto Sedang Di Proses</a>
                                        @elseif($us->status_pay == 'menunggu konfirmasi')
                                        <a class="btn btn-secondary" href="#" role="button">Menunggu Konfirmasi</a>
                                        @elseif(!$us->status_pay)
                                        <a class="btn btn-primary" href="#" role="button">Belum bayar</a>
                                        @elseif ($us->status_pay == 'sewa anda di tolak' )
                                        <a class="btn btn-danger" href="#" role="button">Di Tolak</a>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($us->status_pay == 'selesai')
                                        <a class="btn btn-success mb-1" href="#" role="button">Selesai</a>
                                        
                                        <form action="{{ route('admin.transaksi.delete_familly', $us->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                        </form>
                                        
                                        @elseif($us->status_pay == 'telah di sewa')
                                        <a href="{{ Route('admin.transaksi.pay_selesai_familly', $us->id) }}" class="btn btn-success">Selesai</a>
                                        @elseif($us->status_pay == 'menunggu konfirmasi')
                                        <form action="{{ Route('transaksi.confirmation_pay_familly', $us->id) }}" method="post">
                                            @csrf
                                            @method('put')
                                            <button type="submit" class="btn btn-primary">Konfirmasi</button>
                                        </form>
            
                                        @elseif ($us->status_pay == null )
                                        <form action="{{ Route('admin.transaksi.pay_reject_familly', $us->id) }}" method="post">
                                            @csrf
                                            @method('put')
                                            <button type="submit" class="btn btn-danger">Tolak</button>
                                        </form>
                                        @elseif($us->status_pay == 'sewa anda di tolak')
                                      
                                        <form action="{{ route('admin.transaksi.delete_familly', $us->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                        </form>
                                       
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Row end -->

@endsection