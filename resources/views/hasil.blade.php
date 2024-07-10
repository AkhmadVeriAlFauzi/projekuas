@extends('layouts.main')

@section('container')

<header class="bg-dark text-white text-center py-5 mb-3">
    <div class="container">
        <h1 class="display-4">NORMALISASI & HASIL</h1>
        <p class="lead">Sistem Pendukung Keputusan Penilaian Toko Baju dengan Metode Simple Additive Weighting (SAW)</p>
    </div>
</header>

<a href="/home" class="btn btn-primary mb-3">Back Home</a>

<div class="table-responsive">
    <table class="table table-striped table-bordered"
        style="background-color: whitesmoke; max-width: 100%; table-layout: fixed; word-wrap: break-word">
        <thead>
            <tr>
                <th scope="col" style="width: 5%; text-align: center;">ID</th>
                <th scope="col" style="width: 10%; text-align: center;">Nama Toko</th>
                <th scope="col" style="width: 10%; text-align: center;">Normalisasi C1 (harga)</th>
                <th scope="col" style="width: 10%; text-align: center;">Normalisasi C2 (pelayanan)</th>
                <th scope="col" style="width: 10%; text-align: center;">Normalisasi C3 (kenyamanan)</th>
                <th scope="col" style="width: 10%; text-align: center;">Normalisasi C4 (kualitas baju)</th>
                <th scope="col" style="width: 10%; text-align: center;">Normalisasi C5 (diskon)</th>
            </tr>
        </thead>
        <tbody>
            <?php $num = 1 ?>
            @foreach($alternatives as $item)
                <tr>
                    <td class="text-truncate" style="text-align: center;">{{ $num }}</td>
                    <td class="text-truncate" style="text-align: center;">{{ $item->nama_toko }}</td>
                    <td class="text-truncate" style="text-align: center;">{{ number_format($item->normalisasiC1, 2) }}</td>
                    <td class="text-truncate" style="text-align: center;">{{ number_format($item->normalisasiC2, 2) }}</td>
                    <td class="text-truncate" style="text-align: center;">{{ number_format($item->normalisasiC3, 2) }}</td>
                    <td class="text-truncate" style="text-align: center;">{{ number_format($item->normalisasiC4, 2) }}</td>
                    <td class="text-truncate" style="text-align: center;">{{ number_format($item->normalisasiC5, 2) }}</td>
                </tr>
                <?php    $num = $num + 1 ?>
            @endforeach
        </tbody>
    </table>
    
</div>

<div class="table-responsive">
    <table class="table table-striped table-bordered"
        style="background-color: whitesmoke; max-width: 100%; table-layout: fixed; word-wrap: break-word">
        <thead>
            <tr>
                <th scope="col" style="width: 10%; text-align: center;">ID</th>
                <th scope="col" style="width: 45%; text-align: center;">Nama Toko</th>
                <th scope="col" style="width: 75%; text-align: center;">Nilai SAW</th>
            </tr>
        </thead>
        <tbody>
            <?php $num = 1 ?>
            @foreach($alternatives as $item)
                <tr>
                    <td class="text-truncate" style="text-align: center;">{{ $num }}</td>
                    <td class="text-truncate" style="text-align: center;">{{ $item->nama_toko }}</td>
                    <td class="text-truncate" style="text-align: center;">{{ number_format($item->normalized_saw, 2) }}</td>
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