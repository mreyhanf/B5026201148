@extends('layout.ceria')

@section('title', 'PEGAWAI')

@section('isikonten')

@section('judulhalaman', 'PEGAWAI')

    <div class="row">
    <div class="col-sm-2">
        <a href="/pegawai/tambah" class="btn btn-primary" > + Tambah Pegawai Baru</a>
    </div>
    <div class="container row">
    <form action="/pegawai/cari" method="GET">
        <div class="col-sm-4">
		<input type="text" class="form-control" name="cari" placeholder="Cari pegawai berdasarkan nama atau alamat" value="{{ old('cari') }}">
        </div>
        <div class="col-2">
		<input type="submit" value="CARI" class="btn btn-info">
        </div>
	</form>
    </div>
    </div>
	<br/>

	<table class="table table-success table-striped">
		<tr>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		@foreach($pegawai as $p)
		<tr>
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->pegawai_alamat }}</td>
			<td>
                <a href="/pegawai/view/{{ $p->pegawai_id }}">View Detail</a>
                |
				<a href="/pegawai/edit/{{ $p->pegawai_id }}">Edit</a>
				|
				<a href="/pegawai/hapus/{{ $p->pegawai_id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

    {{ $pegawai->links() }}
@endsection
