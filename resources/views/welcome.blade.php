<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>David Lopez</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>

        #container {
            background: black;
        }

        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
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
            position: fixed;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
            color: #f1f1f1;
            width: 100%;
            padding: 20px;
        }


        .title {
            font-size: 84px;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        /* Style the video: 100% width and height to cover the entire window */
        #myVideo {
            position: fixed;
            right: 0;
            bottom: 0;
            min-width: 100%;
            min-height: 100%;
        }

        /* Style the button used to pause/play the video */
        #myBtn {
            width: 200px;
            font-size: 18px;
            padding: 10px;
            border: none;
            background: #000;
            opacity: 65%;
            color: #fff;
            cursor: pointer;
        }

        #myBtn:hover {
            background: #ddd;
            color: black;
        }

        
    </style>
</head>

<body>
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
        <div class="top-right links">
            @auth
            <a href="{{ url('/home') }}">Home</a>
            @else
            <a href="{{ route('login') }}">Login</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}">Register</a>
            @endif
            @endauth
        </div>
        @endif

        <!-- The video
        <video autoplay muted loop id="myVideo">-->
            <!-- echo asset('storage/img/worldvideo-fullhd.mp4');  -->
            <!-- <source src="storage/img/worldvideo-fullhd.mp4" type="video/mp4"> -->
        <!-- </video> -->
        
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
            <img src="storage/img/David_Lopez.png" alt="David Lopez">
                <h1 class="display-4">David Lopez</h1>
                <p class="lead">I am revising my webpage.  Doesn't look good right?!? </p>
                <p class="lead">That's cause I like developing on the fly.  </p>
                <p class="lead"> Come back at the end of the day and let me know what you think about my site. I will finisht at 5 pm today!!!</p>
            </div>
        </div>


        <div class="content">
            <div class="title m-b-md">
                David Lopez
            </div>

            <div class="links">
                <a href="#">About Me</a>
                <a href="#">Portfolio</a>
                <a href="#">Contact Me</a>
                <a href="#">Blog</a>
                <a href="https://www.linkedin.com/in/dlopez079/">LinkedIn</a>
                <a href="https://github.com/dlopez079">GitHub</a>

                <!-- Use a button to pause/play the video with JavaScript -->
                <button id="myBtn" onclick="myFunction()">Pause</button>
            </div>
        </div>
    </div>
</body>

<script>
    // Get the video
    var video = document.getElementById("myVideo");

    // Get the button
    var btn = document.getElementById("myBtn");

    // Pause and play the video, and change the button text
    function myFunction() {
        if (video.paused) {
            video.play();
            btn.innerHTML = "Pause";
        } else {
            video.pause();
            btn.innerHTML = "Play";
        }
    }
</script>

</html>