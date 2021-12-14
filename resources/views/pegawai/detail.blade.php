@extends('layout.ceria')

@section('title', 'PEGAWAI')

@section('isikonten')

@section('judulhalaman', 'DETAIL PEGAWAI')

	<a href="/pegawai"> Kembali</a>

	<br/>
	<br/>

	@foreach($pegawai as $p)
        <div class="form-group row">
            <div class="col-sm-1">
                <label for="nama">Nama</label>
            </div>
            <div class="col-sm-2">
		        {{ $p->pegawai_nama }}
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-1">
                <label for="jabatan">Jabatan</label>
            </div>
            <div class="col-sm-2">
		        {{ $p->pegawai_jabatan }}
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-1">
                <label for="umur">Umur</label>
            </div>
            <div class="col-sm-2">
		        {{ $p->pegawai_umur }}
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-1">
                <label for="alamat">Alamat</label>
            </div>
            <div class="col-sm-2">
		        {{ $p->pegawai_alamat }}
            </div>
        </div>

	@endforeach

@endsection
