@extends('layouts.admin')

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
 

<div class="container">
    <div class="text">
        <h2>Report Transaction</h2>
    </div>
    @include('admin.report.dropdown')
</div>


  

</script>
@endsection