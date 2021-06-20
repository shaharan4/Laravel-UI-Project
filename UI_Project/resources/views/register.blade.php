<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
    <link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
</head>
<body>
    @include('nav')
    <p id="register_page_text">Start giving and receiving cash gifts to celebrate the kids you adore!</p>
    <div id='register_form_container'>
        <input type="text" id="first_name" name="firstname" placeholder="First Name"></input>
        <input type="text" id="last_name" name="lastname" placeholder="Last Name"></input>
        <input type="text" id="email_address" name="emailaddress" placeholder="Email Address"></input>
        <input type="text" id="password" name="password" placeholder="Password - at least 8 characters with 1 number"></input>
        <input type="text" id="confirm_password" name="confirmpassword" placeholder="Confirm Password"></input>
        <button type="button" id="join_button">JOIN NOW</button>
    </div>
    <div class="celebration_egg"></div>
</body>
</html>