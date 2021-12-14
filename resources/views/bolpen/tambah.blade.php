@extends('layout.ceria')

@section('title', 'BOLPEN')

@section('isikonten')

@section('judulhalaman', 'TAMBAH BOLPEN')

	<a href="/bolpen">Kembali</a>

	<br/>
	<br/>

	<form action="/bolpen/store" method="post">
		{{ csrf_field() }}
        <div class="form-group row">
            <div class="col-sm-1">
                <label for="merkbolpen">Merk</label>
            </div>
            <div class="col-sm-2">
		        <input class="form-control" type="text" id="merkbolpen" required="required" name="merkbolpen">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-1">
                <label for="stockbolpen">Stock</label>
            </div>
            <div class="col-sm-2">
		        <input type="number" id="stockbolpen" class="form-control" required="required" name="stockbolpen">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-1">
                <label for="tersedia">Tersedia</label>
            </div>
            <div class="col-sm-1">
                <input type="radio" id="ya" name="tersedia" value="Y">
                <label for="ya">Ya</label>
            </div>
            <div class="col-sm-1">
                <input type="radio" id="tidak" name="tersedia" value="T" checked="checked">
                <label for="tidak">Tidak</label>
            </div>
        </div>
		<input type="submit" class="btn btn-primary" value="Simpan Data" style="margin-top: 20px">
	</form>

@endsection
