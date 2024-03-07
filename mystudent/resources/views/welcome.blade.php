<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-xxx" crossorigin="anonymous" />

</head>
<style>
    body {
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        font-family: 'mitr', sans-serif;
        background: linear-gradient(to bottom, #69AFC5, #F7B345, #00648A);
    }

    .text-center {
        text-align: center;
    }

    h1 {
        font-size: 48px;
        font-weight: bold;
        background: linear-gradient(to right, #69AFC5, #00648A, #00648A);
        -webkit-background-clip: text;
        color: transparent;
        -webkit-text-stroke: 1px white;
        /* Set the stroke width and color */
    }




    .main {
        width: 550px;
        height: 450px;
        background: red;
        overflow: hidden;
        background: url("https://doc-08-2c-docs.googleusercontent.com/docs/securesc/68c90smiglihng9534mvqmq1946dmis5/fo0picsp1nhiucmc0l25s29respgpr4j/1631524275000/03522360960922298374/03522360960922298374/1Sx0jhdpEpnNIydS4rnN4kHSJtU1EyWka?e=view&authuser=0&nonce=gcrocepgbb17m&user=03522360960922298374&hash=tfhgbs86ka6divo3llbvp93mg4csvb38") no-repeat center/cover;
        border-radius: 10px;
        box-shadow: 5px 20px 50px #000;
    }

    #chk {
        display: none;
    }

    .signup,
    .login {
        position: relative;
        width: 100%;
        height: 100%;
        text-align: center;
    }

    label {
        color: #fff;
        font-size: 2.3em;
        display: block;
        margin: 30px;
        font-weight: bold;
        cursor: pointer;
        transition: .5s ease-in-out;
    }

    input {
        width: 60%;
        margin: 10px auto;
        padding: 10px;
        border: none;
        outline: none;
        border-radius: 5px;
    }

    button {
        width: 60%;
        height: 10px;
        margin: 30px auto;
        color: #fff;
        background: #00648A;
        font-size: 1em;
        font-weight: bold;
        outline: none;
        border: none;
        border-radius: 5px;
        transition: .2s ease-in;
        cursor: pointer;
    }

    button:hover {

        color: #00648A;
    }

    .signup input {
        width: 50%;
        margin: 10px auto;
        padding: 10px;
        border: none;
        outline: none;
        border-radius: 5px;
    }

    .login {
        height: 560px;
        background: #eee;
        border-radius: 60% / 10%;
        transform: translateY(-180px);
        transition: .8s ease-in-out;

        font-size: 1.2em;
        color: #573b8a;
        font-weight: bold;
        margin-top: 80px;
        margin-bottom: 50px;
    }

    .login label {
        font-size: 2.5em;
        color: #00648A;
        transform: scale(.6);
        margin: 10px;
    }

    #chk:checked~.login {
        transform: translateY(-500px);
    }

    #chk:checked~.login label {
        transform: scale(1);
    }

    #chk:checked~.signup label {
        transform: scale(.6);
    }

    .wrap {
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .button {
        width: 440px;
        height: 65px;
        font-family: 'Roboto', sans-serif;
        font-size: 20px;
        text-transform: uppercase;
        letter-spacing: 2.5px;
        font-weight: 500;
        color: #000;
        background-color: #fff;
        border: none;
        border-radius: 45px;
        box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease 0s;
        cursor: pointer;
        outline: none;
        display: flex;
        align-items: center;
        justify-content: center;
        text-decoration: none;
    }



    .button:hover {
        background-color: #00648A;
        box-shadow: 0px 15px 20px #69AFC5;
        color: #fff;
        transform: translateY(-7px);
    }

    .welcome-image {
        width: 200px;
        height: auto;
       

    }
</style>


<body class="antialiased">

    <div class="container-fluid text-center">
        <img class="welcome-image" src="{{ url('images/logo.png') }}" alt="Welcome Image">
        <h1>วิทยาการคำนวณม.3</h1>
        <div class="position-absolute top-50 start-50 translate-middle p-6 z-10">
    @if (Route::has('login'))
    @auth
    <a href="{{ route('dashboard') }}" class="btn btn-outline-secondary">Dashboard</a>
    @else
    <div class="wrap">
        <a class="button" href="{{ route('login') }}"> Log in</a>
    </div>
    <br>
    @if (Route::has('register'))
    <div class="wrap">
        <a class="button" href="{{ route('register') }}">Register</a>
    </div>
    @endif
    @endauth
    @endif
</div>


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-eJfWVRnJw5Yc5VvDp1Sdoo5u/Zz+q8YsQqXq1P7T+5U8f63q93stqps4xqMlT" crossorigin="anonymous"></script>
</body>

</html>