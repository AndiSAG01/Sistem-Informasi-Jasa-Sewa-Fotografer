@extends('layouts.admin')
@section('title')
Laporan Costumer {{ $year }}
@endsection
@section('content')
<div class="row mb-3">
    <div class="col-lg-12" >
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}" >Dashboard</a></li>
                <li class="breadcrumb-item"><a href="" > Report</a></li>
                <li class="breadcrumb-item"><a href="" >Costumer</a></li>
            </ol>
        </nav>
    </div>
</div>
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
<!-- Row start -->
<div class="row">
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-body bg-black">
                <div class="mb-2 d-flex align-items-end justify-content-between">
                    <h5 class="card-title">Report Costumers</h5>
                </div>
                <div class="table-responsive">
                    <table id="myTable" class="table table-striped table-bordered align-middle m-0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>
                                    <div class="d-flex align-items-center">
                                        <span class="icon-code me-2 fs-4"></span>
                                        Code
                                    </div>
                                </th>
                                <th>
                                    <div class="d-flex align-items-center">
                                        <span class="icon-user me-2 fs-4"></span>
                                        Assignee
                                    </div>
                                </th>
                                <th>
                                    <div class="d-flex align-items-center">
                                        <span class="icon-email me-2 fs-4"></span>
                                        Email
                                    </div>
                                </th>
                                <th>
                                    <div class="d-flex align-items-center">
                                        <span class="icon-developer_mode me-2 fs-4"></span>
                                        Address
                                    </div>
                                </th>
                                <th>
                                    <div class="d-flex align-items-center">
                                        <span class="icon-group me-2 fs-4"></span>
                                        Gender
                                    </div>
                                </th>
                                <th>
                                    <div class="d-flex align-items-center">
                                        <span class="icon-phone me-2 fs-4"></span>
                                        Phone Number
                                    </div>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user as $no => $us )
                            <tr>
                                <td>{{ ++$no }}</td>
                                <td>{{ $us->kd }}</td>
                                <td>
                                    <img src="{{ Storage::url($us->photo) }}" alt="Foto"  class="img-2x me-2 rounded-3">
                                    <span class="fw-semibold">{{ $us->name }}</span>
                                </td>
                                <td>{{ $us->email }}</td>
                                <td>{{ $us->alamat }}</td>
                                <td>{{ $us->gender }}</td>
                                <td>{{ $us->phone_number }}</td>
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