@extends('layout.ceria')

@section('title', 'PEGAWAI')

@section('isikonten')

@section('judulhalaman', 'EDIT PEGAWAI')

	<a href="/pegawai"> Kembali</a>

	<br/>
	<br/>

	@foreach($pegawai as $p)
	<form action="/pegawai/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>
        <div class="form-group row">
            <div class="col-sm-1">
                <label for="nama">Nama</label>
            </div>
            <div class="col-sm-2">
		        <input class="form-control" type="text" id="nama" required="required" name="nama" value="{{ $p->pegawai_nama }}">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-1">
                <label for="jabatan">Jabatan</label>
            </div>
            <div class="col-sm-2">
		        <input type="text" id="jabatan" class="form-control" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-1">
                <label for="umur">Umur</label>
            </div>
            <div class="col-sm-2">
		        <input type="number" id="umur" class="form-control" required="required" name="umur" value="{{ $p->pegawai_umur }}">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-1">
                <label for="alamat">Alamat</label>
            </div>
            <div class="col-sm-2">
		        <textarea required="required" id="alamat" class="form-control" name="alamat">{{ $p->pegawai_alamat }}</textarea>
            </div>
        </div>
		<input type="submit" class="btn btn-primary" value="Simpan Data" style="margin-top: 20px">
	</form>
	@endforeach

@endsection
