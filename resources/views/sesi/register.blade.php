@php
    $title = 'register'
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="icon" href="{{ asset('asset/bajukuwhite.svg') }}">

  <title>Baju-Ku | {{ $title }} </title>
</head>
<body>
    
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card shadow-sm mt-5">
                <div class="card-header text-center" style="padding: 10px; border-top-left-radius: 15px; border-top-right-radius: 15px;">
                    <img src={{ asset('asset/bajuku.svg') }} alt="Logo" class="img-fluid" style="max-width: 40px;">
                </div>
                <div class="card-body">
                    <h4 class="card-title text-center mb-4">Login</h4>
                    <form action="/sesi/create" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required>
                            @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required>
                            @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required>
                            @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
                            <input type="password" class="form-control" name="password_confirmation" required>
                        </div>
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary btn-block">Daftar</button>
                        </div>
                        <div class="text-center mt-3">
                            <span>Sudah Memiliki Akun? <a href="{{route('index')}}" style="text-decoration-line: none;">Login</a></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .card {
        border-radius: 15px;
    }
    .card-header {
        background-color: #f8f9fa;
        border-bottom: none;
        border-top-left-radius: 15px;
        border-top-right-radius: 15px;
    }
    .card-title {
        font-weight: bold;
    }
    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
    }
    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #004085;
    }
</style>

</body>
</html>