@extends('layout.ceria')

@section('title', 'KERANJANG BELANJA')

@section('isikonten')

@section('judulhalaman', 'KERANJANG BELANJA')

    <div>
        <a href="/keranjangbelanja/tambah" class="btn btn-primary" style="width: 100px"><strong>Beli</strong></a>
    </div>

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
            <td id="harga">Rp
                @php
                    $harga = $kb->Harga;
                    echo number_format($harga, 0, ",", ".");
                @endphp
            </td>
            <td id="jumlah">Rp
                @php
                    $jumlah = $kb->Jumlah * $kb->Harga;
                    echo number_format($jumlah, 0, ",", ".");
                @endphp
            </td>
			<td>
				<a href="/keranjangbelanja/edit/{{ $kb->ID }}" class="btn btn-success">Edit</a>
				|
				<a href="/keranjangbelanja/hapus/{{ $kb->ID }}" class="btn btn-danger">Batal</a>
			</td>
		</tr>
		@endforeach
	</table>

@endsection
