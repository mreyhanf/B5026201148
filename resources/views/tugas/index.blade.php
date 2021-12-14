@extends('layout.ceria')

@section('title', 'TUGAS')

@section('isikonten')

@section('judulhalaman', 'TUGAS')

	<a href="/tugas/tambah" class="btn btn-primary"> + Tambah Tugas Baru</a>

	<br/>
	<br/>

	<table class="table table-success table-striped">
		<tr>
			<th>Nama Pegawai</th>
			<th>Tanggal</th>
			<th>Nama Tugas</th>
			<th>Status</th>
			<th>Opsi</th>
		</tr>
		@foreach($tugas as $t)
		<tr>
			<td>{{ $t->pegawai_nama }}</td>
			<td>{{ $t->Tanggal }}</td>
			<td>{{ $t->NamaTugas }}</td>
			<td>{{ $t->Status }}</td>
			<td>
				<a href="/tugas/edit/{{ $t->ID }}">Edit</a>
				|
				<a href="/tugas/hapus/{{ $t->ID }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    {{ $tugas->links() }}
@endsection
