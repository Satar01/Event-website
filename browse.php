<?php
include("connect.php"); // this file inclusion will make access to database phpmyadmin for details:
//include("navbar.php"); // this file included will make access to website navigation bar for user when in action:


?>
<!Doctype html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> <!-- for bootstrap style -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <header class="header">

        <a href="index.php" class="logo"><span>Addies</span>Events</a>

        <nav class="navbar">
            <a href="index.php">home</a>
            <a href="browse.php">browse</a>
            <a href="about_us.php">about</a>
            <!--<a href="#price">price</a>-->
            <a href="contactus.php">contact</a>
            <a href="login.php">login</a>
            <a href="signup.php">signup</a>
            <img id="brand-icon" src=" images/moon.png" />
        </nav>

        <!--<div id="menu-bars" class="fas fa-bars"></div>-->

    </header>
    <section class="gallery" id="gallery">

        <h1 class="heading">our <span>gallery</span></h1>

        <div class="box-container">

            <div class="box">
                <img src="images/g-1.jpg" alt="">
                <h3 class="title">photos and events</h3>
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
            </div>

            <div class="box">
                <img src="images/g-2.jpg" alt="">
                <h3 class="title">photos and events</h3>
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
            </div>

            <div class="box">
                <img src="images/g-3.jpg" alt="">
                <h3 class="title">photos and events</h3>
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
            </div>

            <div class="box">
                <img src="images/g-4.jpg" alt="">
                <h3 class="title">photos and events</h3>
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
            </div>

            <div class="box">
                <img src="images/g-5.jpg" alt="">
                <h3 class="title">photos and events</h3>
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
            </div>

            <div class="box">
                <img src="images/g-6.jpg" alt="">
                <h3 class="title">photos and events</h3>
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
            </div>

            <div class="box">
                <img src="images/g-7.jpg" alt="">
                <h3 class="title">photos and events</h3>
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
            </div>

            <div class="box">
                <img src="images/g-8.jpg" alt="">
                <h3 class="title">photos and events</h3>
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
            </div>

            <div class="box">
                <img src="images/g-9.jpg" alt="">
                <h3 class="title">photos and events</h3>
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
            </div>

        </div>

    </section>
    <!-- review section starts  -->

    <section class="reivew" id="review">

        <h1 class="heading">client's <span>review</span></h1>

        <div class="review-slider swiper-container">

            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="images/pic-1.png" alt="">
                        <div class="user-info">
                            <h3>john deo</h3>
                            <span>happy clients</span>
                        </div>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis dolor dicta cum. Eos beatae eligendi, magni numquam nemo sed ut corrupti, ipsam iure nisi unde et assumenda perspiciatis voluptatibus nihil.</p>
                </div>

                <div class="swiper-slide box">
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="images/pic-2.png" alt="">
                        <div class="user-info">
                            <h3>john deo</h3>
                            <span>happy clients</span>
                        </div>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis dolor dicta cum. Eos beatae eligendi, magni numquam nemo sed ut corrupti, ipsam iure nisi unde et assumenda perspiciatis voluptatibus nihil.</p>
                </div>

                <div class="swiper-slide box">
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="images/pic-3.png" alt="">
                        <div class="user-info">
                            <h3>john deo</h3>
                            <span>happy clients</span>
                        </div>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis dolor dicta cum. Eos beatae eligendi, magni numquam nemo sed ut corrupti, ipsam iure nisi unde et assumenda perspiciatis voluptatibus nihil.</p>
                </div>

                <div class="swiper-slide box">
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="images/pic-4.png" alt="">
                        <div class="user-info">
                            <h3>john deo</h3>
                            <span>happy clients</span>
                        </div>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis dolor dicta cum. Eos beatae eligendi, magni numquam nemo sed ut corrupti, ipsam iure nisi unde et assumenda perspiciatis voluptatibus nihil.</p>
                </div>

            </div>

        </div>

    </section>
    <!-- review ended-->
    <?php
    // Let's add some calculations here:
    ?>
    <!-- -->
    <p>In here You will be able to add Events onto the website.</p>
    <section class="footer">

        <div class="box-container">

            <!-- <div class="box">
                <h3>branches</h3>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> mumbai </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> jogeshwari </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> goregaon </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> navi mumbai </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> andheri </a>
            </div>

            <div class="box">
                <h3>quick links</h3>
                <a href="#"> <i class="fas fa-arrow-right"></i> home </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> service </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> about </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> gallery </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> price </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> reivew </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> contact </a>
            </div>-->
            <div class="box">
                <h3>contact info</h3>
                <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
                <a href="A.Priest@wlv.ac.uk"> <i class="fas fa-envelope"></i> A.Priest@wlv.ac.uk</a>

            </div>
            <!--<div class="box">
                <h3>contact info</h3>
                <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
                <a href="#"> <i class="fas fa-phone"></i> +111-222-3333 </a>
                <a href="#"> <i class="fas fa-envelope"></i> shaikhanas@gmail.com </a>
                <a href="#"> <i class="fas fa-envelope"></i> anasshaikh@gmail.com </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> mumbai, india - 400104 </a>
            </div>

            <div class="box">
                <h3>follow us</h3>
                <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
                <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
                <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
                <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
            </div>-->

        </div>

        <!--<div class="credit"> created by <span>JO</span> | all rights reserved </div>-->

    </section>

    <!-- footer section ends -->

    <!-- theme toggler  -->

    <div class="theme-toggler">

        <div class="toggle-btn">
            <i class="fas fa-cog"></i>
        </div>

        <h3>choose color</h3>

        <div class="buttons">
            <div class="theme-btn" style="background: #3867d6;"></div>
            <div class="theme-btn" style="background: #f7b731;"></div>
            <div class="theme-btn" style="background: #ff0033;"></div>
            <div class="theme-btn" style="background: #20bf6b;"></div>
            <div class="theme-btn" style="background: #fa8231;"></div>
            <div class="theme-btn" style="background: #FC427B;"></div>
        </div>

    </div>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>
</body>

</html>