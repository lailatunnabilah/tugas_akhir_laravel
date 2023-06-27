@extends('layouts.master')

@section('content')
    <div class="container">
    <h1>Edit Data</h1>

    <form action="/bakery/{{$bakery->id}}" method="POST">
        @method('put')
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Id Produk</label>
            <input type="text" name="id_produk" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$bakery->id_produk}}"> 
        </div>

        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nama Produk</label>
        <input type="text" name="nama_produk" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$bakery->nama_produk}}">
        </div>

        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Kategori Produk</label>
        <input type="text" name="kategori_produk" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$bakery->kategori_produk}}">
        </div>

        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Harga</label>
        <input type="text" name="stok" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$bakery->harga}}">
        </div>

        <input type="submit" name="submit" class="btn btn-success" value="update"><br>
    </form>
    </div>
@endsection