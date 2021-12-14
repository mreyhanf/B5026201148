@extends('layout.ceria')

@section('title', 'TUGAS')

@section('isikonten')

@section('judulhalaman', 'TAMBAH TUGAS')

	<a href="/tugas">Kembali</a>

	<br/>
	<br/>

	<form action="/tugas/store" method="post">
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
                    <div class='col-sm-2 input-group date ' id='dtpickerdemo'>
                        <input type='text' class="form-control" name="tanggal"  style="margin-left: 15px" >
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
		        <input type="text" id="nama_tugas" class="form-control" required="required" name="NamaTugas">
            </div>
        </div>
        <label>Status</label>
        <input type="radio" id="status_tugas" name="status" value="S" style="margin-left: 50px">
        <label for="hadir">Selesai</label>
        <input type="radio" id="status_tugas" name="status" value="T" checked="checked">
        <label for="tidak">Tidak selesai</label><br>
		<input type="submit" value="Simpan Data" class="btn btn-primary" style="margin-top: 20px">
	</form>

@endsection
