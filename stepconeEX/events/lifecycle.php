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
            background: url("image/lifecycle.html.png") no-repeat;
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
            line-height:70px;
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
    <title>Life cycle</title>
</head>

<body>
    <?php
    include './header.php';
    ?>
    <div class="row event-title">
        <div class="col-2"></div>
        <div class="col-8 t" data-aos="zoom-out" data-aos-duration="2000">
            <p> LIFE CYCLE ANALYSIS & ASSESSMENT</p>
        </div>
        <div class="col-2"></div>
    </div>
    <div class="container">
        <div class="chevron"></div>
        <div class="chevron"></div>
        <div class="chevron"></div>
    </div>
    <div class="row event" data-aos="fade-right">
        <h3> LIFE CYCLE ANALYSIS & ASSESSMENT</h3>
    </div>
    <div class="row">
        <div class="col-lg-7 col-md-12 col-sm-12 content" data-aos="fade-right" align="justify">
            <p>
                Life cycle Analysis and Assessment (LCA) aims to
                quantify the environmental impacts that arise from material inputs and
                outputs such as energy use or air emissions, over a product’s entire life
                cycle.
                Steps of Product Lifecycle: from cradle to grave
                1.Raw material extraction
                2.Manufacturing &processing
                3.Transportation
                4.Usage and retail
                5.Wastage Disposal.
                
                Instructions: 
                
                The participants should aware of the mechanical components. Then after they will select a mechanical or automotive or electrical product of their choice. They have to analyze previous research papers about the life cycle of the product. Then after they have to prepare a presentation on the review of all the research papers.
                
                Process of Conducting Event:
                
                This is a single round event.
                Here participants have to present their presentations.
                There after faculty will evaluate their presentation.            </p>
            <div class="buttons" data-aos="fade-up">
                <button><a href="../eventRegistration.php?event=346">register</a></button>
                <button><a href="#">download pdf</a></button>
            </div>
        </div>
        <div class="col-lg-5 col-md-12 col-sm-12 tools">
            <div class="box" data-aos="fade-left" data-aos-duration="1000">
                <div class="text">prize money:<br>winner-Rs 6,000/-<br>runner-Rs 3,000/-</div>
            </div>
            <div class="box" data-aos="fade-left" data-aos-duration="1000">
                <div class="text">team size:<br>3-4 members</div>
            </div>
            <div class="box" data-aos="fade-left" data-aos-duration="1000">
                <div class="text">registration fee:<br>Rs 500/-</div>
            </div>
        </div>
        <div class="co">FACULTY COORDINATORS</div>
        <div class="row person">
        <div class="col-lg-3 col-md-6 col-sm-4 profile" data-aos="zoom-in">
                <img src="image/women.png" alt="">Dr.A Avinash<br>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-4 profile" data-aos="zoom-in">
                <img src="image/women.png" alt="">Dr .Ch.Vinod Babu<br>
            </div>
          
        </div>
    </div>


        <div class="co">COORDINATORS</div>
        <div class="row person">
      
            <div class="col-lg-3 col-md-6 col-sm-4 profile" data-aos="zoom-in">
                <img src="image/women.png" alt="">A Chandana<br><a href="tel:9441940488">9441940488</a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-4 profile" data-aos="zoom-in">
                <img src="image/men.png" alt="">B Akash<br><a href="tel:9866083028">9866083028</a>
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