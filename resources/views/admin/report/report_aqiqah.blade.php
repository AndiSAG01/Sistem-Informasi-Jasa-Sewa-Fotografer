@extends('layouts.admin')
@section('title')
LAPORAN AQIQAH {{ $year }}
@endsection
@section('content')
{{-- breadcrumb --}}
<div class="row mb-3">
    <div class="col-lg-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="#">Report</a></li>
                <li class="breadcrumb-item"><a href="#">Transaction</a></li>
            </ol>
        </nav>
    </div>
</div>
{{-- end breadcrumb --}}


<!-- Row start -->
<div class="container">
    <div class="text">
        <h2>Report Transaction</h2>
    </div>
    @include('admin.report.dropdown')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-body bg-black">
                    <div class="mb-2 d-flex align-items-end justify-content-between">
                        <h5 class="card-title">Data Report Transaction Package Aqiqah</h5>
                    </div>
                    <div class="table-responsive">
                        <table id="myTable" class="table table-striped table-bordered align-middle m-0">
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
                                            Status
                                        </div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $filteredResevasi = $resevasi->filter(function ($us) {
                                        return $us->status_pay == 'selesai';
                                    });
                                @endphp
                        
                                @foreach ($filteredResevasi as $no => $us)
                                    <tr>
                                        <td class="text-white">{{ ++$no }}</td>
                                        <td class="text-white">{{ $us->name }}</td>
                                        <td class="text-white">{{ $us->selected }}</td>
                                        <td class="text-white">{{ $us->basic->name }}</td>
                                        <td class="text-white">Rp.
                                            {{ number_format($us->aqiqah->price, 2, '.', ',') }}</td>
                                        <td class="text-white">{{ $us->date }}</td>
                                        <td class="text-white">{{ $us->address }}</td>
                                        <td>
                                            <a class="btn btn-success" href="#" role="button">Selesai</a>
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
</div>
<!-- Row end -->
@endsection