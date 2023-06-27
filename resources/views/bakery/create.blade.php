@extends('layouts.master')

@section('content')
<div class="container">
    <h1>Tambahkan Produk</h1>

    <form action="/bakery/store" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Id Produk</label>
            <input type="text" name="id_produk" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nama Produk</label>
        <input type="text" name="nama_produk" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Kategori Produk</label>
        <input type="text" name="kategori_produk" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Harga</label>
        <input type="text" name="harga" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <input type="submit" name="submit" class="btn btn-success" value="save">
    </form>
</div>
@endsection