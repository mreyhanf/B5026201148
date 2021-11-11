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

    body {
        font-weight:500
    }

    .form-group {
        margin-bottom: 100px;
    }

    .btn {
        width: 200px;
        font-weight: 600;
    }

    </style>
</head>
<body>
    <div class="container">
        <h1 class="mb-5 mt-5 text-center">Kamus GRE</h1>
        <form action="definition" name="form" id="form" method="post">
            @csrf
            <div class="row mb-5 form-group">
                <div class="col-2 col-form-label">
                    <label for="kata">Masukkan kata</label>
                </div>
                <div class="col-8">
                    <input type="text" name="kata" class="form-control" id="kata" required>
                </div>
            </div>
            <div class="text-center text-danger mb-5" id="kata_error">
                Tidak boleh kosong dan harus alphabetical
            </div>
            <div class="text-center">
                <button type="button" class="btn btn-primary text-center" id="cari">Cari Definisi</button>
            </div>
        </form>
    </div>

    <script>
        $(document).ready(function() {
            $("#kata_error").hide();
        })

        var error_kata = true;

        function check_kata() {
            var pattern = /^[a-zA-Z ]*$/;
            var kata = $("#kata").val();
            var test_pattern = pattern.test(kata);
            var length = kata.length;

            if (test_pattern === false || length < 1) {
                 $("#kata_error").show();
            } else {
                 error_kata = false;
                 $("#kata_error").hide();
            }
        }

        function submit_form() {
            $("#form").submit();
        }

        $("#cari").click(function() {
            error_kata = true;

            check_kata();

            if (error_kata === false) {
                submit_form();
            }
        })
    </script>

</body>
</html>
