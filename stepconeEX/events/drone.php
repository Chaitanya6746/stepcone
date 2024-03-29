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
            background: url("image/drone.png") no-repeat;
            background-size:cover;
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
    <title>Drone voyage</title>
</head>

<body>
    <?php
    include './header.php'
    ?>
    <div class="row event-title">
        <div class="col-2"></div>
        <div class="col-8 t" data-aos="zoom-out" data-aos-duration="2000">
            <p> DRONE VOYAGE</p>
        </div>
        <div class="col-2"></div>
    </div>
    <div class="container">
        <div class="chevron"></div>
        <div class="chevron"></div>
        <div class="chevron"></div>
    </div>
    <div class="fluid-container">
    <div class="row event" data-aos="fade-right">
        <h3> DRONE VOYAGE</h3>
    </div>
    <div class="row">
        <div class="col-lg-7 col-md-12 col-sm-12 content" data-aos="fade-right">
            <p align="justify">
                OBJECTIVE – 
                This event focuses to test the designing and driving skills of the candidate.<br>
                The event aims in bringing out the problem solving and task implementation skills.<br>
                It improves the Challenging and competitive spirit of the contestants.<br>
                Team size should be 3-5 members.<br>
                Registration fee is 2000/- per team.
                
                <!-- ROUND-1
                1.The Drone has to pass through the various hurdles of variant shapes.
                2.The obstacles can be rings, cubes, spirals, triangles etc.,
                3.The drone has to be driven in a specified path through the obstacles. 
                4.The drone can be accompanied with its Co-pilot.
                5.The team will earn points based on the passing of obstacles.
                6.Based on the secured points and lap time, top 12 drones will be shortlisted for the second round.
                
                
                
                
                
                      JUDGING CRITERIA:
                Total points: 100
                1.If the drone crosses the circular hurdles, it gains 10 points.
                2.If the drone crosses low altitude square hurdle, it gains 10 points.
                3.If the drone crosses high altitude square hurdle, it gains 10 points.
                4.If the drone crosses hexagon hurdle, it gains 15 points.
                5.If the drone crosses high altitude rectangular hurdle, it gains 10 points.
                6.If the drone crosses low altitude rectangular hurdle, it gains 10 points.
                7.If the drone clears the high-altitude irregular shape, it will be awarded with 15 points.
                8.If the drone clears the low irregular shape it will be awarded with 20 points.
                9.If the drone falls back then it has to come to its last checkpoint.
                     PENALITY: 
                1.If the drone touches any of the hurdles or crosses the boundary, penalty of 2 points will be deducted.
                2.If human interference occurs 1 point will be deducted.
                
                ROUND- 2 
                1.The team should complete the lap by navigating through the hurdles.
                2.The pilot has to be confined to one place; the drone can be accompanied with his team member.
                3.It has to carry the given payload box from starting point to the ending point through various hurdles.
                4.Based on the secured points and lap time, top 6 drones will be shortlisted for the third round.
                JUDGING CRITERIA:
                Total Points: 10 points
                1.If the drone crosses the hurdle with the payload box, then it will be awarded with 5 points.
                2.There will be a total 2 boxes. If the drone completes all the hurdles with these boxes, then it will be awarded with10 points. 
                3.If the drone falls back then it has to come to its last checkpoint.
                PENALITY:
                1)For human interference, the drone will be given minus 2 points.
                2)If the drone touches any of the hurdles, the it will be given minus 2 points.
                BONUS ROUND:
                1.The pilot needs to draw the given shape with his drone.
                2.For each shape, the team can earn bonus points.
                3.No eliminations.
                
                
                        JUDGING CRITERIA:
                Total: 50 points
                1.For circle shape the 15 points will be added.
                2.For Square shape the 10 points will be added.
                3.For Rectangular shape the 10 points will be added.
                4.For Triangle shape the 15 points will be added.
                
                ROUND- 3 
                   
                1.This round comprises of various obstacles which the Drone has to clear.
                2.The pilot should operate the drone from the specifies place and co-pilot can accompany the drone.
                3.The team should complete the lap by navigating through the hurdles.
                4.Negative points will be awarded if the drone strikes the hurdles.
                5.This round consists of hurdles which were arranged in alphabetical fashion.
                
                        JUDGING CRITERIA:
                1.Each ring crossed by the drone will get 5 points.
                2.If the drone falls back then it has to come to its last checkpoint. 
                 PENALITY:
                1.For human interference, the drone will be given minus 2 points.
                2.For touching any obstacle 1 point will be deduced.            </p> -->
            <div class="buttons" data-aos="fade-up">
                <a href="../eventRegistration.php?event=335"><button>register</button></a>
                <a href="#"><button>download pdf</button></a>
            </div>
        </div>
        <div class="col-lg-5 col-md-12 col-sm-12 tools">
            <div class="box" data-aos="fade-right" data-aos-duration="1000">
                <div class="text">prize money:<br>winner-Rs 20,000/-<br>runner-Rs 12,000/-</div>
            </div>
            <div class="box" data-aos="fade-right" data-aos-duration="1000">
                <div class="text">team size:<br>3-5 members</div>
            </div>
            <div class="box" data-aos="fade-right" data-aos-duration="1000">
                <div class="text">registration fee:<br>Rs 2000/-</div>
            </div>
        </div>
        
        <div class="row person">
        <div class="co">FACULTY COORDINATORS</div>
            <div class="col-lg-3 col-md-6 col-sm-4 profile" data-aos="zoom-in">
                <img src="image/men.png" alt="">Dr. K. Karthik<br>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-4 profile" data-aos="zoom-in">
                <img src="image/men.png" alt="">Dr. P. Upendra Kumar<br>
            </div>
        </div>
        
        <div class="row person">
        <div class="co">COORDINATORS</div>
            <div class="col-lg-3 col-md-6 col-sm-4 profile" data-aos="zoom-in">
                <img src="image/TEAM/Drone voyage-- D. Nagasai krishan.jpg" alt="">D. Nagasai Krishna<br><a href="tel:9949981469">9949981469</a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-4 profile" data-aos="zoom-in">
                <img src="image/TEAM/Drone voyage-- k. Manoju .jpg" alt="">K. Manoju<br><a href="tel:63037802340">6303780234</a>
            </div>
        </div>
    </div>
    <br><br>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>