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
                        <img src="assets/images/shape2.png" class="img-fluid img-4x" alt="Bootstrap Themes" />
                        <i class="icon-award"></i>
                    </div>
                    <div class="ms-2">
                        <h5 class="m-0 fw-semibold mb-2">Prewedding</h5>
                        <a href="{{ route('index_dp_prewedding') }}" class="btn btn-info btn-sm">Deposit
                            @if ($confir_dp_pre > 0)
                            <i class="icon-bell" style="color:#ff0000;">{{ $confir_dp_pre }} NEW ORDER</i>
                            @endif
                        </a>
                        <a href="{{ route('index_payment_prewedding') }}" class="btn btn-success btn-sm">Fullpayment
                            @if ($confir_pay_pre > 0)
                            <i class="icon-bell" style="color:#ff0000;">{{ $confir_pay_pre }} NEW ORDER</i>
                            @endif
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card p-2 rounded-2 d-flex flex-row flex-wrap" style="background-color: black">
                    <div class="position-relative shape-block">
                        <img src="assets/images/shape2.png" class="img-fluid img-4x" alt="Bootstrap Themes" />
                        <i class="icon-slack"></i>
                    </div>
                    <div class="ms-2">
                        <h5 class="m-0 fw-semibold mb-2">Wedding</h5>
                        <a href="{{ route('index_dp_wedding') }}" class="btn btn-info btn-sm">Deposit
                            @if ($confir_dp_wed > 0)
                            <i class="icon-bell" style="color:#ff0000;">{{ $confir_dp_wed }} NEW ORDER</i>
                            @endif
                        </a>
                        <a href="{{ route('index_payment_wedding') }}" class="btn btn-success btn-sm">Fullpayment
                            @if ($confir_pay_wed > 0)
                            <i class="icon-bell" style="color:#ff0000;">{{ $confir_pay_wed }} NEW ORDER</i>
                            @endif
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card p-2 rounded-2 d-flex flex-row flex-wrap" style="background-color: black">
                    <div class="position-relative shape-block">
                        <img src="assets/images/shape2.png" class="img-fluid img-4x" alt="Bootstrap Themes" />
                        <i class="icon-umbrella"></i>
                    </div>
                    <div class="ms-2">
                        <h5 class="m-0 fw-semibold mb-2">Engagement</h5>
                        <a href="{{ route('dp_engagement') }}" class="btn btn-info btn-sm">
                            Deposit
                            @if ($confir_dp_eng > 0)
                            <i class="icon-bell" style="color:#ff0000;">{{ $confir_dp_eng }} NEW ORDER</i>
                            @endif
                        </a>
                        <a href="{{ route('payment_engagement') }}" class="btn btn-success btn-sm">Fullpayment
                            @if ($confir_pay_eng > 0)
                            <i class="icon-bell" style="color:#ff0000;">{{ $confir_pay_eng }} NEW ORDER</i>
                            @endif
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card p-2 rounded-2 d-flex flex-row flex-wrap" style="background-color: black">
                    <div class="position-relative shape-block">
                        <img src="assets/images/shape2.png" class="img-fluid img-4x" alt="Bootstrap Themes" />
                        <i class="icon-face_retouching_natural"></i>
                    </div>
                    <div class="ms-2">
                        <h5 class="m-0 fw-semibold mb-2">Aqiqah</h5>
                        <a href="{{ route('dp_aqiqah') }}" class="btn btn-info btn-sm">
                            Deposit
                            @if ($confir_dp_aqi > 0)
                            <i class="icon-bell" style="color:#ff0000;">{{ $confir_dp_aqi }} NEW ORDER</i>
                            @endif
                        </a>
                        <a href="{{ route('payment_aqiqah') }}" class="btn btn-success btn-sm">
                            Fullpayment
                            @if ($confir_pay_aqi > 0)
                            <i class="icon-bell" style="color:#ff0000;">{{ $confir_pay_aqi }} NEW ORDER</i>
                            @endif
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="col-4">
                <div class="card p-2 rounded-2 d-flex flex-row flex-wrap" style="background-color: black">
                    <div class="position-relative shape-block">
                        <img src="assets/images/shape2.png" class="img-fluid img-4x" alt="Bootstrap Themes" />
                        <i class="icon-user"></i>
                    </div>
                    
                    <div class="ms-2">
                        <h5 class="m-0 fw-semibold mb-2">Personal Photo</h5>
                        <a href="{{ route('dp_personal') }}" class="btn btn-info btn-sm">Deposit
                            @if ($confir_dp_per > 0)
                            <i class="icon-bell" style="color:#ff0000;">{{ $confir_dp_per }} NEW ORDER</i>
                            @endif
                        </a>
                        <a href="{{ route('payment_personal') }}" class="btn btn-success btn-sm">Fullpayment
                            @if ($confir_pay_per > 0)
                            <i class="icon-bell" style="color:#ff0000;">{{ $confir_pay_per }} NEW ORDER</i>
                            @endif
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card p-2 rounded-2 d-flex flex-row flex-wrap" style="background-color: black">
                    <div class="position-relative shape-block">
                        <img src="assets/images/shape2.png" class="img-fluid img-4x" alt="Bootstrap Themes" />
                        <i class="icon-group"></i>
                    </div>
                    <div class="ms-2">
                        <h5 class="m-0 fw-semibold mb-2">Group Photo</h5>
                        <a href="{{ route('dp_group') }}" class="btn btn-info btn-sm">Deposit
                         @if ($confir_dp_gro > 0)
                            <i class="icon-bell" style="color:#ff0000;">{{ $confir_dp_gro }} NEW ORDER</i>
                            @endif
                        </a>
                        <a href="{{ route('payment_group') }}" class="btn btn-success btn-sm">Fullpayment
                         @if ($confir_pay_gro > 0)
                            <i class="icon-bell" style="color:#ff0000;">{{ $confir_pay_gro }} NEW ORDER</i>
                            @endif
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card p-2 rounded-2 d-flex flex-row flex-wrap" style="background-color: black">
                    <div class="position-relative shape-block">
                        <img src="assets/images/shape2.png" class="img-fluid img-4x" alt="Bootstrap Themes" />
                        <i class="icon-users"></i>
                    </div>
                    <div class="ms-2">
                        <h5 class="m-0 fw-semibold mb-2">Familly Photo</h5>
                        <a href="{{ route('dp_familly') }}" class="btn btn-info btn-sm">Deposit
                         @if ($confir_dp_fam > 0)
                            <i class="icon-bell" style="color:#ff0000;">{{ $confir_dp_fam }} NEW ORDER</i>
                            @endif
                        </a>
                        <a href="{{ route('payment_familly') }}" class="btn btn-success btn-sm">Fullpayment
                         @if ($confir_pay_fam > 0)
                            <i class="icon-bell" style="color:#ff0000;">{{ $confir_pay_fam }} NEW ORDER</i>
                            @endif
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Row end -->
@endsection