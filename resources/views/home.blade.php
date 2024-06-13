@extends('layouts.main')

@section('container')
<h1 class="pb-3">home</h1>

<form action="">

    <div class="container mb-5 bg-info p-3">

        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Toko</label>
            <input type="text" class="form-control" name="toko" placeholder="Example input placeholder">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Harga</label>
            <input type="text" class="form-control" name="harga" placeholder="Example input placeholder">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Pelayanan</label>
            <input type="text" class="form-control" name="pelayanan" placeholder="Example input placeholder">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Kenyamanan</label>
            <input type="text" class="form-control" name="kenyamanan" placeholder="Example input placeholder">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Kualitas Baju</label>
            <input type="text" class="form-control" name="kualitas baju" placeholder="Example input placeholder">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Diskon</label>
            <input type="text" class="form-control" name="diskon" placeholder="Example input placeholder">
        </div>

    </div>

    <table class="table bg-info">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Toko</th>
                <th scope="col">Harga</th>
                <th scope="col">Pelayanan</th>
                <th scope="col">Kenyamanan</th>
                <th scope="col">Kualitas Baju</th>
                <th scope="col">Diskon</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
        </tbody>
    </table>

    <input type="submit" class="btn btn-primary mb-5" name="submit">
    
</form>


@endsection