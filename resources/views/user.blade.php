<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="http://localhost/admin/bootstrap.min.css" rel="stylesheet">
        <title>User</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    CRUD User
                </div>
                <div class="card-body">
                    <a href="/user/tambah" class="btn btn-primary">Input User Baru</a>
                    <a href="/user/cetak_pdf" class="btn btn-primary" target="_blank">CETAK PDF</a>
                    <a href="/user/export_excel" class="btn btn-success my-3" target="_blank">EXPORT EXCEL</a>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Email</th>
                                <th>Username</th>
                                <th>Password</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($user as $p)
                            <tr>
                                <td>{{ $p->email }}</td>
                                <td>{{ $p->username }}</td>
                                <td>{{ $p->password }}</td>
                                <td>
                                    <a href="/user/edit/{{ $p->email }}" class="btn btn-warning">Edit</a>
                                    <a href="/user/hapus/{{ $p->email }}" class="btn btn-danger">Hapus</a>
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
