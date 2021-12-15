@extends('layout.ceria')

@section('title', 'KERANJANG BELANJA')

@section('isikonten')

@section('judulhalaman', 'PEMBELIAN BARANG')

	<a href="/keranjangbelanja">Kembali</a>

	<br/>
	<br/>

	<form action="/keranjangbelanja/store" method="post">
		{{ csrf_field() }}
        <div class="form-group row">
            <div class="col-sm-2">
                <label for="KodeBarang">Kode Barang</label>
            </div>
            <div class="col-sm-2">
		        <input class="form-control" type="text" id="KodeBarang" required="required" name="KodeBarang">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-2">
                <label for="Jumlah">Jumlah Pembelian</label>
            </div>
            <div class="col-sm-2">
		        <input type="text" id="Jumlah" class="form-control" required="required" name="Jumlah">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-2">
                <label for="Harga">Harga per item</label>
            </div>
            <div class="col-sm-2">
		        <input type="text" id="Harga" class="form-control" required="required" name="Harga">
            </div>
        </div>
		<input type="submit" class="btn btn-primary" value="Simpan Data" style="margin-top: 20px">
	</form>

@endsection
