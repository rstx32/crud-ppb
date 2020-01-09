<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Barang</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    CRUD Barang
                </div>
                <div class="card-body">
                    <a href="/barang/tambah" class="btn btn-primary">Input Barang Baru</a>
                    <a href="/barang/cetak_pdf" class="btn btn-primary" target="_blank">CETAK PDF</a>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Kode Barang</th>
                                <th>Nama Barang</th>
                                <th>Harga</th>
                                <th>Gambar</th>
                                <th>Deskripsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($barang as $p)
                            <tr>
                                <td>{{ $p->kd_brg }}</td>
                                <td>{{ $p->nm_brg }}</td>
                                <td>{{ $p->harga }}</td>
                                <td>{{ $p->image }}</td>
                                <td>{{ $p->deskripsi }}</td>
                                <td>
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
