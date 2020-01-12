<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="http://localhost/admin/bootstrap.min.css" rel="stylesheet">
        <title>Barang</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <!-- <div class="card-header text-center">
                    Admin
                </div> -->
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Barang</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/pelanggan">Pelanggan</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <a href="/barang/tambah" class="btn btn-primary">Input Barang Baru</a>
                    <a href="/barang/cetak_pdf" class="btn btn-danger" target="_blank">CETAK PDF</a>
                    <a href="/barang/export_excel" class="btn btn-success my-3" target="_blank">EXPORT EXCEL</a>
                    <br>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th class="text-center">Kode Barang</th>
                                <th class="text-center">Nama Barang</th>
                                <th class="text-center">Harga</th>
                                <th class="text-center">Gambar</th>
                                <th class="text-center">Deskripsi</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($barang as $p)
                            <tr>
                                <td class="text-center">{{ $p->kd_brg }}</td>
                                <td class="text-center">{{ $p->nm_brg }}</td>
                                <td class="text-center">Rp. {{ $p->harga }}</td>
                                <td class="text-center"><img src="{{ $p->image }}" width="250" height="200"></td>
                                <td class="text-center">{{ $p->deskripsi }}</td>
                                <td class="text-center">
                                    <a href="/barang/edit/{{ $p->kd_brg }}" class="btn btn-warning">Edit</a>
                                    <a href="/barang/hapus/{{ $p->kd_brg }}" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>
