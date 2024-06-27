@extends('layouts.main')

@section('container')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card mt-5">
                <div class="card-header text-center">
                    <h4>Edit Alternative</h4>
                </div>

                <a href="/alternative" class="btn btn-info mb-3" style="border-radius: 0;">Back</a>

                @if (session('status'))
                    <div class="alert alert-success">{{ session('status') }}</div>
                @endif

                <div class="card-body">
                    <form action="{{'/'.$alternative->id.'/editAlternative'}}" method="post">
                        @csrf
                        @method('put')
                        <div class="mb-3">
                            <label for="nama_toko" class="form-label">Nama Toko</label>
                            <input type="text" class="form-control" name="nama_toko" value="{{ $alternative->nama_toko }}" required>
                            @error('nama_toko') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection