<!DOCTYPE html>
<html lang="en">
<head>
    <title>5026201148 - jQuery HTML Remove Elements/Content</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <style>
    body {
	font-family: sans-serif;
	background: url(image_tugas4/background.jpg);
	background-repeat: no-repeat;
	background-size: cover;
    }
    .container {
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%,-50%);
	width: 850px;

	background: white;
	padding: 45px;
	box-sizing: border-box;
	border :1px solid rgba(0,0,0,.1);
	box-shadow: 0 5px 10px rgba(0,0,0,.2);
    }
    h1 {
	text-align: center;
	margin: 0 0 40px;
	padding: 0;
	color: rgb(66,133,244);
    font-weight: bolder;
    }
    input {
	padding: 5px;
	margin-bottom: 30px;
	width: 70%;
	box-shadow: none;
	outline: none;
	border:none;
	border-bottom: 2px solid #999;
    }
    #add_item {
	border-radius: 10px;
	font-size: 20px;
	height: 40px;
    width: 200px;
	cursor : pointer;
	background: rgb(66,133,244);
	color: white;
	margin-bottom: 0;
    }
    #add_item:hover {
	background: #0250b6;
	color: white;
    }
    #remove_item {
    border-radius: 10px;
	font-size: 20px;
	height: 40px;
	cursor : pointer;
	background: rgb(243, 167, 2);
	color: white;
	margin-bottom: 0;
    }
    #remove_item:hover {
    background: rgb(192, 126, 4);
	color: white;
    }
    #remove_all_item {
    border-radius: 10px;
	font-size: 20px;
	height: 40px;
	cursor : pointer;
	background: rgb(240, 0, 0);
	color: white;
	margin-bottom: 0;
    }
    #remove_all_item:hover {
    background: rgb(196, 0, 0);
	color: white;
    }
    span {
    font-size: 18px;
    }
    </style>
</head>
<body>
    <div class="container">
    <h1>Shopping List</h1>
    <form>
        <input type="text" id="input" placeholder="Beras 5 kg">
    </form>
    <br>

    <button id="add_item">Add item</button>
    <button id="remove_item">Remove last item</button>
    <button id="remove_all_item">Remove all items</button>
    <span id="remove_alert" style="display: none; color: orange;"><b>Item removed</b></span>
    <span id="remove_all_alert" style="display: none; color: red;"><b>All items removed</b></span>

    <script>
        $(document).ready(function() {
            $("#add_item").click(function() {
                $("form").append("<input type='text' id='input' placeholder='Item belanja'>");
                $("form").append("<br>");
            });

            $("#remove_item").click(function() {
                $("input:last").remove();
                $("br:last").remove();
                $("#remove_alert").show();
                setTimeout(function() {
                    $("#remove_alert").hide();
                }, 3000);
                var inputExists = !!document.getElementById("#input"); // doesnt work
                if (inputExists === null) {
                    $("form").append("<input type='text' id='input' placeholder='Beras 5 kg'>");
                    $("form").append("<br>");
                }
            });

            $("#remove_all_item").click(function() {
                $("input").remove();
                $("br").remove();
                $("form").append("<input type='text' id='input' placeholder='Beras 5 kg'>");
                $("form").append("<br>");
                $("#remove_all_alert").show();
                setTimeout(function() {
                    $("#remove_all_alert").hide();
                }, 1300);
            });
        })
    </script>
    </div>
</body>
</html>
