@extends('layouts.admin')

@section('content')
<div class="row mb-3">
    <div class="col-lg-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item "><a href="{{ route('dashboard') }}" class="text-black">Dashbord</a></li>
            </ol>
        </nav>
    </div>
</div>
<!-- Row start -->
<div class="row align-items-center mb-3 text-black">
    <div class="col-12 col-xl-6">
        <h2 class="mb-2">Dashboard</h2>
        <h6 class="mb-2 fw-light text-dark small text-black">
            Collection of Various Data
        </h6>
    </div>
    <div class="container">
        <div class="row g-3">
            <div class="col-4">
                <div class="card p-2 rounded-2 d-flex flex-row flex-wrap" style="background-color: black">
                    <div class="position-relative shape-block">
                        <img src="assets/images/shape1.png" class="img-fluid img-4x" alt="Bootstrap Themes" />
                        <i class="icon-book-open"></i>
                    </div>
                    <div class="ms-2">
                        <h3 class="m-0 fw-semibold">250</h3>
                        <h6 class="m-0 fw-light">Items</h6>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card p-2 rounded-2 d-flex flex-row flex-wrap" style="background-color: black">
                    <div class="position-relative shape-block">
                        <img src="assets/images/shape2.png" class="img-fluid img-4x" alt="Bootstrap Themes" />
                        <i class="icon-shopping-cart"></i>
                    </div>
                    <div class="ms-2">
                        <h3 class="m-0 fw-semibold">490</h3>
                        <h6 class="m-0 fw-light">Orders</h6>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card p-2 rounded-2 d-flex flex-row flex-wrap" style="background-color: black">
                    <div class="position-relative shape-block">
                        <img src="assets/images/shape3.png" class="img-fluid img-4x" alt="Bootstrap Themes" />
                        <i class="icon-shopping-bag"></i>
                    </div>
                    <div class="ms-2">
                        <h3 class="m-0 fw-semibold">630</h3>
                        <h6 class="m-0 fw-light">Sales</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Row end -->
@endsection