<?php?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>


    <link rel="stylesheet" href="assets/css/styles.css">
    <script src="js/jQuery.js"></script>

    <title>Riya's Bakery</title>
</head>

<body>

    <!------------scrool top----------->
    <a href="#" class="scrolltop" id="scroll-top">
        <i class='bx bx-chevron-up scrolltop__icon'></i>
    </a>

    <!---------------header----------------->
    <header class="l-header" id="header">
        <nav class="nav bd-container">
            <a href="#" class="nav__logo">Riya's Bakery</a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item"><a href="index.html" class="nav__link active-link">Home</a></li>
                    <li class="nav__item"><a href="about.html" class="nav__link">About</a></li>

                    <li class="nav__item"><a href="menu.html" class="nav__link">Menu</a></li>
                    <li class="nav__item"><a href="contact.html" class="nav__link">Contact us</a></li>
                    

                    <li><i class='bx bx-moon change-theme' id="theme-button"></i></li>
                </ul>
            </div>

            <div class="nav__toggle" id="nav-toggle">
                <i class='bx bx-menu'></i>
            </div>
        </nav>
    </header>


    </section>

    <!-----------------about---------------->
    <section class="about section bd-container" id="about">
        <div class="about__container  bd-grid">
            <div class="about__data">
                <span class="section-subtitle about__initial">About us</span>
                <h2 class="section-title about__initial">We cook the best <br> tasty food</h2>
                <p class="about__description">We cook the best food in the entire city, with excellent customer service, the best meals and at the best price, visit us.</p>
                
                 </div>

            <img src="assets/img/2.jpeg" alt="" class="about__img">
        </div>
    </section>






    <!-----------footer--------------->
    <footer class="footer section bd-container">
        <div class="footer__container bd-grid">
            <div class="footer__content">
                <a href="#" class="footer__logo">Riya's Bakery</a>
                <span class="footer__description">Abu Road</span>
                <div>
                    <a href="#" class="footer__social"><i class='bx bxl-facebook'></i></a>
                    <a href="#" class="footer__social"><i class='bx bxl-instagram'></i></a>
                    <a href="#" class="footer__social"><i class='bx bxl-twitter'></i></a>
                </div>
            </div>

            <div class="footer__content">
                <h3 class="footer__title">Services</h3>
                <ul>
                    <li><a href="#" class="footer__link">Delivery</a></li>
                    <li><a href="#" class="footer__link">Pricing</a></li>
                    <li><a href="#" class="footer__link">Fast food</a></li>
                    <li><a href="#" class="footer__link">Reserve your spot</a></li>
                </ul>
            </div>

            <div class="footer__content">
                <h3 class="footer__title">Information</h3>
                <ul>
                    <li><a href="#" class="footer__link">Event</a></li>
                    <li><a href="#" class="footer__link">Contact us</a></li>
                    <li><a href="#" class="footer__link">Privacy policy</a></li>
                    <li><a href="#" class="footer__link">Terms of services</a></li>
                </ul>
            </div>

            <div class="footer__content">
                <h3 class="footer__title">Adress</h3>
                <ul>
                    <li>Abu Road</li>
                    <li>Abu Road</li>
                    <li>123-456-789</li>
                    <li>riyabakery@gmail.com</li>
                </ul>
            </div>
        </div>

        <p class="footer__copy">&#169; Riya's Bakery. All right reserved</p>
    </footer>


    <!--========== MAIN JS ==========-->
    <script src="assets/js/main.js"></script>
</body>

</html>