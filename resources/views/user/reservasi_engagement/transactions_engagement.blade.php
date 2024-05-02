@extends('layouts.user')

@section('content')
    <section id="hero" class="hero d-flex flex-column justify-content-center align-items-center">
        <div class="container">

            {{-- alerts --}}
            <div class="row mb-3">
                <div class="col-lg-12">
                    @if (session('success'))
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
                    <div class="mb-4">
                        <div class="card-body text-white" style="background-color: black">
                            <div class="mb-2 d-flex align-items-end justify-content-between">
                                <h5 class="card-title">Data Transaction Wedding Photo</h5>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered align-middle m-0">
                                    <thead>
                                        <tr>
                                            <th class="text-white" width="50px">#</th>
                                            <th width="200px">
                                                <div class="d-flex align-items-center text-white">
                                                    Name
                                                </div>
                                            </th>
                                            <th width="100px">
                                                <div class="d-flex align-items-center text-white">
                                                    Package
                                                </div>
                                            </th>
                                            <th width="100px">
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
                                            <th width="350px">
                                                <div class="d-flex align-items-center text-white">
                                                    Address
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
                                                    {{ number_format($us->engagement->price, 2, '.', ',') }}</td>
                                                <td class="text-white">{{ $us->date }}</td>
                                                <td class="text-white">{{ $us->address }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="container-fluid py-4">
                                <div class="row">
                                    <!-- Table DP (Left) -->
                                    <div class="col-md-6">
                                        <div class="card" style="background-color: black">
                                            <div class="card-header py-2 text-white">Upload DP</div>
                                            <div class="table-responsive">
                                                <table class="table table-striped table-bordered align-middle m-0">
                                                    <thead>
                                                        <tr>
                                                            <th width="50px">
                                                                <div class="d-flex align-items-center text-white">DP</div>
                                                            </th>
                                                            <th width="50px">
                                                                <div class="d-flex align-items-center text-white">Action
                                                                </div>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($resevasi as $no => $us)
                                                            <tr>
                                                                <td>
                                                                    @if ($us->image_dp)
                                                                        <img src="{{ Storage::url($us->image_dp) }}"
                                                                            class="img-fluid rounded w-25" alt="">
                                                                    @else
                                                                        <span class="btn btn-danger">Belum Bayar</span>
                                                                    @endif
                                                                </td>
                                                                <td>
                                                                    @if ($us->status_dp == 'selesai')
                                                                        <a class="btn btn-success" href="#"
                                                                            role="button">Selesai</a>
                                                                    @elseif($us->status_dp == 'telah di sewa')
                                                                        <a class="btn btn-success" href="#"
                                                                            role="button">Anda Berhasil Melakukan Resevasi</a>
                                                                    @elseif($us->status_dp == 'menunggu konfirmasi')
                                                                        <a class="btn btn-secondary" href="#"
                                                                            role="button">Menunggu Konfirmasi</a>
                                                                    @elseif($us->status_dp == 'sewa anda di tolak')
                                                                        <span class="text-white p-3 btn bg-danger">Di
                                                                            Tolak</span>
                                                                    @elseif(!$us->status_dp)
                                                                        <a href="{{ Route('transaction_dp', $us->id) }}"
                                                                            class="btn btn-sm btn-warning">Upload
                                                                            Pembayaran</a>
                                                                        <form
                                                                            onclick="return confirm('Anda yakin data dihapus?');"
                                                                            class="d-inline" action="{{ route('transaction.destroy', $us->id) }}" method="post">
                                                                            @csrf
                                                                            @method('delete')
                                                                            <button type="submit"
                                                                                class="btn btn-danger btn-sm">Batal</button>
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

                                    <!-- Table PaymentFull (Right) -->
                                    <div class="col-md-6">
                                        <div class="card" style="background-color: black">
                                            <div class="card-header text-white py-2">Upload PaymentFull</div>
                                            <div class="table-responsive">
                                                <table class="table table-striped table-bordered align-middle m-0">
                                                    <thead>
                                                        <tr>
                                                            <th width="50px">
                                                                <div class="d-flex align-items-center text-white">
                                                                    PaymentFull</div>
                                                            </th>
                                                            <th width="50px">
                                                                <div class="d-flex align-items-center text-white">Action
                                                                </div>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($resevasi as $no => $us)
                                                            <tr>
                                                                <td>
                                                                    @if ($us->image_pay)
                                                                        <img src="{{ Storage::url($us->image_pay) }}"
                                                                            class="img-fluid rounded w-25" alt="">
                                                                    @else
                                                                        <span class="btn btn-danger">Belum Bayar</span>
                                                                    @endif
                                                                </td>
                                                                <td>
                                                                    @if ($us->status_dp == 'selesai')
                                                                        <!-- Cek status -->
                                                                        @if ($us->status_pay == 'menunggu konfirmasi')
                                                                            <a class="btn btn-secondary" href="#" role="button">Menunggu Konfirmasi</a>
                                                                        @elseif($us->status_pay == 'telah di sewa')
                                                                            <a class="btn btn-info" href="#" role="button">Foto Sedang Di Proses</a>
                                                                        @elseif($us->status_pay == 'sewa anda di tolak')
                                                                            <span class="text-white p-3 btn btn-danger">Di Tolak</span>
                                                                        @elseif ($us->status_pay == 'selesai')
                                                                            <a class="btn btn-success" href="#" role="button">Foto Telah Selesai</a>
                                                                            @else
                                                                            <a href="{{ Route('transaction_dp', $us->id) }}" class="btn btn-sm btn-warning">Upload Pembayaran</a>
                                                                        @endif
                                                                        @else
                                                                        <span
                                                                        class="text-white p-3 badge bg-warning">Upload Fullpayment Di upload ketika sudah selesai acara</span>
                                                                    <!-- Pesan jika DP belum diunggah -->
        
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
                            <span class="text-danger"><span class="text-white">Note : </span>*Jika Anda Belum Melunasi
                                Pembayaran Setelah Acara Maka Foto Tidak Akan di Proses</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Row end -->
        </div>
    </section>
@endsection
