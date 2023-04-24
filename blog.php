<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>S.A.I.T Solution And Trade Concern | Technologies Services | Blog </title>
    <link rel="icon" type="image/x-icon" href="images/logos/saitlogo.jpg">
    <!-- linking external css -->
    <link rel="stylesheet" type="text/css" href="blog.css">



    <?php
    include 'links.php'
    ?>
</head>

<body>
    <?php
    include 'header.php'
    ?>



    <!-- blog started here -->
    <!-- starting feature post -->
    <div class="container text-center" id="features">
        <div class="row">

            <div class="col-md-6 col-sm-12">
                <div class="container" id="cbt">

                    <div class="cardcontainer">
                        <a href="cbt.php">
                            <div class="photo" data-aos="fade-up">
                                <img src="images/cbt.jpg" style="box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;">
                                <div class="photos">Photos</div>
                            </div>
                            <div class="content" data-aos="fade-up">
                                <p class="txt4">Cloud Based Technology</p>
                                <p class="txt5">Why you need a cloud-based channel manager for your hotel?</p>
                            </div>
                        </a>

                    </div>

                    <div class="cardcontainer">
                        <a href="blogcctv.php">
                            <div class="photo" data-aos="fade-up">
                                <img src="images/cctv.png" style="box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;">
                                <div class="photos">Photos</div>
                            </div>
                            <div class="content" data-aos="fade-up">
                                <p class="txt4">CCTV : Usage, Pros and Cons</p>
                                <p class="txt5">Why you need a CCTV?</p>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
            <div class="col-md-6 col-sm-12" style="margin:30px auto;">
                <h5 style="font-weight: bold;" data-aos="fade-up">READ THE MOST RECENT ARTICLES</h5>
                <hr>
                <div class="articles">
                    <a href="cbt.php">
                        <div class="info" data-aos="fade-up">
                            <img src="images/cbt.jpg" class="img-fluid" alt="" style="height:80px;width:80px;">
                            <h6>Why you need a cloud-based channel manager for your hotel?</h6>

                        </div>
                    </a>

                </div>

                <hr>
                <div class="articles">
                    <a href="blogcctv.php">
                        <div class="info" data-aos="fade-up">
                            <img src="images/cctv.png" class="img-fluid" alt="" style="height:80px;width:80px;">
                            <h6>CCTV: Usage, Pros and Cons</h6>

                        </div>
                    </a>

                </div>
                <hr>

                <h5 style="font-weight: bold;" data-aos="fade-up">FILTER ARTICLES BY CATEGORIES</h5>
                <hr>
                <ul style="list-style-type:none;" data-aos="fade-up">
                    <li>Hotel Technology</li>
                    <li>Security</li>
                    <li>CCTV</li>
                </ul>
                <h5 style="font-weight: bold;" data-aos="fade-up">FIND THE TOPICS YOU ARE INTERESTED</h5>
                <hr>
                <ul style="list-style-type:none;" data-aos="fade-up">
                    <li>Channel manager</li>
                    <li>Hotel Booking Engine</li>
                    <li>Link In Bio</li>
                </ul>
            </div>


        </div>
    </div>
    <!-- ending featured post -->




    <!-- blog ends here -->

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

    <!-- happy customers ended -->
    <hr id="line">



    <!-- social media links -->
    <?php
    include "social.php"
    ?>

    <!-- social media links ends here -->




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