@extends('layout.ceria')

@section('title', 'TUGAS')

@section('isikonten')

@section('judulhalaman', 'EDIT TUGAS')

	<a href="/tugas"> Kembali</a>

	<br/>
	<br/>

	@foreach($tugas as $t)
	<form action="/tugas/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="ID" value="{{ $t->ID }}"> <br/>
        <input type="hidden" name="id" value="{{ $t->ID }}"> <br/>
        <div class="form-group row">
            <div class="col-sm-1">
                <label for="IDPegawai">Pegawai</label>
            </div>
            <div class="col-sm-2">
                <select id="IDPegawai" class="form-control" name="IDPegawai" required="required">
                @foreach($pegawai as $peg)
                <option value="{{ $peg->pegawai_id }}" @if ($peg->pegawai_id === $t->IDPegawai) selected="selected" @endif> {{ $peg->pegawai_nama }}</option>
                @endforeach
                </select><br>
            </div>
        </div>
        <div class="form-group row">
        <div class="col-sm-1">
            <label for="dtpickerdemo" class="control-label">Tanggal</label>
        </div>
                <div class='col-sm-2 input-group date ' id='dtpickerdemo'>
                    <input type='text' class="form-control" name="tanggal"  style="margin-left: 15px" value="{{ $t->Tanggal }}"/>
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

        <div class="form-group row">
            <div class="col-sm-1">
                <label for="nama_tugas">Nama Tugas</label>
            </div>
            <div class="col-sm-2">
		        <input type="text" id="nama_tugas" class="form-control" required="required" name="NamaTugas" value="{{ $t->NamaTugas }}">
            </div>
        </div>
        <label>Status</label>
        <input type="radio" id="status_tugas" name="status" value="S" style="margin-left: 50px" @if ($t->Status === "S") checked="checked" @endif>
        <label for="hadir">Selesai</label>
        <input type="radio" id="status_tugas" name="status" value="T" @if ($t->Status === "T") checked="checked" @endif>
        <label for="tidak">Tidak selesai</label><br>


		<input type="submit" class="btn btn-primary" value="Simpan Data" style="margin-top: 20px">
	</form>
	@endforeach

@endsection
