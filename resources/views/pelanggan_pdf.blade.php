<!DOCTYPE html>
<html>
<head>
	<title>Daftar Pelanggan</title>
	<link rel="stylesheet" href="http://localhost/admin/bootstrap.min.css" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h5>Daftar Pelanggan</h4>
	</center>

	<table class='table table-bordered'>
		<thead>
			<tr>
				<th>No</th>
				<th>Username</th>
				<th>Password</th>
				<th>Email</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1 @endphp
			@foreach($pelanggan as $p)
			<tr>
				<td>{{ $i++ }}</td>
				<td>{{$p->username}}</td>
				<td>{{$p->password}}</td>
				<td>{{$p->email}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>

</body>
</html>