<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Bakery</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="#">Bakery</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                </ul>
                <form action="{{ route('logout') }}" method="POST" class="d-flex" role="search">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Logout</button>
                </form>
            </div>
        </div>
</nav>
        <div class="container"><br>
        <a class="btn btn-primary" href="/bakery/create">Add Product</a>
        <table class="table table-striped">
        <div>
    <tr>
        <th>Id Produk</th>
        <th>Nama Produk</th>
        <th>Kategori Produk</th>
        <th>Harga</th>
        <th>Aksi</th>
    </tr>
    @foreach($bakery as $w)
        <tr>
            <td>{{$w->id_produk}}</td>
            <td>{{$w->nama_produk}}</td>
            <td>{{$w->kategori_produk}}</td>
            <td>{{$w->harga}}</td>
            <td>
                <div class="btn-group" role="group" aria-label="Basic example">
                    <a class="btn btn-warning" href="/bakery/{{$w->id}}/edit">Edit</a>
                    <form action="/bakery/{{$w->id}}" method="POST">
                    @csrf 
                    @method('delete')
                    <input class="btn btn-danger" type="submit" name="submit" confirm="Yakin di Hapus?" value="Delete">
                    </form>
                </div>
            </td>

        </tr>
    </div>
    @endforeach   
    </table>
    </div>   
</body>
</html>