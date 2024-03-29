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
            background: url("image/modelun.jpg") no-repeat;
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
    <title>modelun</title>
</head>

<body>
<?php
    include './header.php';
    ?>
    <div class="row event-title">
        <div class="col-2"></div>
        <div class="col-8 t" data-aos="zoom-out" data-aos-duration="2000">
            <p>Model UN</p>
        </div>
        <div class="col-2"></div>
    </div>
    <div class="container">
        <div class="chevron"></div>
        <div class="chevron"></div>
        <div class="chevron"></div>
    </div>
    <div class="row event" data-aos="fade-right">
        <h3>Model UN</h3>
    </div>
    <div class="row">
        <div class="col-lg-7 col-md-12 col-sm-12 content" data-aos="fade-right" align="justify">
            <p>
                Model United Nations is a student driven UN Conference which provides students to enrich their abilities like critical thinking, research, documentation, speaking, understanding, analysing and what not. Model UN was started by Oxford University in the year of 1921, and was still popular worldwide among the students who would love to improve their communication, negotiation skills. Model UN is a collection of activities conducted all across the nation and the world with the objectives of advancing knowledge of UN, teaching participants about global concerns and promoting peace through collaboration and diplomacy.

                Some of the topics discussed during Model UN are:
    •	Specpol (Special Political and Decolonization)
    •	UNHRC (United Nations Human Rights Council)
    •	UNSC (United Nations Security Council)
    •	Some crises related problem statements
    •	Military Cooperatives
    •	Women and Child Development
    •	FGM (Female Genital Mutilation)
    Students must collaborate among themselves and speak regarding the topics and must maintain a healthy debate among their other countries delegates to promote peace and harmony. 
         This is a platform where different ideological students come together form teams and discuss the problems and the current issues which are being faced throughout the world.
    
    
    Outcomes:
        This helps the participant to think out of the context in which he can inculcate much intended needy skills like leadership skills, communication skills, problem solving skills, He/she will be able to communicate in a way that how top bureaucrats and diplomats does, they will be aware and knowing the context that what is actually happening in the globe, The participants will be able to understand the geopolitics that is currently hot-streaming in the world, they will learn that how top diplomats behave and the way the live their life cause the participants must have to act upon during the throughout the Model UN 
            </p>
            <div class="buttons" data-aos="fade-up">
                <button><a href="../eventRegistration.php?event=354">register</a></button>
                <button><a href="#">download pdf</a></button>
            </div>
        </div>
        <div class="col-lg-5 col-md-12 col-sm-12 tools">
            <div class="box" data-aos="fade-left" data-aos-duration="1000">
                <div class="text">prize money:<br>winner- Rs 15,000/-<br>runner-Rs 9,000/-</div>
            </div>
            <div class="box" data-aos="fade-left" data-aos-duration="1000">
                <div class="text">team size:<br>2 members</div>
            </div>
            <div class="box" data-aos="fade-left" data-aos-duration="1000">
                <div class="text">registration fee:<br>Rs 1000/-</div>
            </div>
        </div>

        <div class="co">FACULTY COORDINATORS</div>
        <div class="row person">
        <div class="col-lg-3 col-md-6 col-sm-4 profile" data-aos="zoom-in">
                <img src="image/men.png" alt="">Mrs. Suniti Purbey<br>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-4 profile" data-aos="zoom-in">
                <img src="image/men.png" alt="">Ms. P. Pooja<br>
            </div>
          
    </div>


        <div class="co">COORDINATORS</div>
        <div class="row person">
        
            <div class="col-lg-3 col-md-6 col-sm-4 profile" data-aos="zoom-in">
                <img src="image/men.png" alt="">G. Likash<br><a href="tel:7901035672">7901035672</a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-4 profile" data-aos="zoom-in">
                <img src="image/women.png" alt="">D. Shriya<br><a href="tel:6303630005">6303630005</a>
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
