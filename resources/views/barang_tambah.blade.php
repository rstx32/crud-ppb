<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Tambah Barang</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    Tambah Barang
                </div>
                <div class="card-body">
                    <a href="/barang" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
                    <form method="post" action="/barang/store">

                        {{ csrf_field() }}

                        <div class="form-group">
                            <label>Kode Barang</label>
                            <input type="text" name="kd_brg" class="form-control" placeholder="Kode barang...">

                            @if($errors->has('kd_brg'))
                                <div class="text-danger">
                                    {{ $errors->first('kd_brg')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Nama Barang</label>
                            <input type="text" name="nm_brg" class="form-control" placeholder="Nama barang...">

                            @if($errors->has('nm_brg'))
                                <div class="text-danger">
                                    {{ $errors->first('nm_brg')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Harga</label>
                            <input type="text" name="harga" class="form-control" placeholder="Harga...">

                            @if($errors->has('harga'))
                                <div class="text-danger">
                                    {{ $errors->first('harga')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Image</label>
                            <input type="text" name="image" class="form-control" placeholder="Image...">

                            @if($errors->has('image'))
                                <div class="text-danger">
                                    {{ $errors->first('image')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Deskripsi</label>
                            <input type="text" name="deskripsi" class="form-control" placeholder="Deskripsi...">

                            @if($errors->has('deskripsi'))
                                <div class="text-danger">
                                    {{ $errors->first('deskripsi')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </body>
</html>
