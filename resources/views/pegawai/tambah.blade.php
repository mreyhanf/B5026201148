@extends('layout.ceria')

@section('title', 'PEGAWAI')

@section('isikonten')

@section('judulhalaman', 'TAMBAH PEGAWAI')

	<a href="/pegawai"> Kembali</a>

	<br/>
	<br/>

	<form action="/pegawai/store" method="post">
		{{ csrf_field() }}
        <div class="form-group row">
            <div class="col-sm-1">
                <label for="nama">Nama</label>
            </div>
            <div class="col-sm-2">
		        <input class="form-control" type="text" id="nama" required="required" name="nama">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-1">
                <label for="jabatan">Jabatan</label>
            </div>
            <div class="col-sm-2">
		        <input type="text" id="jabatan" class="form-control" required="required" name="jabatan">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-1">
                <label for="umur">Umur</label>
            </div>
            <div class="col-sm-2">
		        <input type="number" id="umur" class="form-control" required="required" name="umur">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-1">
                <label for="alamat">Alamat</label>
            </div>
            <div class="col-sm-2">
		        <textarea required="required" id="alamat" class="form-control" name="alamat"></textarea>
            </div>
        </div>
		<input type="submit" class="btn btn-primary" value="Simpan Data" style="margin-top: 20px">
	</form>

@endsection
