@extends('layouts.admin')

@section('content')
{{-- breadcrumb --}}
<div class="row mb-3">
    <div class="col-lg-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('personals') }}">Package Personal</a></li>
                <li class="breadcrumb-item"><a href="">Edit</a></li>
                <li class="breadcrumb-item"><a href="">{{ $personal->basic->name }}</a></li>
            </ol>
        </nav>
    </div>
</div>
{{-- end breadcrumb --}}
<div class="card shadow m-3">
    <div class="card-body">
        <div class="card">
            <div class="card-body text-center">
                <h5 class="card-title mb-4">Update Package Personal</h5>
                <div class="alert bg-primary text-white mb-4" role="alert">
                    <span class="modal-title" id="exampleModalLabel">
                      <h5 class="fw-bold"><i class="fas fa-exclamation-triangle"> PERINGATAN!!!</i>
                      </h5>
                        <small>Pastikan Anda telah menentukan Personal. Manage package Personal mempengaruhi jenis dari
                            informasi jasa anda.</small>
                    </span>
                </div>
            </div>
        </div>
        <div class="card-body mb-3">
            <div class="row">
                <div class="card-body">
                    <form action="{{ route('personals.update', ['id' => $personal->id]) }}" method="POST">
                        @csrf
                        @method('put')
                        <div class="form-group mb-4">
                            <label for="exampleFormControlSelect2">Name Basic</label>
                            <select class="form-control" name="basics_id" id="exampleFormControlSelect2">
                                <option value="">==Selected Name Basic==</option>
                                @foreach ($basic as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                            @error('basics_id')
                                <small class="text-danger form-text">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group mb-4">
                            <label for="">Description</label>
                            <textarea name="description" id="editor" cols="30" rows="10">{!! $personal->description !!}</textarea>
                        </div>
                        <div class="form-group mb-4">
                            <label for="">Price</label>
                            <input type="number" name="price" class="form-control" value="{{ $personal->price }}">
                        </div>
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