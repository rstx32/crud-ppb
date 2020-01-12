@extends('admin.master')
@section('content')
<!-- Sidebar -->
<div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
              <li class="nav-item">
                <a href="./home" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>Dashboard</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./barang" class="nav-link active">
                <i class="nav-icon fas fa-th"></i>
                  <p>Barang</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./pelanggan" class="nav-link">
                <i class="nav-icon fas fa-table"></i>
                  <p>Pelanggan</p>
                </a>
              </li>
          </li>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center h3">
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
    </section>
</div>
@endsection