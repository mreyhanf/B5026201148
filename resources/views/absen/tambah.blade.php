@extends('layout.ceria')

@section('title', 'ABSEN PEGAWAI')
@section('judulhalaman', 'Tambah Absen Pegawai')
@section('isikonten')

<a href="/absen">Kembali</a>
<br>
<br>

	<form action="/absen/store" method="post">
		{{ csrf_field() }}
        <div class="form-group row">
            <div class="col-sm-1">
                <label for="IDPegawai">Pegawai</label>
            </div>

            <div class="col-sm-2">
            <select id="IDPegawai" class="form-control" name="IDPegawai" required="required">
            @foreach($pegawai as $p)
                <option value="{{ $p->pegawai_id }}"> {{ $p->pegawai_nama }}</option>
            @endforeach
            </select><br>
            </div>
        </div>

        <div class="form-group row">

            <div class="col-sm-1">
                <label for="dtpickerdemo" class="control-label">Tanggal</label>
            </div>
                <div class='col-sm-4 input-group date ' id='dtpickerdemo'>
                    <input type='text' class="form-control" name="tanggal" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
        </div>
            <script type="text/javascript">
                $(function () {
                    $('#dtpickerdemo').datetimepicker({format : "YYYY/MM/DD hh:mm", "defaultDate":new Date() });
                });
            </script>
		<br>
            <div>
            <label>Status</label>
            <input type="radio" id="hadir" name="status" value="H" style="margin-left: 50px">
            <label for="hadir">HADIR</label>
            <input type="radio" id="tidak" name="status" value="T" checked="checked">
            <label for="tidak">TIDAK HADIR</label><br>
            </div>

        <input type="submit" class="btn btn-primary" value="Simpan Data" style="margin-top: 20px">
	</form>
@endsection
