@extends('layouts.main')

@section('container')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card mt-5">
                <div class="card-header text-center">
                    <h4>Tambahkan Kriteria</h4>
                </div>

                <a href="/kriteria" class="btn btn-info mb-3" style="border-radius: 0;">Back</a>

                @if (session('status'))
                    <div class="alert alert-success">{{ session('status') }}</div>
                @endif

                <div class="card-body">
                    <form action="/createKriteria" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="kode_kriteria" class="form-label">Kode Kriteria</label>
                            <input type="text" class="form-control" name="kode_kriteria" required>
                            @error('kode_kriteria') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <label for="nama_kriteria" class="form-label">Nama Kriteria</label>
                            <input type="text" class="form-control" name="nama_kriteria" required>
                            @error('nama_kriteria') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <label for="cb" class="form-label">Cost/Benefit</label>
                            <select class="form-select" name="cb" required>
                                <option value="" disabled selected>Pilih Cost/Benefit</option>
                                <option value="1">Benefit</option>
                                <option value="2">Cost</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="bobot" class="form-label">Bobot Kriteria</label>
                            <select class="form-select" name="bobot" required>
                                <option value="" disabled selected>Pilih Bobot Kriteria</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection