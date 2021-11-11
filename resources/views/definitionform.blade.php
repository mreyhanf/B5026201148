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
    </style>
</head>
<body>
    <?php
        function cariDefinisi(string $kata) {
            $kata = preg_replace('/\s+/', '', $kata);

            $daftar_kata = [];
            $words = fopen('daftar_kata.txt', 'r');
            while ($line = fgets($words)) {
                array_push($daftar_kata, $line);
            }
            fclose($words);

            $daftar_arti = [];
            $definitions = fopen('daftar_arti.txt', 'r');
            while ($line = fgets($definitions)) {
                array_push($daftar_arti, $line);
            }
            fclose($definitions);

            $arti = '';
            for ($i = 0; $i < 333; $i++) {
                if (strcasecmp($kata, preg_replace('/\s+/', '', $daftar_kata[$i])) == 0) {
                    $arti = $daftar_arti[$i];
                    return "<span class='alert alert-success'>$arti</span>";
                }
            }

            if ($arti === '') {
                $kata = strtolower($kata);
                return "<span class='alert alert-danger'>Maaf, kata \"$kata\" tidak terdapat dalam database.</span>";
            }
    }
    ?>

    <div class="container">
        <h1 class="mb-5 mt-5 text-center">Kamus GRE</h1>
            <div class="row mb-5 form-group">
                <div class="col-1 col-form-label">
                    <label>Arti</label>
                </div>
                <div class="col-1 mt-2">:</div>
                <div class="col-10 mt-2">
                    <?php echo cariDefinisi($_POST["kata"]); ?>
                </div>
            </div>
    </div>

</body>
</html>
