


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
            background: url("image/aerothan.png") no-repeat;
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
    <title>Aerothan</title>
</head>

<body>
    <?php
    include './header.php';
    ?>
    <div class="row event-title">
        <div class="col-2"></div>
        <div class="col-8 t" data-aos="zoom-out" data-aos-duration="2000" !important>
            <p>AEROTHON</p>
        </div>
        <div class="col-2"></div>
    </div>
    <div class="container">
        <div class="chevron"></div>
        <div class="chevron"></div>
        <div class="chevron"></div>
    </div>
    <div class="row event" data-aos="fade-right">
        <h3>AEROTHON</h3>
    </div>
    <div class="row">
        <div class="col-lg-7 col-md-12 col-sm-12 content" data-aos="fade-right" align="justify">
            <p>
                Aerothan is an event of building small scale RC planes and make them to fly and do acrobatics. Aerothan is both a joyful and educational event as we can enjoy while  flying the planes as well as we will learn about basic aerodynamics and science behind flying the plane .It is also a knowledge based event as the participants will be coming from all over the country and they will be sharing their knowledge with other participants .The participants have to produce their own RC plane with the given specifications and they will be contested in 3 levels comprising of 6 rounds. The participants will be given participation & appreciation certificates. The team that gets the highest  number of points in the event will be awarded and rewarded accordingly.

            </p>
            <div class="buttons" data-aos="fade-up">
                <a href="../eventRegistration.php?event=345"><button>Register</button></a>
                <a href="#"><button>Download pdf</button></a>
            </div>
        </div>
        <div class="col-lg-5 col-md-12 col-sm-12 tools">
            <div class="box" data-aos="fade-left" data-aos-duration="1000">
                <div class="text">prize money:<br>winner-Rs 35,000/-</div>
            </div>
            <div class="box" data-aos="fade-left" data-aos-duration="1000">
                <div class="text">team size:<br>max 5 members</div>
            </div>
            <div class="box" data-aos="fade-left" data-aos-duration="1000">
                <div class="text">registration fee:<br>Rs 3,500/-</div>
            </div>
        </div>
        <div class="co">FACULTY COORDINATORS</div>
        <div class="row person">
            <div class="col-lg-3 col-md-6 col-sm-4 profile" data-aos="zoom-in">
                <img src="image/men.png" alt="">Dr. G Janardhan<br>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-4 profile" data-aos="zoom-in">
                <img src="image/men.png" alt="">Dr.S K Gupta<br>
            </div>
        </div>
        <div class="co">COORDINATORS</div>
        <div class="row person">
            <div class="col-lg-3 col-md-6 col-sm-4 profile" data-aos="zoom-in">
                <img src="image/men.png" alt="">G.Manideep<br><a href="tel:9876543210">9876543210</a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-4 profile" data-aos="zoom-in">
                <img src="image/men.png" alt="">G.Sri Harsha<br><a href="tel:9876543210">9876543210</a>
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