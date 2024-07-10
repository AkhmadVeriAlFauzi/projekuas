@extends('layouts.main')

@section('container')

<header class="bg-dark text-white text-center py-5 mb-3">
    <div class="container">
        <h1 class="display-4">ALTERNATIVE</h1>
        <p class="lead">Sistem Pendukung Keputusan Penilaian Toko Baju dengan Metode Simple Additive Weighting (SAW)</p>
    </div>
</header>

<a href="/createAlternative" class="btn btn-primary mb-3">Tambah Alternative</a>

<div class="table-responsive">
    <table class="table table-striped table-bordered"
        style="background-color: whitesmoke; max-width: 100%; table-layout: fixed; word-wrap: break-word;">
        <thead>
            <tr>
                <th scope="col" style="width: 5%; text-align: center;">No</th>
                <th scope="col" style="width: 20%; text-align: center;">Nama Toko</th>
                <th scope="col" style="width: 10%; text-align: center;">C1</th>
                <th scope="col" style="width: 10%; text-align: center;">C2</th>
                <th scope="col" style="width: 10%; text-align: center;">C3</th>
                <th scope="col" style="width: 10%; text-align: center;">C4</th>
                <th scope="col" style="width: 10%; text-align: center;">C5</th>
                <th scope="col" style="width: 25%; text-align: center;">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $num = 1 ?>
            @foreach ($alternatives as $item)
                <tr>
                    <th class="text-truncate" style="text-align: center;">{{ $num }}</th>
                    <td class="text-truncate" style="text-align: center;">{{ $item->nama_toko }}</td>
                    <td class="text-truncate" style="text-align: center;">{{ $item->C1 }}</td>
                    <td class="text-truncate" style="text-align: center;">{{ $item->C2 }}</td>
                    <td class="text-truncate" style="text-align: center;">{{ $item->C3 }}</td>
                    <td class="text-truncate" style="text-align: center;">{{ $item->C4 }}</td>
                    <td class="text-truncate" style="text-align: center;">{{ $item->C5 }}</td>
                    <td style="text-align: center;">
                        <a href="{{ url('/' . $item->id . '/editAlternative') }}" class="btn btn-success btn-sm mx-1">Edit</a>
                        <a href="{{ url('/' . $item->id . '/deleteAlternative') }}" class="btn btn-danger btn-sm mx-1"
                            onclick="return confirm('Are You Sure?')">Delete</a>
                    </td>
                </tr>
                <?php    $num = $num + 1 ?>
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