<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="event.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <style>
        .event-title {
            padding-top: 30vh;
            padding-bottom: 30vh;
            background: url("image/squid\ game.png") no-repeat;
            background-size: 100%;
            background-position: center;
            background-attachment: fixed;
            position: relative;
            z-index: 1;
        }
        .event-title .t p{
            font-size:4rem;
            text-align:center;
            padding:20px;
            text-transform:uppercase;
            font-size:600;
            color:#fff;
        }

        .event-title:before {
            content: "";
            position: absolute;
            box-sizing: border-box;
            left: 0;
            top: 0;
            right: 0;
            bottom: 0;
            background-color: black;
            opacity: 0.4;
            z-index: -1;
        }
    </style>
    <script>
        $(window).scroll(function () {
            if ($(this).scrollTop() > 400) {
                $('.chevron').fadeOut(200);
            } else {
                $('.chevron').fadeIn(200);
            }
        });
    </script>
    <title>Squidgame</title>
</head>

<body>

<?php
    include 'header.php';
    ?>
    <div class="header"></div>
    <div class="row event-title">
        <div class="col-2"></div>
        <div class="col-8 t " data-aos="zoom-out" data-aos-duration="2000">
            <p>SQUID GAMES</p>
        </div>
        <div class="col-2"></div>
    </div>
    <div class="container">
        <div class="chevron"></div>
        <div class="chevron"></div>
        <div class="chevron"></div>
    </div>
    <div class="row event" data-aos="fade-right">
        <h3>SQUID GAMES</h3>
    </div>
    <div class="row">
        <div class="col-lg-7 col-md-12 col-sm-12 content" data-aos="fade-right">
            <p>
                “SQUID GAMES”- It was kind of a mini gaming zone. We charged each team(2-members) a fixed entry fee (Rs 200) & every registered team got 1500 virtual bucks in return. Those bucks could spend to play both technical games like card castle, spin and win, mad math's etc., and non-technical games like balloon shooting, dancing chairs, Funtastic etc.,
                Each game will have entry fee like 200 (or) 300 virtual bucks. So, for eg,10 teams of total of 3000 bucks will be collected & we give 2500 bucks to
                the winning team.
                So, participants keep on playing more & more to earn those virtual bucks. Each team can play any game based on their willing.
                At the end of the event session, teams which are having a greater number of bucks will be awarded as winners and runners.
            </p>
            <div class="buttons" data-aos="fade-up">
                <button><a href="../eventRegistration.php?event=357">Register</a></buttuon>
                <button><a href="#">download pdf</a></button>
            </div>
        </div>
        <div class="col-lg-5 col-md-12 col-sm-12 tools">
            <div class="box" data-aos="fade-left" data-aos-duration="1000">
                <div class="text">prize money:<br>winner-Rs 0/-<br>runner-Rs 0/-</div>
            </div>
            <div class="box" data-aos="fade-left" data-aos-duration="1000">
                <div class="text">team size:<br>4 members</div>
            </div>
            <div class="box" data-aos="fade-left" data-aos-duration="1000">
                <div class="text">registration fee:<br>Rs 400/-</div>
            </div>
        </div>
        <div class="co">COORDINATORS</div>
        <div class="row person">
            <div class="col-lg-3 col-md-6 col-sm-4 profile" data-aos="zoom-in">
                <img src="image/men.png" alt="">B. Vinay kowshik<br><a href="tel:9876543210">9876543210</a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-4 profile" data-aos="zoom-in">
                <img src="image/men.png" alt="">B. Vamsi<br><a href="tel:9876543210">9876543210</a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-4 profile" data-aos="zoom-in">
                <img src="image/women.png" alt="">G. Geetha mahalakshmi<br><a href="tel:9876543210">9876543210</a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-4 profile" data-aos="zoom-in">
                <img src="image/women.png" alt="">L.N. Shriya<br><a href="tel:9876543210">9876543210</a>
            </div>
        </div>
    </div>
    <br><br>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>