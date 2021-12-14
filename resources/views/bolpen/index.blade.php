@extends('layout.ceria')

@section('title', 'BOLPEN')

@section('isikonten')

@section('judulhalaman', 'BOLPEN')

<div class="row">
    <div class="col-sm-2">
        <a href="/bolpen/tambah" class="btn btn-primary" > + Tambah Bolpen Baru</a>
    </div>
    <div class="container row">
    <form action="/bolpen/cari" method="GET">
        <div class="col-sm-3">
		<input type="text" class="form-control" name="cari" placeholder="Cari bolpen berdasarkan merk" value="{{ old('cari') }}">
        </div>
        <div class="col-2">
		<input type="submit" value="CARI" class="btn btn-info">
        </div>
	</form>
    </div>
    </div>

	<br/>
	<br/>

	<table class="table table-success table-striped">
		<tr>
			<th>Kode Bolpen</th>
			<th>Merk</th>
			<th>Stock</th>
			<th>Tersedia</th>
            <th>Opsi</th>
		</tr>
		@foreach($bolpen as $b)
		<tr>
			<td>{{ $b->kodebolpen }}</td>
			<td>{{ $b->merkbolpen }}</td>
			<td>{{ $b->stockbolpen }}</td>
			<td>{{ $b->tersedia }}</td>
			<td>
                <a href="/bolpen/view/{{ $b->kodebolpen }}">View Detail</a>
                |
				<a href="/bolpen/edit/{{ $b->kodebolpen }}">Edit</a>
				|
				<a href="/bolpen/hapus/{{ $b->kodebolpen }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    {{ $bolpen->links() }}
@endsection
