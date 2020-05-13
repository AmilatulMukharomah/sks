<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Data Barang</title>
  </head>
  <body>
    <div class="py-4 d-flex justify-content-end align-items-center">
      <h2 class="mr-auto">Data Barang</h2>
      <a href="{{route('barangs.create')}}" class="btn btn-primary">
        Tambah Barang 
      </a>
    </div>
    <!-- baris program untuk menampilkan pesan berhasil -->
    @if (session()->has('pesan'))
      <div class="alert alert-success">
        {{session()->get('pesan')}}
      </div>
    @endif
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Kode Barang</th>
      <th scope="col">Nama Barang</th>
      <th scope="col">Stok</th>
    </tr>
  </thead>
  <tbody>
  @forelse($barangs as $barang)
    <tr>
      <th>{{$loop->iteration}}</th>
      <td><a href="{{route('barangs.detail',['barang'=>$barang->id])}}">{{$barang->kode_barang}}</a></td>
      <td>{{$barang->nama_barang}}</td>
      <td>{{$barang->stok}}</td>
    </tr>
    @empty
      <td colspan="4" class="text-center"> Data Barang Tidak Ada...</td>
  @endforelse
  </tbody>
</table>

  </body>
</html>