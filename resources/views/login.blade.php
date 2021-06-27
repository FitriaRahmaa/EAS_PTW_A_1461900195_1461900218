<!DOCTYPE html>
<html>

<head>
    <title>login</title>
</head>
<style>
    body {
        background: url('../img/Screenshot-2019-12-13-at-16.37.42.png');
        background-repeat: no-repeat;
        padding-bottom: 295px;
        margin: 0px;
        font-family: 'Ubuntu', sans-serif;
        background-size: 100% 100%;
    }
</style>

<body>
    <link href='https://fonts.googleapis.com/css?family=Ubuntu:500' rel='stylesheet' type='text/css'>
    <link href='{{asset('css/login_css.css')}}' rel='stylesheet' type='text/css'>

    <div class="login">
        <div class="login-header">
            <h1>Login</h1>
        </div>
        <div class="login-form">
            <form action="login" method="post">
                @csrf
                <h3>Email :</h3>
                <input type="email" name="email" placeholder="Username" /><br>
                <h3>Password:</h3>
                <input type="password" name="password" placeholder="Password" />
                <br>
                <input type="submit" value="Login" class="login-button" />
            </form>
            <br>
            <a href="/register" class="sign-up">Sign Up!</a>
            <br>
        </div>
    </div>

</body>

</html>