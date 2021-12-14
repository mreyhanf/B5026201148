@extends('layout.ceria')

@section('title', 'ABSEN PEGAWAI')

@section('isikonten')

@section('judulhalaman', 'EDIT ABSEN')

<a href="/absen"> Kembali</a>
	@foreach($absen as $p)
	<form action="/absen/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->ID }}"> <br/>
        <div class="form-group row">
            <div class="col-sm-1">
                <label for="IDPegawai">Pegawai</label>
            </div>
            <div class="col-sm-2">
                <select id="IDPegawai" class="form-control" name="IDPegawai" required="required">
                @foreach($pegawai as $peg)
                <option value="{{ $peg->pegawai_id }}" @if ($peg->pegawai_id === $p->IDPegawai) selected="selected" @endif> {{ $peg->pegawai_nama }}</option>
                @endforeach
                </select><br>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-1">
            <label for="dtpickerdemo" class="control-label">Tanggal</label>
            </div>
                <div class='col-sm-2 input-group date ' id='dtpickerdemo'>
                    <input type='text' class="form-control" name="tanggal"  style="margin-left: 15px" value="{{ $p->Tanggal }}"/>
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"  style="margin-left: 10px"></span>
                    </span>
                </div>
        </div>
            <script type="text/javascript">
                $(function () {
                    $('#dtpickerdemo').datetimepicker({format : "YYYY-MM-DD hh:mm", "defaultDate":new Date() });
                });
            </script>

        <div>
		<label>Status</label>
        <input type="radio" id="hadir" name="status" value="H" style="margin-left: 50px" @if ($p->Status === "H") checked="checked" @endif>
        <label for="hadir">HADIR</label>
        <input type="radio" id="tidak" name="status" value="T" @if ($p->Status === "T") checked="checked" @endif>
        <label for="tidak">TIDAK HADIR</label><br>
        </div>

		<input type="submit" class="btn btn-primary" value="Simpan Data" style="margin-top: 20px">
	</form>
	@endforeach


    @endsection
