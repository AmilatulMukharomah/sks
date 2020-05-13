<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="py-4 d-flex justify-content-end align-items-center">
        <h2 class="mr-auto">Detail {{$barang->nama_barang}}</h2>
        <a href="{{route('barangs.edit', ['barang'=>$barang->id])}}" class="btn btn-primary">Edit Barang</a>
        <form action="{{route('barangs.delete', ['barang'=>$barang->id])}}"
            method="POST">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-danger ml-3">Hapus</button>
        </form>
    </div>
    <ul>
        <li>Kode Barang : {{$barang->kode_barang}}</li>
        <li>Nama Barang : {{$barang->nama_barang}}</li>
        <li>Stok Barang : {{$barang->stok}}</li>
        <li>Diinput pada : {{$barang->created_at}}</li>
        <li>Diupdate pada : {{$barang->updated_at}}</li>
    </ul>
  </body>
</html>