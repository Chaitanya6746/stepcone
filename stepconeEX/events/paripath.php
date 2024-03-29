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
            background: url("image/paripath.png") no-repeat;
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
    <title>paripath</title>
</head>

<body>
    <?php
    include 'header.php';
    ?>
    <div class="row event-title">
        <div class="col-2"></div>
        <div class="col-8 t" data-aos="zoom-out" data-aos-duration="2000">
            <p>PARI PATH</p>
        </div>
        <div class="col-2"></div>
    </div>
    <div class="container">
        <div class="chevron"></div>
        <div class="chevron"></div>
        <div class="chevron"></div>
    </div>
    <div class="row event" data-aos="fade-right">
        <h3>PARI PATH</h3>
    </div>
    <div class="row">
        <div class="col-lg-7 col-md-12 col-sm-12 content" data-aos="fade-right" align="justify">
            <p>
                “PARIPATH” is basically a tricky circuit design, in which one should have to solve a circuit with some debugs. The event aimed to enhance the student’s knowledge of basic circuits and enable them to showcase their brainstorming ideas for solving electric circuits. The competition will have a set of three levels. Each level deals with basic prior knowledge regarding perfect circuit design, which is the heart of the paripath. The participants who completed the debugging first and accurately within the specified time are going to be declared winners. (Note: No practical components will be provided during the event; instead, the circuit will be designed using the PSPICE software)
    SOP OF PARIPATH:
   As mentioned in the description the competition will have a set of three levels. Each level will be going to have the following stumbling block
 Level-1:
This round will consist of basic questions regarding digital as well as analog electronics. Based on their performance, teams will be shortlisted for the next level.
Level-2:
The shortlisted teams will be provided with slips containing a circuit and the desired answer. The team individuals have to work on it and eventually obtain the desired solution in a systematic and logical way. The team individuals must identify where in the circuit is provided with wrong data. This round will be based on a time slot and participants have to detect the error and show the expected output within time. The teams will be shortlisted for the next level based on their performance in terms of 
Accuracy and speed .
Level-3:
The shortlisted teams will be provided with a problem statement, and the team has to comprehend the problem, and find a feasible solution. Initially team members need to prepare the list of the components on their own, along with the circuit diagram and present it to the jury members. After that the teams will be allowed to pick up the necessary components and implement the circuit and present the output to the jury members preferably in PSpice software.  (note: No practical components will be provided during the event)
</p>
            <div class="buttons" data-aos="fade-up">
                <button><a href="../eventRegistration.php?event=344">register</a></button>
                <button><a href="#">download pdf</a></button>
            </div>
        </div>
        <div class="col-lg-5 col-md-12 col-sm-12 tools">
            <div class="box" data-aos="fade-left" data-aos-duration="1000">
                <div class="text">prize money:<br>winner-Rs 2,500/-<br>runner-Rs 1,500/-</div>
            </div>
            <div class="box" data-aos="fade-left" data-aos-duration="1000">
                <div class="text">team size:<br>2 members</div>
            </div>
            <div class="box" data-aos="fade-left" data-aos-duration="1000">
                <div class="text">registration fee:<br>Rs 300/-</div>
            </div>
        </div>
        <div class="co">FACULTY COORDINATORS</div>
        <div class="row person">
        <div class="col-lg-3 col-md-6 col-sm-4 profile" data-aos="zoom-in">
                <img src="image/men.png" alt="">Dr.J.Siva Kumar<br>
            </div>

          
        </div>
    </div>
        <div class="co">COORDINATORS</div>
        <div class="row person">
        

            <div class="col-lg-3 col-md-6 col-sm-4 profile" data-aos="zoom-in">
                <img src="image/men.png" alt="">G. Sagar<br><a href="tel:9059853279">9059853279</a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-4 profile" data-aos="zoom-in">
                <img src="image/women.png" alt=""> A. Gunasree<br><a href="tel:7660011872">7660011872</a>
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