<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>S.A.I.T Solution And Trade Concern | Technologies Services | Web & DomainDevelopment </title>
    <link rel="icon" type="image/x-icon" href="images/logos/saitlogo.jpg">
    <!-- linking external css -->
    <link rel="stylesheet" type="text/css" href="domain.css">



    <?php
    include 'links.php'
    ?>
</head>

<body>
    <?php
    include 'header.php'
    ?>


    <!-- domain hosting services started -->
    <div class="container" id="tech" >
        <div class="row">
            <div class="col-lg-6 col-sm-12">
                <div class="image" data-aos="zoom-in-up">
                    <img class="img-fluid" src="images/domain.jpg" alt="">
                </div>
            </div>
            <div class="col-lg-6 col-sm-12">
                <div class="text">
                    <h1 data-aos="fade-up">Shared Web Hosting</h1>
                    <p data-aos="fade-up"> Cloud hosting makes applications and websites accessible using cloud resources. Unlike traditional hosting, solutions are not deployed on a single server. Instead, a network of connected virtual and physical cloud servers hosts the application or website, ensuring greater flexibility and scalability. Cloud service providers (and there are many) have also matured their services and service delivery models and are able to deliver service-level agreements (SLAs) with much more certainty and success. Cloud hosting systems have evolved to provide simplified and centralized IT services and management capabilities.</p>
                </div>
            </div>

        </div>
    </div>
    <!-- domain hosting services ended -->


    <!-- cloud hosting services started -->
    <div class="container" id="cloud">
        <div class="row">
            
            <div class="col-lg-6 col-sm-12">
                <div class="text">
                    <h1 data-aos="fade-up">Cloud Web Hosting</h1>
                    <p data-aos="fade-up">Shared hosting is a type of Web hosting service that allows multiple websites to share a physical Web server and its resources among the hosted websites. Shared hosting logically distributes a Web server to accommodate, serve and operate more than one website. Shared hosting is one of the most common and popular forms of Web hosting service. It is generally provided by Web hosting service providers, which usually have multiple Web servers on-site. Upon signup with the provider, each website’s logical partition/space is created on the Web server, which houses data for that website only. Other websites are also present on the same Web server, simultaneously sharing the storage, computing power, network and other resources. Because it is a shared service, shared hosting is a cheaper alternate to dedicated hosting.</p>
                </div>
            </div>

            <div class="col-lg-6 col-sm-12">
                <div class="image" data-aos="zoom-in-up">
                    <img class="img-fluid" src="images/cloud.jpg" alt="">
                </div>
            </div>

        </div>
    </div>
    <!-- cloud hosting services ended -->




    <!-- happy customers started -->
    <!-- started view all the post button -->
    <div class="container text-center" id="post">

        <h4 style="margin:50px auto 10px auto;" data-aos="fade-up">Always committed to providing excellent IT services</h4>
    </div>
    <!-- end view all the post button -->




    <!-- starting happy clients -->
    <div class="container text-center" id="clients">

        <h1 data-aos="fade-up">Our happy clients</h1>
        <h4 data-aos="fade-up">Nothing makes us happier than satisfied clients. And, we are elated to serve these amazing customers.</h4>
    </div>
    <!-- ending happy clients -->


    <!-- started slick effect for happy clients -->
    <div class="autoplay d-flex" style="margin:40px;flex-wrap:wrap;" data-aos="fade-up">
        <li><img src="images/logos/busybee.jpg"> </li>
        <li><img src="images/logos/choiceinn.png"> </li>
        <li><img src="images/logos/dahlias.jpg"> </li>
        <li><img src="images/logos/dayatra.jpg"> </li>
        <li><img src="images/logos/fishtail.jpg"> </li>
        <li><img src="images/logos/goodday.jpg"> </li>
        <li><img src="images/logos/hotelsahara.png"> </li>
        <li><img src="images/logos/mountainglory.png"> </li>
        <li><img src="images/logos/netis.png"> </li>
        <li><img src="images/logos/prolink.jpeg"> </li>
        <li><img src="images/logos/shang.png"> </li>
        <li><img src="images/logos/stay.png"> </li>
        <li><img src="images/logos/tukiresort.png"> </li>
        <li><img src="images/logos/whitepearl.png"> </li>
        <li><img src="images/logos/witek.jpg"> </li>
        <li><img src="images/logos/seagate.jpg"> </li>
    </div>
    <!-- ended slick effect for happy clients -->


    <hr id="line">

    
    <!-- social media links -->
    <?php
    include "social.php"
    ?>

    <!-- social media links ends here -->


    <!-- happy customers ended -->

    <?php
    include 'footer.php'
    ?>







    <!-- collapsing on clicking outside the navabar -->
    <script>
        $(document).on('click', function(event) {
            var clickOver = $(event.target);
            var navbarCollapse = $('.navbar-collapse');
            var isOpen = navbarCollapse.hasClass('show');
            if (isOpen === true && !clickOver.hasClass('navbar-collapse') && clickOver.parents('.navbar-collapse').length === 0) {
                navbarCollapse.collapse('hide');
            }
        });
    </script>
    <!-- collapsing ends clicking outside the navbar -->



    <!-- slick effect -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js " integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin=" anonymous " referrerpolicy="no-referrer "></script>
    <script type="text/javascript " src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js "></script>



    <script>
        $(document).ready(function() {
            $('.autoplay').slick({
                slidesToShow: 5,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
                responsive: [{
                        breakpoint: 1100,
                        settings: {
                            arrows: false,
                            centerMode: true,
                            centerPadding: '40px',
                            slidesToShow: 4
                        }
                    }, {
                        breakpoint: 991.98,
                        settings: {
                            arrows: false,
                            centerMode: true,
                            centerPadding: '30px',
                            slidesToShow: 3
                        }
                    },

                    {
                        breakpoint: 756,
                        settings: {
                            arrows: false,
                            centerMode: true,
                            centerPadding: '30px',
                            slidesToShow: 2
                        }
                    }, {
                        breakpoint: 576,
                        settings: {
                            arrows: false,
                            centerMode: true,
                            centerPadding: '20px',
                            slidesToShow: 1
                        }
                    },

                    {
                        breakpoint: 480,
                        settings: {
                            arrows: false,
                            centerMode: true,
                            centerPadding: '10px',
                            slidesToShow: 1
                        }
                    }
                ]
            });
        });
    </script>
    <!-- slick effect ends here -->




    <!-- aos effect starts -->
    <script>
        AOS.init();
    </script>
    <!-- aos ends here -->




    <!-- back to top js -->
    <script>
        //Get the button
        let mybutton = document.getElementById("btn-back-to-top");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {
            scrollFunction();
        };

        function scrollFunction() {
            if (
                document.body.scrollTop > 20 ||
                document.documentElement.scrollTop > 20
            ) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }
        // When the user clicks on the button, scroll to the top of the document
        mybutton.addEventListener("click", backToTop);

        function backToTop() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    <!-- back to top ends here -->

    <!-- color of nav-link changes when clicked on nav-link -->

</body>

</html>