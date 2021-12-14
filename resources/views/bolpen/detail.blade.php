@extends('layout.ceria')

@section('title', 'BOLPEN')

@section('isikonten')

@section('judulhalaman', 'DETAIL BOLPEN')

	<a href="/bolpen">Kembali</a>

	<br/>
	<br/>
    @foreach ($bolpen as $b)
        <div class="form-group row">
            <div class="col-sm-2">
                <label for="merkbolpen">Merk</label>
            </div>
            <div class="col-sm-2">
		        {{ $b->merkbolpen }}
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-2">
                <label for="stockbolpen">Stock</label>
            </div>
            <div class="col-sm-2">
		        {{ $b->stockbolpen }}
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-2">
                <label for="tersedia">Tersedia</label>
            </div>
            <div class="col-sm-1">
                {{ $b->tersedia }}
            </div>
        </div>

    @endforeach

@endsection
