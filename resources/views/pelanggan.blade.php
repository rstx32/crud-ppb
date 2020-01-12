<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="http://localhost/admin/bootstrap.min.css" rel="stylesheet">
        <title>Pelanggan</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs">
                        <li class="nav-item">
                            <a class="nav-link" href="/barang">Barang</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Pelanggan</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <a href="/pelanggan/tambah" class="btn btn-primary">Input Pelanggan Baru</a>
                    <a href="/pelanggan/cetak_pdf" class="btn btn-danger" target="_blank">CETAK PDF</a>
                    <a href="/pelanggan/export_excel" class="btn btn-success my-3" target="_blank">EXPORT EXCEL</a>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th class="text-center">Email</th>
                                <th class="text-center">Username</th>
                                <th class="text-center">Password</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pelanggan as $p)
                            <tr>
                                <td>{{ $p->email }}</td>
                                <td>{{ $p->username }}</td>
                                <td>{{ $p->password }}</td>
                                <td class="text-center">
                                    <a href="/pelanggan/edit/{{ $p->email }}" class="btn btn-warning">Edit</a>
                                    <a href="/pelanggan/hapus/{{ $p->email }}" class="btn btn-danger">Hapus</a>
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
