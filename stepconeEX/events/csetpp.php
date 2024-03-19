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
            background: url("image/ppt.jpeg") no-repeat;
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            position: relative;
            z-index: 1;
        }
        .event-title .t p{
            font-size:4rem;
            text-align:center;
            padding-top: 10vw;
            line-height:70px;
            text-transform:uppercase;
            font-weight:500;
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
            <p>CSE PAPER PRESENTATION</p>
        </div>
        <div class="col-2"></div>
    </div>
    <div class="container">
        <div class="chevron"></div>
        <div class="chevron"></div>
        <div class="chevron"></div>
    </div>
    <div class="row event" data-aos="fade-right">
        <h3>TOPICS</h3>
    </div>
    <div class="row">
        <div class="col-lg-7 col-md-12 col-sm-12 content" data-aos="fade-right">
            <p>
                <ol type="1">
                    <li>1.&nbsp;&nbsp;Cyber Security</li>
                        <li>2.&nbsp;&nbsp;Block Chain</li>
                     <li>3.&nbsp;&nbsp;AI & ML – Recent Trends and Applications</li>
                        <li>4.&nbsp;&nbsp;Devops in Software Engineering</li>
                      <li>5.&nbsp;&nbsp;AI in Data Science</li>
                        <li>6.&nbsp;&nbsp;Wireless Sensor Networks</li>
                         <li>7.&nbsp;&nbsp;Metaverse</li>
                        <li>8.&nbsp;&nbsp;I0T-Based Security Mode</li>
                             <li>9.&nbsp;&nbsp;Augmented Reality
                                 <li>10.&nbsp;&nbsp;Autonomic Computing</li>
                              <li>11.&nbsp;&nbsp;Mode Technology</li>
                         <li>12.&nbsp;&nbsp;Holographic Data Storage</li>
                           <li>13.&nbsp;&nbsp;Cloud Computing-Ensuring Data Security</li>
                               <li>14.&nbsp;&nbsp;Neuromorphic Computing</li>
                            <li>15.&nbsp;&nbsp;IDMA – The Future of Wireless Technology</li>

                
               </ol>


            </p>
            <div class="buttons" data-aos="fade-up">
                <a href="../eventRegistration.php?event=331"><button>register</button></a>
                <a href="#"><button>download pdf</button></a>
            </div>
        </div>
        <div class="col-lg-5 col-md-12 col-sm-12 tools">
            <div class="box" data-aos="fade-right" data-aos-duration="1000">
                <div class="text">prize money:<br>winner-Rs 30000/-</div>
            </div>
            <div class="box" data-aos="fade-right" data-aos-duration="1000">
                <div class="text">Teamsize:<br>Individual</div>
            </div>
            <div class="box" data-aos="fade-right" data-aos-duration="1000">
                <div class="text">registration fee:<br>Rs 150/-</div>
            </div>
        </div>
       
        <div class="row person">
        <div class="co">FACULTY COORDINATORS</div>
        <div class="col-lg-3 col-md-6 col-sm-4 profile" data-aos="zoom-in">
                <img src="image/men.png" alt="">Dr. R. K. Dash <br>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-4 profile" data-aos="zoom-in">
                <img src="image/men.png" alt="">Dr. A. Avinash <br>
            </div>
        </div>
      
        <div class="row person">
        <div class="co">COORDINATORS</div>
           <div class="col-lg-3 col-md-6 col-sm-4 profile" data-aos="zoom-in">
               <img src="image/TEAM/bhavya.jpg" alt="">CH. BHAVYA SAI <br><a href="tel:9876543210">8309245622</a>
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