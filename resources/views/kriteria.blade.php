@extends('layouts.main')

@section('container')

<h1>Kriteria</h1>

<a href="/createKriteria" class="btn btn-primary mb-3">Tambah Kriteria</a>

<table class="table" style="background-color: whitesmoke;">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Kode Kriteria</th>
            <th scope="col">Nama Kriteria</th>
            <th scope="col">Cost/Benefit</th>
            <th scope="col">Bobot</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($criterias as $item)
            <tr>
                <th>{{ $item -> id}}</th>
                <td>{{ $item->kode_kriteria }}</td>
                <td>{{ $item->nama_kriteria }}</td>
                <td>{{ $item->cb }}</td>
                <td>{{ $item->bobot }}</td>
                <td>
                    <a href="{{ url('/'.$item->id.'/editKriteria') }}"class="btn btn-success mx-2" >Edit</a>
                    <a href="{{ url('/'.$item->id.'/deleteKriteria') }}"class="btn btn-danger mx-2" onclick="return confirm('Are You Sure ?')" >Delete</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
