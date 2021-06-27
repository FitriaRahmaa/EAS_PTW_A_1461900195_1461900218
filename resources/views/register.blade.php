<!DOCTYPE html>
<html>

<style>
    body {
    background:url('../img/Screenshot-2019-12-13-at-16.37.42.png');
    background-repeat: no-repeat;
    padding-bottom: 100px;
    margin:0px;
    font-family: 'Ubuntu', sans-serif;
    background-size: 100% 100%;
  }
</style>
<head>
    <title>login</title>
</head>

<body>
    <link href='https://fonts.googleapis.com/css?family=Ubuntu:500' rel='stylesheet' type='text/css'>
    <link href='{{asset('css/login_css.css')}}' rel='stylesheet' type='text/css'>

    <div class="register">
        <div class="login-header">
            <h1>Register</h1>
        </div>
        <div class="register-form">
            <form action="/register/add" method="post">
                @csrf
                <h3>Nama :</h3>
                <input name="nama" type="text" placeholder="nama" /><br>
                <h3>Email :</h3>
                <input name="email" type="text" placeholder="Email..." /><br>
                <h3>Password:</h3>
                <input name="password" type="password" placeholder="Password" />
                <h3>Alamat :</h3>
                <input name="alamat" type="text" placeholder="Alamat" /><br>
                <h3>No Telp :</h3>
                <input name="no_telp" type="text" placeholder="No Telp" /><br>
                <br>
                <input type="submit" value="Register" class="login-button" />
                <br>
                <a href="/" class="sign-up">Sign In!</a>
                <br>
            </form>
        </div>
    </div>

</body>

</html>