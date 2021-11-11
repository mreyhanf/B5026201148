<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5026201148 - Form Validation</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <style>
    body {
    background: url("https://wallpaperaccess.com/full/521111.jpg");
	background-repeat: no-repeat;
	background-size: cover;
    }

    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
    }

    input[type=number] {
    -moz-appearance: textfield;
    }

    .container {
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%,-50%);
	width: 1100px;
	background: white;
	padding: 45px;
	box-sizing: border-box;
	border :1px solid rgba(0,0,0,.1);
	box-shadow: 0 5px 10px rgba(0,0,0,.2);
    }

    h1 {
        color: rgb(66,133,244);
        font-weight: bolder;
        text-align: center;
    }

    .btn {
        width: 150px;
        font-weight: bold;
    }
    </style>
</head>
<body>
    <div class="container rounded">
        <h1 class="mb-5">Registration Form</h1>
        <form name="form" id="form" action="google.php" method="post">
            <div class="row mb-3 form-group">
                <label for="user_id" class="col-2 col-form-label">User id:</label>
                <div class="col-6">
                    <input type="text" class="form-control" id="user_id" required>
                </div>
                <div class="col-4 mt-1 text-danger" id="user_id_error">
                    Required and must be of length 5 to 12.
                </div>
            </div>
            <div class="row mb-3 form-group">
                <label for="password" class="col-2 col-form-label">Password:</label>
                <div class="col-6">
                    <input type="text" class="form-control" id="password" required>
                </div>
                <div class="col-4 mt-1 text-danger" id="password_error">
                    Required and must be of length 7 to 12.
                </div>
            </div>
            <div class="row mb-3 form-group">
                <label for="name" class="col-2 col-form-label">Name:</label>
                <div class="col-6">
                    <input type="text" class="form-control" id="name" required>
                </div>
                <div class="col-4 mt-1 text-danger" id="name_error">
                    Required and alphabets only.
                </div>
            </div>
            <div class="row mb-3 form-group">
                <label for="address" class="col-2 col-form-label">Address:</label>
                <div class="col-6">
                    <input type="text" class="form-control" id="address">
                </div>
            </div>
            <div class="row mb-3 form-group">
                <label for="country" class="col-2 col-form-label">Country:</label>
                <div class="col-6">
                    <select name="country" id="country" class="form-control" required>
                        <option value="" disabled selected>(Please select a country)</option>
                        <option value="china">China</option>
                        <option value="india">India</option>
                        <option value="indonesia">Indonesia</option>
                        <option value="norway">Norway</option>
                        <option value="united_states">United States</option>
                    </select>
                </div>
                <div class="col-4 mt-1 text-danger" id="country_error">
                    Required. Must select a country.
                </div>
            </div>
            <div class="row mb-3 form-group">
                <label for="zip_code" class="col-2 col-form-label">ZIP Code:</label>
                <div class="col-6">
                    <input type="number" class="form-control" id="zip_code" required>
                </div>
                <div class="col-4 mt-1 text-danger" id="zip_code_error">
                    Required. Must be a numeric only.
                </div>
            </div>
            <div class="row mb-3 form-group">
                <label for="email" class="col-2 col-form-label">Email:</label>
                <div class="col-6">
                    <input type="email" class="form-control" id="email" required>
                </div>
                <div class="col-4 mt-1 text-danger" id="email_error">
                    Required. Must be a valid email.
                </div>
            </div>
            <div class="row mb-3 form-group">
                <label for="sex" class="col-2 col-form-label">Sex:</label>
                <div class="col-3 mt-2">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="sex_male" name="sex" value="male" required>
                        <label class="form-check-label" for="sex_male">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="sex_female" name="sex" value="female" required>
                        <label class="form-check-label" for="sex_female">Female</label>
                    </div>
                </div>
                <div class="col-4 mt-2 text-danger" id="sex_error">
                    Required.
                </div>
            </div>
            <div class="row mb-3 form-group">
                <label for="language" class="col-2 col-form-label">Language:</label>
                <div class="col-3 mt-2">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="language_english" class="language" name="language" value="english">
                        <label class="form-check-label" for="language_english">English</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="language_non_english" class="language" name="language" value="non_english">
                        <label class="form-check-label" for="language_non_english">Non English</label>
                    </div>
                </div>
                <div class="col-4 mt-2 text-danger" id="language_error">
                    Required.
                </div>
            </div>
            <div class="row mb-3 form-group">
                <label for="about" class="col-2 col-form-label">About:</label>
                <div class="col-6 mt-2">
                <textarea class="form-control" id="about" rows="5"></textarea>
                </div>
            </div>
            <br>
            <div class="text-center">
                <button type="button" class="btn btn-primary rounded-pill" id="submit_button">Submit</button>
            </div>
        </form>
    </div>

    <script>
        $(document).ready(function() {
            $("#user_id_error").hide();
            $("#password_error").hide();
            $("#name_error").hide();
            $("#country_error").hide();
            $("#zip_code_error").hide();
            $("#email_error").hide();
            $("#sex_error").hide();
            $("#language_error").hide();
        })

        var error_user_id = true;
        var error_password = true;
        var error_name = true;
        var error_country = true;
        var error_zip_code = true;
        var error_email = true;
        var error_sex = true;
        var error_language = true;

        function check_user_id() {
            var minLength = 5;
            var maxLength = 12;
            var charLength = $("#user_id").val().length;

            if (charLength < minLength || charLength > maxLength) {
               $("#user_id_error").show();
            } else {
               error_user_id = false;
               $("#user_id_error").hide();
            }
         }

         function check_password() {
            var minLength = 7;
            var maxLength = 12;
            var charLength = $("#password").val().length;

            if (charLength < minLength || charLength > maxLength) {
               $("#password_error").show();
            } else {
               error_password = false;
               $("#password_error").hide();
            }
         }

         function check_name() {
            var minLength = 1;
            var pattern = /^[a-zA-z]+([\s][a-zA-Z]+)*$/;
            var name = $("#name").val();
            var test = pattern.test(name);
            var charLength = $("#name").val().length;

            if (charLength < minLength || test === false) {
               $("#name_error").show();
            } else {
               error_name = false;
               $("#name_error").hide();
            }
         }

         function check_country() {
             var country = $("#country :selected").val();
             var length = country.length;

             if (length <= 0) {
                 $("#country_error").show();
             } else {
                error_country = false;
                $("#country_error").hide();
             }
         }

         function check_zip_code() {
             var pattern = /^[0-9]+$/
             var zip_code = $("#zip_code").val();
             var test = pattern.test(zip_code);

             if (test === false) {
                 $("#zip_code_error").show();
             } else {
                 error_zip_code = false;
                 $("#zip_code_error").hide();
             }
         }

         function check_email() {
             var pattern = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
             var email = $("#email").val();
             var test = pattern.test(email);

             if (test === false) {
                 $("#email_error").show();
             } else {
                 error_email = false;
                 $("#email_error").hide();
             }
         }

         function check_sex() {
             var sex = $("input[name='sex']:checked").val();

             if (sex !== "male" && sex !== "female") {
                $("#sex_error").show();
             } else {
                 error_sex = false;
                 $("#sex_error").hide();
             }
         }

         function check_language() {
             const input_language = [];
             input_language.push($("input[name='language']:checked").val());
             var language = false;

             if (input_language[0] === "english" || input_language[0] === "non_english") {
                language = true;
             }

             if (language === false) {
                 $("#language_error").show();
             } else {
                 error_language = false;
                 $("#language_error").hide();
             }
         }

         function submit_form() {
             $("#form").submit();
         }

        $("#submit_button").click(function() {
            error_user_id = true;
            error_password = true;
            error_name = true;
            error_country = true;
            error_zip_code = true;
            error_email = true;
            error_sex = true;
            error_language = true;

            check_user_id();
            check_password();
            check_name();
            check_country();
            check_zip_code();
            check_email();
            check_sex();
            check_language();

            if(error_user_id === true || error_password === true || error_name === true || error_country === true || error_zip_code === true || error_email === true || error_sex === true || error_language === true) {
                alert("Please fill out the form correctly");
            } else {
                submit_form();
            }
        })
    </script>
</body>
</html>
