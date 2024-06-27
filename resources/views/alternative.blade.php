@extends('layouts.main')

@section('container')

<h1>Alternative</h1>

<a href="/createAlternative" class="btn btn-primary mb-3">Tambah Alternative</a>


<table class="table" style="background-color: whitesmoke;">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Toko</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($alternatives as $ites)
        <tr>
            <td>{{$ites->id}}</td>
            <td>{{$ites->nama_toko}}</td>
            <td>
                <a href="{{ url('/'.$ites->id.'/editAlternative') }}"class="btn btn-success mx-2">Edit</a>
                <a href="{{ url('/'.$ites->id.'/deleteAlternative') }}"class="btn btn-danger mx-2" onclick="return confirm('Are You Sure ?')">Delete</a>
            </td>
        </tr>
        
        @endforeach
        
    </tbody>
</table>

@endsection
