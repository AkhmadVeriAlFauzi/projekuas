@extends('layouts.main')

@section('container')

<header class="bg-dark text-white text-center py-5 mb-3">
    <div class="container">
        <h1 class="display-4">KRITERIA</h1>
        <p class="lead">Sistem Pendukung Keputusan Penilaian Toko Baju dengan Metode Simple Additive Weighting (SAW)</p>
    </div>
</header>

<a href="/createKriteria" class="btn btn-primary mb-3">Tambah Kriteria</a>

<div class="table-responsive">
    <table class="table table-striped table-bordered "
        style="background-color: whitesmoke; max-width: 100%; table-layout: fixed; word-wrap: break-word;">
        <thead>
            <tr>
                <th scope="col" style="width: 5%; text-align: center;">No</th>
                <th scope="col" style="width: 15%; text-align: center;">Kode Kriteria</th>
                <th scope="col" style="width: 25%; text-align: center;">Nama Kriteria</th>
                <th scope="col" style="width: 20%; text-align: center;">Cost/Benefit</th>
                <th scope="col" style="width: 10%; text-align: center;">Bobot</th>
                <th scope="col" style="width: 25%; text-align: center;">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $num = 1?>
            @foreach ($criterias as $item)
                <tr>
                    <th class="text-truncate" style="text-align: center;">{{ $num }}</th>
                    <td class="text-truncate" style="text-align: center;">{{ $item->kode_kriteria }}</td>
                    <td class="text-truncate" style="text-align: center;">{{ $item->nama_kriteria }}</td>
                    <td class="text-truncate" style="text-align: center;">{{ $item->cb }}</td>
                    <td class="text-truncate" style="text-align: center;">{{ $item->bobot }}</td>
                    <td style="text-align: center;">
                        <a href="{{ url('/' . $item->id . '/editKriteria') }}" class="btn btn-success btn-sm mx-1">Edit</a>
                        <a href="{{ url('/' . $item->id . '/deleteKriteria') }}" class="btn btn-danger btn-sm mx-1"
                            onclick="return confirm('Are You Sure?')">Delete</a>
                    </td>
                </tr>
                <?php    $num = $num + 1?>
            @endforeach
        </tbody>
    </table>
</div>

@endsection

<style>
    table {
        border-collapse: collapse;
    }

    th,
    td {
        text-align: center;
        vertical-align: middle;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        color: black;
        padding: 8px;
    }

    th {
        background-color: #f8f9fa;
        /* Light gray background for the header */
        color: black;
    }

    .btn {
        transition: all 0.3s ease;
    }

    .btn:hover {
        transform: scale(1.05);
    }

    .table-responsive {
        overflow-x: auto;
    }
</style>