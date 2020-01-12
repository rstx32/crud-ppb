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
                <a href="./barang" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                  <p>Barang</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./pelanggan" class="nav-link active">
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
                    Edit Pelanggan
                </div>
                <div class="card-body">
                    <a href="/pelanggan" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    @foreach($pelanggan as $p)
                    <form method="post" action="/pelanggan/update/{{$p->email}}">

                        {{ csrf_field() }}
                        {{ method_field('PUT') }}     

                        <div class="form-group">
                            <label>Email</label>
                            <input disabled type="text" name="email" class="form-control" placeholder="Email..." value="{{$p->email}}">

                            @if($errors->has('email'))
                                <div class="text-danger">
                                    {{ $errors->first('email')}}
                                </div>
                            @endif

                        </div>                   

                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control" placeholder="Username..." value="{{$p->username}}">

                            @if($errors->has('username'))
                                <div class="text-danger">
                                    {{ $errors->first('username')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input type="text" name="password" class="form-control" placeholder="Password..." value="{{$p->password}}">

                            @if($errors->has('password'))
                                <div class="text-danger">
                                    {{ $errors->first('password')}}
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