<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Stepcone 2023</title>
    <!-- Icon -->
    <link rel="shortcut icon" href="../images/favicon_transp.png" type="image/x-icon">
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
          
            background: url("image/webthon.jpg") no-repeat;
            background-size: cover;
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
            font-weight:600;
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
</head>

<body>
<?php
    include './header.php';
    ?>
    <div class="row event-title">
        <div class="col-2"></div>
        <div class="col-8 t" data-aos="zoom-out" data-aos-duration="2000">
            <p>Webathon</p>
        </div>
        <div class="col-2"></div>
    </div>
    <div class="container">
        <div class="chevron"></div>
        <div class="chevron"></div>
        <div class="chevron"></div>
    </div>
    <div class="row event" data-aos="fade-right">
        <h3>Webathon</h3>
    </div>
    <div class="row">
        <div class="col-lg-7 col-md-12 col-sm-12 content" data-aos="fade-right" align="justify">
            <p>
                Web-a-thon is a 12-hour hackathon which is being conducted over night. In these 12 hours the participants should make an effective and attractive full stack web application. This is a team event with a team size of maximum 4 members.
In this hackathon the teams would be given a problem statement on the spot. Thus, the participants have to build the web application according to the given problem statement. It’s the participants’ choice to use whatever technology they wish.
There will be a total of 3 phases of evaluation in which an external judge will be looking after the work that is being done. The judgement will be given by the external judge. The winners will be declared based on the web application that meet the requirements. 
            </p>
            <div class="buttons" data-aos="fade-up">
                <a href="../eventRegistration.php?event=338"><button>register</button></a>
                <a href="#"><button>download pdf</button></a>
            </div>
        </div>
        <div class="col-lg-5 col-md-12 col-sm-12 tools">
            <div class="box" data-aos="fade-right" data-aos-duration="1000">
                <div class="text">prize money:<br>winner- Rs 20,000/-<br>runner-Rs 13,000/-</div>
            </div>
            <div class="box" data-aos="fade-right" data-aos-duration="1000">
                <div class="text">team size:<br>4 members</div>
            </div>
            <div class="box" data-aos="fade-right" data-aos-duration="1000">
                <div class="text">registration fee:<br>Rs 1000/-</div>
            </div>
        </div>
   
        
        <div class="row person">
        <div class="co">FACULTY COORDINATORS</div>
            <div class="col-lg-3 col-md-6 col-sm-4 profile" data-aos="zoom-in">
                <img src="image/women.png" alt="">Dr.V.Vasudha Rani<br>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-4 profile" data-aos="zoom-in">
                <img src="image/men.png" alt="">Mr. A. Ravi Kishore<br>
            </div>
        </div>
        <div class="row person">
        <div class="co">COORDINATORS</div>
            <div class="col-lg-3 col-md-6 col-sm-4 profile" data-aos="zoom-in">
                <img src="image/TEAM/shanmukh_small.jpg" alt="">K.Shanmukheswara rao<br>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-4 profile" data-aos="zoom-in">
                <img src="image/TEAM/CHARAN.jpeg" alt="">K. Charan<br><a href="tel:8247030072">8247030072</a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-4 profile" data-aos="zoom-in">
                <img src="image/TEAM/jyothi .jpeg" alt="">S. Jyothi Lavanya<br><a href="tel:9963914827">9963914827</a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-4 profile" data-aos="zoom-in">
                <img src="image/TEAM/DHRAKSHAYANI.jpg" alt="">K.Dhrakshayani<br><a href="tel:8978863540">8978863540</a>
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
