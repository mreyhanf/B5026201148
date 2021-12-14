<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link href="http://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css" rel="stylesheet">


		<script type="text/javascript" src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    	<script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
		<script src="http://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js"></script>

    <style>
        .header {
            margin-left: 200px;
            padding: 20px;
            text-align: center;
            background: #0f0d85;
            color: white;
            font-size: 30px;
        }
        .sidebar {
            bottom: 0px;
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
}

.sidebar a {
  font-size: 20px;
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}
.sidebar a:hover {
  background-color: #0a87ee;
  color: white;
}
div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   height: 25px;
   margin-left: 215px;
   background-color: rgb(64, 69, 87);
   color: white;
   text-align: center;
}
    </style>
</head>
<body class="container-fluid m-4">
    <div class="header row">
        <div>
            <img src="/pasfoto.jpg" alt="" width="100px">
        </div>
        <div>5026201148 - Muhammad Reyhan Fitriyan</div>
    </div>
    <div class="sidebar">
        <a href="/pegawai">Pegawai</a>
        <a href="/absen">Absen</a>
        <a href="/tugas">Tugas</a>
        <a href="/bolpen">Bolpen</a>
    </div>
    <div class="content">
    <h3>@yield('judulhalaman')</h3>
    @section('isikonten')
    @show

    <div class="footer">
        <span style="margin-right: 215px">&copy; Hak Cipta oleh 5026201148 - Muhammad Reyhan Fitriyan</span>
    </div>
    </div>
</body>
</html>
