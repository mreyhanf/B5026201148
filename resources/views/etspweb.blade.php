<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ETS - 5026201148 - PWeb B</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <style>
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
    }

    input[type=number] {
    -moz-appearance: textfield;
    }

    body {
        font-weight:500
    }

    .form-group {
        margin-bottom: 100px;
    }

    .button {
        margin-top: 75px;
    }

    .kirim {
        margin-left: 300px;
    }

    .reset {
        margin-right: 300px;
    }

    .btn {
        width: 200px;
        font-weight: 600;
    }

    #reset {
        background-color: lime;
    }

    </style>
</head>
<body>
    <div class="container rounded">
        <div class="row mt-5">
            <div class="col">Muhammad Reyhan Fitriyan</div>
        </div>
        <div class="row">
            <div class="col">Reyhan</div>
        </div>
        <div class="row">
            <div class="col">5026201148</div>
        </div>
        <h1 class="mb-5 mt-5 text-center">Form Input Data Barang</h1>
        <form name="form" id="form" action="google.php" method="post">
            <div class="row mb-5 form-group">
                <label for="nama_barang" class="col-2 col-form-label">Nama Barang</label>
                <div class="col-1 mt-2">:</div>
                <div class="col-6">
                    <input type="text" class="form-control" id="nama_barang" required>
                </div>
                <div class="col-3 mt-1 text-danger" id="nama_barang_error">
                    Wajib dan minimal 10 karakter
                </div>
            </div>
            <div class="row mb-5 form-group">
                <label for="harga" class="col-2 col-form-label">Harga</label>
                <div class="col-1 mt-2">:</div>
                <div class="col-6">
                    <input type="number" class="form-control" id="harga" required>
                </div>
                <div class="col-3 mt-1 text-danger" id="harga_error">
                    Wajib, harus angka, minimal 5000
                </div>
            </div>
            <div class="row mb-5 form-group">
                <label for="jenis_barang" class="col-2 col-form-label">Jenis Barang</label>
                <div class="col-1 mt-2">:</div>
                <div class="col-6">
                    <select name="jenis_barang" id="jenis_barang" class="form-control" required>
                        <option value="" disabled selected></option>
                        <option value="makanan">Makanan</option>
                        <option value="minuman">Minuman</option>
                        <option value="non_mamin">Non Mamin</option>
                    </select>
                </div>
                <div class="col-3 mt-1 text-danger" id="jenis_barang_error">
                    Wajib
                </div>
            </div>
            <div class="row mb-5 form-group">
                <label for="barcode" class="col-2 col-form-label">Kode Barcode</label>
                <div class="col-1 mt-2">:</div>
                <div class="col-6">
                    <input type="number" class="form-control" id="barcode" required>
                </div>
                <div class="col-3 text-danger" id="barcode_error">
                    Wajib, harus angka, minimal 10 digit
                </div>
            </div>

            <div class="row button">
                <div class="col kirim">
                    <button type="button" class="btn btn-primary text-center" id="kirim">Kirim</button>
                </div>
                <div class="col reset">
                    <input type="reset" class="btn" id="reset"></input>
                </div>
            </div>
        </form>
    </div>

    <script>
        $(document).ready(function() {
            $("#nama_barang_error").hide();
            $("#harga_error").hide();
            $("#jenis_barang_error").hide();
            $("#barcode_error").hide();
        })

        var error_nama_barang = true;
        var error_harga = true;
        var error_jenis_barang = true;
        var error_barcode = true;

        function check_nama_barang() {
            var minLength = 10;
            var charLength = $("#nama_barang").val().length;

            if (charLength < minLength) {
               $("#nama_barang_error").show();
            } else {
               error_nama_barang = false;
               $("#nama_barang_error").hide();
            }
         }

        function check_harga() {
            var pattern = /^[0-9]+$/
            var harga = $("#harga").val();
            var test_pattern = pattern.test(harga);

            if (test_pattern === false || harga < 5000) {
                 $("#harga_error").show();
            } else {
                 error_harga = false;
                 $("#harga_error").hide();
            }
        }

        function check_jenis_barang() {
            var jenis_barang = $("#jenis_barang :selected").val();
            var length = jenis_barang.length;

            if (length <= 0) {
                 $("#jenis_barang_error").show();
            } else {
                error_jenis_barang = false;
                $("#jenis_barang_error").hide();
            }
        }

        function check_barcode() {
            var pattern = /^[0-9]+$/
            var barcode = $("#barcode").val();
            var test_pattern = pattern.test(barcode);
            var length = barcode.length;

            if (test_pattern === false || length < 10) {
                 $("#barcode_error").show();
            } else {
                 error_barcode = false;
                 $("#barcode_error").hide();
            }
        }

        function submit_form() {
            $("#form").submit();
        }

        $("#kirim").click(function() {
            error_nama_barang = true;
            error_harga = true;
            error_jenis_barang = true;
            error_barcode = true;

            check_nama_barang();
            check_harga();
            check_jenis_barang();
            check_barcode();

            if (error_nama_barang === true || error_harga === true || error_jenis_barang === true || error_barcode === true) {
                alert("Mohon isi form dengan benar sesuai petunjuk berwarna merah.");
            } else {
                submit_form();
            }
        })

        $("#reset").click(function() {
            $("#nama_barang_error").hide();
            $("#harga_error").hide();
            $("#jenis_barang_error").hide();
            $("#barcode_error").hide();
        })
    </script>

</body>
</html>
