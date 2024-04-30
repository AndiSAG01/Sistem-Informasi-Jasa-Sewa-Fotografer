@extends('layouts.admin')

@section('content')
<style>
    .user-info p {
    margin-bottom: 5px;
}

.user-info strong {
    width: 150px; /* Adjust as needed */
    display: inline-block;
    vertical-align: top;
}

.user-info p {
    margin-left: 10px; /* Adjust as needed */
}
</style>
<div class="row mb-3">
    <div class="col-lg-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('costumers') }}">Costumers</a></li>
                <li class="breadcrumb-item"><a href="#">Details</a></li>
                <li class="breadcrumb-item"><a href="#">{{ $user->name }}</a></li>
            </ol>
        </nav>
    </div>
</div>
<!-- Row start -->
<div class="row">
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-body">
                <div class="profile-bg p-5 rounded-3">
                    <!-- Row start -->
                    <div class="bg-primary px-4 p-2 rounded-3">
                        <div class="row align-items-center">
                            <div class="col-lg-4">
                                <img src="{{ Storage::url($user->photo) }}" class="rounded" width="300px" alt="User Photo">
                            </div>
                            <div class="col-lg-8 text-white">
                                <div class="user-info">
                                    <p><strong>Code Costumer</strong> : {{ $user->kd }}</p>
                                    <p><strong>Name</strong> : {{ $user->name }}</p>
                                    <p><strong>Email</strong> : {{ $user->email }}</p>
                                    <p><strong>Address</strong> : {{ $user->alamat }}</p>
                                    <p><strong>Gender</strong> : {{ $user->gender }}</p>
                                    <p><strong>Phone Number</strong> : {{ $user->phone_number }}</p>
                                </div>
                            </div>
                        </div>                        
                    </div>
                    <!-- Row end -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Row end -->

@endsection