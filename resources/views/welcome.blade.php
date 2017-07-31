<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="/semantic/dist/semantic.min.css">
        <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
        <script src="/semantic/dist/semantic.js"></script>

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            body{
                animation: trans_bg 2s ease-in-out 1;
                background-color: black;
            }
            @keyframes trans_bg {
              0% {background-color: white;}
              5% {background-color: red;}
              10% {background-color: orange;}
              15% {background-color: yellow;}
              20% {background-color: green;}
              25% {background-color: blue;}
              30% {background-color: violet;}
              35% {background-color: purple;}
              100% {background-color: black;}
            } 

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .subheader{
                font-size: 16px;
                margin-top: 70px;
                position:absolute;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Visual Pro
                </div>
            </div>
            <div class="subheader">Press spacebar to continue</div>
        </div>
    </body>
    <script>
        $(document).on('keypress', function(pressed){
            keypressed = pressed.keyCode ? pressed.keyCode : pressed.which;
            if(keypressed == 32)window.location = '/office';
        });
        setInterval(function(){
            $('.subheader').toggle();
        },600);
    </script>
</html>
