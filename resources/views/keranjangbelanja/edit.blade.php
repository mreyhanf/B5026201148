@extends('layout.ceria')

@section('title', 'KERANJANG BELANJA')

@section('isikonten')

@section('judulhalaman', 'EDIT PEMBELIAN')

	<a href="/keranjangbelanja">Kembali</a>

	<br/>
	<br/>

    @foreach($keranjangbelanja as $kb)
	<form action="/keranjangbelanja/store" method="post">
		{{ csrf_field() }}
        <div class="form-group row">
            <div class="col-sm-2">
                <label for="KodeBarang">Kode Barang</label>
            </div>
            <div class="col-sm-2">
		        <input class="form-control" type="text" id="KodeBarang" required="required" name="KodeBarang" value="{{ $kb->KodeBarang }}">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-2">
                <label for="Jumlah">Jumlah Pembelian</label>
            </div>
            <div class="col-sm-2">
		        <input type="text" id="Jumlah" class="form-control" required="required" name="Jumlah" value="{{ $kb->Jumlah}}">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-2">
                <label for="Harga">Harga per item</label>
            </div>
            <div class="col-sm-2">
		        <input type="text" id="Harga" class="form-control" required="required" name="Harga" value="{{ $kb->Harga }}">
            </div>
        </div>
		<input type="submit" class="btn btn-primary" value="Simpan Data" style="margin-top: 20px">
	</form>
    @endforeach

@endsection
