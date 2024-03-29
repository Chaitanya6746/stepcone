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
            background: url("image/gokart.png") no-repeat;
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
            <p>GO-KART</p>
        </div>
        <div class="col-2"></div>
    </div>
    <div class="container">
        <div class="chevron"></div>
        <div class="chevron"></div>
        <div class="chevron"></div>
    </div>
    <div class="row event" data-aos="fade-right">
        <h3>GO-KART</h3>
    </div>
    <div class="row">
        <div class="col-lg-7 col-md-12 col-sm-12 content" data-aos="fade-right">
            <p ALIGN="JUSTIFY">
                The purpose of this event is bringing out the world level innovative and creative ideas of all young participants.Under graduate/Graduate students from different technical streams can participate in this event.The basic outline of the event consists of designing and  fabricating a go-kart and then competing with these go-karts in the final event.All the participating teams will have no bars for creativity and innovation with a few restrictions mentioned in the Rule Book . The real essence of the event lies in the sheer engineering pratical application and tests in real time.
<!-- Eligibility:
1.Team Requirement:
     Team must have Team Name,Team Logo,Team Captain and faculty advisor.Maximum 5 teams can participate from one college.Maximum allowed participants for a team is 15.
2.Driver’s Requirement:
*Age- atleast 18 years
*Driver’s License must be needed (four-wheeler)
*Driver’s Accessories: Suit , Under clothing , Helmet , Neck      Support,Gloves,Scoks & Shoes,Balaclava
3.Vehicle Requirement:
*Vehicle should  be made based on the rules provided in the Rule Book.
*Technical inspection & Design Report
4.Rounds to be conducted for Testing
*Brake Test-100 points 
*Autocross test-100 points
*Traction test-100 points
*Business test (Business presentation & Innovation)
*Race-300 points
*Skip pad-100 points
Tests Information:
1)Technical Inspection & Design Report:-
   Objective of  Technical Inspection is to ensure safety and security of the driver with the vehicle .Vehicle technical aspects will be crosschecked with Rule Book.
     Objective of Design Report is to verify design and manufacturing of vehicle along with technical knowledge of team as per specifications in their submitted report.
2)Brake Test:-
   Vehicle should run for 35m and will have to stop in specified range, end of 35mm flat run, vehicle speed must be atleast 25 kmph. Each vehicle has three chances.
3)Skip pad Layout:-
    There will be two pairs of concentric circles in a figure of eight pattern,the centres of these circles will be 20m apart.A lap is defined as travelling around one of the circle from the start/stop line and returning to the start/stop line.
4)Autocross Test:-
   Objective is to evaluate the vehicles maneuvarilibility and handling qualities on a tight course without the hindrance of competing vehicles.The vehicle will be staged such that front wheels are 2m behind the starting line .The timer starts only after the vehicle crosses the start line.Cones are placed apart from each other the vehicle should travel between this cones.
5)Traction Test:-
    Its like a Thug of War between two karts.Its objective is to test the strength and pickup gives by one kart.
5.Awards and Rewards:
    All the praticipants who participated in this event will be allocated with a participation certificates. By considering all the points that are conducted in the tests,winners will be awarded 1,00,000/- cash prize and runners will also be are awarded with 50,000/- cash prize.As our motto objective is to bringout new innoviative ideas from fellow young engineers. The best team with a new great innovative ideas about go-kart is also been awarded. -->
            </p>
            <div class="buttons" data-aos="fade-up">
                <a href="../eventRegistration.php?event=336"><button>register</button></a>
                <a href="gokart.pdf"><button>download pdf</button></a>
            </div>
        </div>
        <div class="col-lg-5 col-md-12 col-sm-12 tools">
            <div class="box" data-aos="fade-right" data-aos-duration="1000">
                <div class="text">prize money:<br>winner-Rs 1,00,000/-<br>runner-Rs 50,000/-</div>
            </div>
            <div class="box" data-aos="fade-right" data-aos-duration="1000">
                <div class="text">team size:<br>max 15 members</div>
            </div>
            <div class="box" data-aos="fade-right" data-aos-duration="1000">
                <div class="text">registration fee:<br>Rs 12,000/-</div>
            </div>
        </div>
        
        <div class="row person">
        <div class="co">FACULTY COORDINATORS</div>
            <div class="col-lg-3 col-md-6 col-sm-4 profile" data-aos="zoom-in">
                <img src="image/men.png" alt="">Dr.A L Naidu<br>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-4 profile" data-aos="zoom-in">
                <img src="image/men.png" alt="">Dr A Vijin prabhuh<br>
            </div>
        </div>
        
        <div class="row person">
        <div class="co">COORDINATORS</div>
            <div class="col-lg-3 col-md-6 col-sm-4 profile" data-aos="zoom-in">
                <img src="image/TEAM/ashish.jpg" alt="">P.sai ashish<br><a href="tel:8688557523">8688557523</a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-4 profile" data-aos="zoom-in">
                <img src="image/TEAM/gokart- Allu Lohith kumar.jpeg" alt="">A.Lohith<br><a href="tel:6309882481">6309882481</a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-4 profile" data-aos="zoom-in">
                <img src="image/TEAM/gokart-Dasari  Bharath.jpg" alt="">D.Bharath<br><a href="tel:70139946564">70139946564</a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-4 profile" data-aos="zoom-in">
                <img src="image/TEAM/gokart-gedala poorna chandra naidu.jpg" alt="">G.Poorna Chandra Naidu<br><a href="tel:7702047537">7702047537</a>
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