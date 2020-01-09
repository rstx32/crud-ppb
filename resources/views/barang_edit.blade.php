<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="http://localhost/admin/bootstrap.min.css" rel="stylesheet">
        <title>Edit Barang</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    Edit Barang
                </div>
                <div class="card-body">
                    <a href="/barang" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    @foreach($barang as $p)
                    <form method="post" action="/barang/update/{{ $p->kd_brg }}">

                        {{ csrf_field() }}
                        {{ method_field('PUT') }} 

                        <div class="form-group">
                            <label>Kode Barang</label>
                            <input disabled type="text" name="kd_brg" class="form-control" placeholder="Kode barang..." value="{{$p->kd_brg}}">

                            @if($errors->has('kd_brg'))
                                <div class="text-danger">
                                    {{ $errors->first('kd_brg')}}
                                </div>
                            @endif

                        </div>                       

                        <div class="form-group">
                            <label>Nama Barang</label>
                            <input type="text" name="nm_brg" class="form-control" placeholder="Nama barang..." value="{{$p->nm_brg}}">

                            @if($errors->has('nm_brg'))
                                <div class="text-danger">
                                    {{ $errors->first('nm_brg')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Harga</label>
                            <input type="text" name="harga" class="form-control" placeholder="Harga..." value="{{$p->harga}}">

                            @if($errors->has('harga'))
                                <div class="text-danger">
                                    {{ $errors->first('harga')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Image</label>
                            <input type="text" name="image" class="form-control" placeholder="Image..." value="{{$p->image}}">

                            @if($errors->has('image'))
                                <div class="text-danger">
                                    {{ $errors->first('image')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Deskripsi</label>
                            <input type="text" name="deskripsi" class="form-control" placeholder="Deskripsi..." value="{{$p->deskripsi}}">

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
                    @endforeach
                </div>
            </div>
        </div>
    </body>
</html>
