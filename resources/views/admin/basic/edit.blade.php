@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800 font-weight-bold">Categorie Package Basic <small>/ {{ $basic->name }}</small></h1>
</div>
<div class="card shadow m-3">
    <div class="card-body">
        <div class="card">
            <div class="card-body text-center">
                <h5 class="card-title">Update Categorie Package Basic</h5>
            </div>
        </div>
        <div class="card-body mb-3">
            <div class="row">
                <div class="col-lg-6">
                    <label for="exampleInputUsername1">Name Package Basic Old</label>
                    <input type="text" class="form-control" name="name" value="{{ $basic->name }}"
                        disabled>
                </div>
                <div class="col-lg-6">
                    <form action="{{ route('basics.update', ['id' => $basic->id]) }}" method="POST">
                        @csrf
                        @method('put')
                        <label for="exampleInputUsername1">Name Package Basic New</label>
                        <input type="text" class="form-control" name="name" value="{{ old('name') }}"
                            required>
                        <div class="text-right my-2">
                            <button type="submit" class="btn btn-success text-right"><i class="icon-check"></i>
                                Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection