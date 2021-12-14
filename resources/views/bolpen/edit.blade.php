@extends('layout.ceria')

@section('title', 'BOLPEN')

@section('isikonten')

@section('judulhalaman', 'EDIT BOLPEN')

	<a href="/bolpen">Kembali</a>

	<br/>
	<br/>
    @foreach ($bolpen as $b)
	<form action="/bolpen/update" method="post">
		{{ csrf_field() }}
        <input type="hidden" name="kodebolpen" value="{{ $b->kodebolpen }}"> <br/>
        <div class="form-group row">
            <div class="col-sm-1">
                <label for="merkbolpen">Merk</label>
            </div>
            <div class="col-sm-2">
		        <input class="form-control" type="text" id="merkbolpen" required="required" name="merkbolpen" value="{{ $b->merkbolpen }}">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-1">
                <label for="stockbolpen">Stock</label>
            </div>
            <div class="col-sm-2">
		        <input type="number" id="stockbolpen" class="form-control" required="required" name="stockbolpen" value="{{ $b->stockbolpen }}">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-1">
                <label for="tersedia">Tersedia</label>
            </div>
            <div class="col-sm-1">
                <input type="radio" id="ya" name="tersedia" value="Y" @if ($b->tersedia === "Y") checked="checked" @endif>
                <label for="ya">Ya</label>
            </div>
            <div class="col-sm-1">
                <input type="radio" id="tidak" name="tersedia" value="T" @if ($b->tersedia === "T") checked="checked" @endif>
                <label for="tidak">Tidak</label>
            </div>
        </div>
		<input type="submit" class="btn btn-primary" value="Simpan Data" style="margin-top: 20px">
	</form>
    @endforeach

@endsection
