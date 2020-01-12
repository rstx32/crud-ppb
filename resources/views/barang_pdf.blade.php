<!DOCTYPE html>
<html>
<head>
	<title>Laporan Barang</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h5>Laporan Barang</h4>
	</center>

	<table class='table table-bordered'>
		<thead>
			<tr>
				<th>No</th>
				<th>Kode</th>
				<th>Nama</th>
				<th>Harga</th>
				<th>Gambar</th>
				<th>Deskripsi</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1 @endphp
			@foreach($barang as $p)
			<tr>
				<td class="text-center">{{ $i++ }}</td>
				<td class="text-center">{{ $p->kd_brg }}</td>
				<td class="text-center">{{ $p->nm_brg }}</td>
				<td class="text-center">Rp. {{ $p->harga }}</td>
				<td class="text-center"><img src="{{ $p->image }}" width="250" height="200"></td>
				<td class="text-center">{{ $p->deskripsi }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>

</body>
</html>