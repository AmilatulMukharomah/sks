<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Tambah Data Barang!</title>
  </head>
  <body>
    <h1>Tambah Data Barang</h1>
    <form action="{{route('barangs.store')}}" method="POST">
    @csrf
  <div class="form-group">
    <label for="kode_barang">Kode Barang</label>
    <div>
        <input type="text" class="form-control
        @error('kode_barang') is-invalid @enderror"
        id="kode_barang" name="kode_barang" value="{{old('kode_barang')}}">
    @error('kode_barang')
        <div class="text-danger">{{$message}}</div>
    @enderror
    </div>
  </div>
  <div class="form-group">
    <label for="nama_barang">Nama Barang</label>
    <div>
        <input type="text" class="form-control
        @error('nama_barang') is-invalid @enderror"
        id="nama_barang" name="nama_barang" value="{{old('nama_barang')}}">
    @error('nama_barang')
        <div class="text-danger">{{$message}}</div>
    @enderror
    </div>
  </div>
  <div class="form-group">
    <label for="stok">Stok</label>
    <div>
        <input type="number" class="form-control
        @error('stok') is-invalid @enderror"
        id="stok" name="stok" value="{{old('stok')}}">
    @error('stok')
        <div class="text-danger">{{$message}}</div>
    @enderror
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Tambah</button>
</form>

  </body>
</html>