{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="alamat" class="col-md-4 col-form-label text-md-end">{{ __('Address') }}</label>

                            <div class="col-md-6">
                                <input id="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat') }}" required autocomplete="alamat">

                                @error('alamat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="alamat" class="col-md-4 col-form-label text-md-end">{{ __('Gender') }}</label>
                            <div class="col-md-6">
                                <select id="gender"
                                    class="form-control{{ $errors->has('gender') ? ' is-invalid' : '' }}"
                                    name="gender" required>
                                    <option value="male"{{ old('gender') == 'male' ? ' selected' : '' }}>Male
                                    </option>
                                    <option value="female"{{ old('gender') == 'female' ? ' selected' : '' }}>Female
                                    </option>
                                </select>
                                @if ($errors->has('gender'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="phone_number" class="col-md-4 col-form-label text-md-end">{{ __('Phone Number') }}</label>

                            <div class="col-md-6">
                                <input id="phone_number" type="number" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') }}" required autocomplete="phone_number">

                                @error('phone_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="photo" class="col-md-4 col-form-label text-md-end">{{ __('Photo') }}</label>

                            <div class="col-md-6">
                                <input id="photo" type="file" class="form-control @error('photo') is-invalid @enderror" name="photo" value="{{ old('photo') }}" required autocomplete="photo">

                                @error('photo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

<!doctype html>
<html lang="en">

<head>
    <title>Login 05</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="\asset\css\style.css">

</head>

<body>
    <section class="ftco-section" style="background-image: url(asset/img/logo/logo.jpg); background-size: cover;  background-position: center; background-repeat: no-repeat; width: 100%;  height: 100%; ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h1 class="heading-section text-white" style="font-family: 'Times New Roman', Times, serif">Registrasi</h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-7 col-lg-5">
                    <div class="wrap">
                        <div class="img" style="background-image: url(asset/img/logo/logo.jpg);"></div>
                        <div class="login-wrap p-4 p-md-5">
                            <div class="d-flex">
                                <div class="w-100">
                                    <h3 class="mb-4">Registrasi</h3>
                                </div>
                            </div>
                            <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                                @csrf
                                <!-- Baris Pertama -->
                                <div class="row">
                                    <div class="col-md-6"> <!-- Kolom Kiri -->
                                        <div class="form-group mt-3">
                                            <label for="name">Name</label>
                                            <input id="name" type="text"
                                                class="form-control @error('name') is-invalid @enderror" name="name"
                                                value="{{ old('name') }}" required autocomplete="name" autofocus>
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        
                                        <div class="form-group mt-3">
                                            <label for="email">Email</label>
                                            <input id="email" type="email"
                                                class="form-control @error('email') is-invalid @enderror" name="email"
                                                value="{{ old('email') }}" required autocomplete="email" autofocus>
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                            
                                    <div class="col-md-6"> <!-- Kolom Kanan -->
                                        <div class="form-group mt-3">
                                            <label for="phone_number">Phone Number</label>
                                            <input id="phone_number" type="number"
                                                class="form-control @error('phone_number') is-invalid @enderror" name="phone_number"
                                                value="{{ old('phone_number') }}" required autocomplete="phone_number">
                                            @error('phone_number')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                            
                                        <div class="form-group mt-3">
                                            <label for="photo">Photo</label>
                                            <input id="photo" type="file"
                                                class="form-control @error('photo') is-invalid @enderror" name="photo"
                                                value="{{ old('photo') }}" required autocomplete="photo">
                                            @error('photo')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            
                                <!-- Baris Kedua -->
                                <div class="row">
                                    <div class="col-md-6"> <!-- Kolom Kiri -->
                                        <div class="form-group mt-3">
                                            <label for="gender">Gender</label>
                                            <select id="gender" class="form-control @error('gender') is-invalid @enderror" name="gender" required>
                                                <option value="male"{{ old('gender') == 'male' ? ' selected' : '' }}>Male</option>
                                                <option value="female"{{ old('gender') == 'female' ? ' selected' : '' }}>Female</option>
                                            </select>
                                            @error('gender')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        
                                        <div class="form-group mt-3">
                                            <label for="alamat">Address</label>
                                            <input id="alamat" type="text"
                                                class="form-control @error('alamat') is-invalid @enderror" name="alamat" required>
                                            @error('alamat')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                            
                                    <div class="col-md-6"> <!-- Kolom Kanan -->
                                        <div class="form-group mt-3">
                                            <label for="password">Password</label>
                                            <input id="password" type="password"
                                                class="form-control @error('password') is-invalid @enderror" name="password" required>
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            
                                <!-- Tombol Submit -->
                                <div class="form-group mt-3 text-center">
                                    <button type="submit" class="btn btn-primary rounded submit px-3">Sign Up</button>
                                </div>
                            
                                <p class="text-center">Have a member? <a href="{{ route('login') }}">Sign In</a></p>
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="/asset/js/jquery.min.js"></script>
    <script src="/asset/js/popper.js"></script>
    <script src="/asset/js/bootstrap.min.js"></script>
    <script src="/asset/js/login.js"></script>

</body>

</html>
