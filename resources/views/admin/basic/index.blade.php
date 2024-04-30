@extends('layouts.admin')

@section('content')
{{-- breadcrumb --}}
<div class="row mb-3">
    <div class="col-lg-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="#">Package Basic</a></li>
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
            <div class="card-body">
                <div class="mb-2 d-flex align-items-end justify-content-between">
                    <h5 class="card-title">Data Package Basic</h5>
                </div>
               @include('admin.basic.create')
                <div class="table-responsive">
                    <table class="table table-striped table-bordered align-middle m-0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>
                                    <div class="d-flex align-items-center">
                                        <span class="icon-notes me-2 fs-4"></span>
                                        Name Package Basic
                                    </div>
                                </th>
                                <th>
                                    <div class="d-flex align-items-center">
                                        <span class="icon-settings me-2 fs-4"></span>
                                        Action
                                    </div>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($basic as $no => $us )
                            <tr>
                                <td>{{ ++$no }}</td>
                                <td>{{ $us->name }}</td>
                                <td>
                                    <a href="{{ route('basics.edit',$us->id) }}" class="btn btn-primary"><span class="icon-edit"></span></a>
                                    <form onclick="return confirm ('anda yakin data dihapus?');" class="d-inline" action="{{Route ('basics.destroy', $us->id )}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger btn-sm"><span class="icon-trash"></span></button>
                                       </form>
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