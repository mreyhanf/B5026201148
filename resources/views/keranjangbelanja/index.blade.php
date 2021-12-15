@extends('layout.ceria')

@section('title', 'KERANJANG BELANJA')

@section('isikonten')

@section('judulhalaman', 'KERANJANG BELANJA')

	<br/>

	<table class="table table-success table-striped">
		<tr>
			<th>Kode Pembelian</th>
			<th>Kode Barang</th>
            <th>Jumlah Pembelian</th>
            <th>Harga per item</th>
            <th>Total</th>
            <th>Action</th>
		</tr>
		@foreach($keranjangbelanja as $kb)
		<tr>
			<td>{{ $kb->ID }}</td>
			<td>{{ $kb->KodeBarang }}</td>
            <td>{{ $kb->Jumlah }}</td>
            <td id="harga">{{ $kb->Harga }}</td>
            <td id="jumlah">{{ $kb->Jumlah * $kb->Harga}}</td>
			<td>
                <a href="/keranjangbelanja/tambah" class="btn btn-primary" >Beli</a>
                |
				<a href="/keranjangbelanja/edit/{{ $kb->ID }}" class="btn btn-success">Edit</a>
				|
				<a href="/keranjangbelanja/hapus/{{ $kb->ID }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    {{ $keranjangbelanja->links() }}
@endsection
