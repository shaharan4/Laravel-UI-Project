<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
    <link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    @include('nav')
    <p id="login_page_text">Welcome to Ballooning Nest Eggs!</p>
    <div id='login_form_container'>
        <input type="text" class = 'login_form_field'  name="emailaddress" placeholder="Email Address"></input>
        <input type="password" class = 'login_form_field' name="password" placeholder="Password"></input>
        <span id="forgot_password_text">I forgot my password or username</span>
        <div id="remember_me">
            <input type="checkbox" id="remember_me_checkbox"></input>
            <span id="remember_me_text">Remember me</span>
        </div>
        <a href="/home"><button type="button" id="login_button">LOG IN</button></a>
        <span id="signup_now_text">or <u><strong><a href="{{url('register')}}">sign up now</a></strong></u>, its free</span>
    </div>
    <div class="child_crawling"></div>
</body>
</html>