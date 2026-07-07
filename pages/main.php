<?php
$content = convertContentToAssoc(db_select(
    from:"content",
    conditions: "name IN('banner','about', 'pizza')"
));
require_once PARTS_DIR . '/banner.php';
require_once PARTS_DIR . '/about.php';

$products = db_select(
    from:"products",
    columns: "id, title, price, quantity, description",
    conditions: "is_option is FALSE AND quantity > 0",
    order: "price"
);

require_once PARTS_DIR . '/header.php';
require_once PARTS_DIR . '/nav.php';
require_once PARTS_DIR . '/pizza.php';
require_once PARTS_DIR . '/gallery.php';
require_once PARTS_DIR . '/review.php';
require_once PARTS_DIR . '/blog.php';
require_once PARTS_DIR . '/footer.php';
?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" 
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AnimePizza</title>
    <link rel="stylesheet" href="libs/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="styles/main.css">
</head>
<body>
<header id="header">
    <div class="container">
        <div class="row d-flex align-items-center justify-content-between">
            <div id="logo">
                <a href="index.html">
                    <img src="images/logo.png" alt="Logo"/>
                </a>
            </div>
            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class="menu-active"><a href="#banner">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#pizza">Pizza</a></li>
                    <li><a href="#review">Review</a></li>
                    <li><a href="#blog">Blog</a></li>
                    <li><a href="#contactus">Contact Us</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>
<section id="banner">
    <div class="container">
        <div class="row banner-row d-flex align-items-center justify-content-start">
                <div id="carouselExampleIndicators" class="carousel slide">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-7 banner-slide-container">
                                        <h6>NOW YOU CAN FEEL TASTE</h6>
                                        <h1>
                                            Have a nice day with
                                            <br>
                                            a Pepperoni!
                                        </h1>
                                        <a href="#" class="btn btn-outline-primary text-uppercase">Order now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-7 banner-slide-container">
                                        <h6>HOW YOU CAN FEEL TASTE OF SUMMER?</h6>
                                        <h1>
                                            Choose 
                                            <br>
                                            a Hawaiian!
                                        </h1>
                                        <a href="#" class="btn btn-outline-primary text-uppercase">Order now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-7 banner-slide-container">
                                        <h6>TASTE THE CLASSIC</h6>
                                        <h1>
                                            Start you day with
                                            <br>
                                            a Margherita!
                                        </h1>
                                        <a href="#" class="btn btn-outline-primary text-uppercase">Order now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
    </div>
</section>
<section id="about" class="section-gap">
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-md-6 video d-flex align-items-center justify-content-center">
                <div class="overlay"></div>
                <a href="#" class="play-btn">
                    <img src="images/play-icon.png" class="img-fluid" />
                </a>
            </div>
            <div class="col-md-6 p-5">
                <h6>See how we make magic</h6>
                <h1>We bake our pizzas <br>
                Live for you</h1>
                <p><span>From fresh dough to hot oven - watch the real process of making your favorite pizza in our kitchen!</span></p>
                <img src="images/signature.png" alt="img-fluid">
            </div>
        </div>
    </div>
</section> -->

<!-- <section id="pizza" class="section-gap">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class=".pizza-content pb-60 col-lg-10">
                <div class="title text-center">
                    <h1 class="mb-10">What kind of Pizza we serve for you</h1>
                    <p>Choose your favorite</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="pizza-item">
                    <div class="title justify-content-between d-flex">
                        <h4>Pepperoni</h4>
                        <p class="price float-right">
                            $5
                        </p>
                    </div>
                    <p>
                        Classic loaded with spicy pepperoni slices.
                    </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="pizza-item">
                    <div class="title justify-content-between d-flex">
                        <h4>Margherita</h4>
                        <p class="price float-right">
                            $3
                        </p>
                    </div>
                    <p>
                        Classic tomato souce, mozzarella & basill.
                    </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="pizza-item">
                    <div class="title justify-content-between d-flex">
                        <h4>Hawaiian</h4>
                        <p class="price float-right">
                            $4
                        </p>
                    </div>
                    <p>
                        Tomato sauce, mozzarella, ham, pineapple.
                    </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="pizza-item">
                    <div class="title justify-content-between d-flex">
                        <h4>Pepperoni</h4>
                        <p class="price float-right">
                            $5
                        </p>
                    </div>
                    <p>
                        Classic loaded with spicy pepperoni slices.
                    </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="pizza-item">
                    <div class="title justify-content-between d-flex">
                        <h4>Margherita</h4>
                        <p class="price float-right">
                            $3
                        </p>
                    </div>
                    <p>
                        Classic tomato souce, mozzarella & basill.
                    </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="pizza-item">
                    <div class="title justify-content-between d-flex">
                        <h4>Hawaiian</h4>
                        <p class="price float-right">
                            $4
                        </p>
                    </div>
                    <p>
                        Tomato sauce, mozzarella, ham, pineapple.
                    </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="pizza-item">
                    <div class="title justify-content-between d-flex">
                        <h4>Pepperoni</h4>
                        <p class="price float-right">
                            $5
                        </p>
                    </div>
                    <p>
                        Classic loaded with spicy pepperoni slices.
                    </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="pizza-item">
                    <div class="title justify-content-between d-flex">
                        <h4>Margherita</h4>
                        <p class="price float-right">
                            $3
                        </p>
                    </div>
                    <p>
                        Classic tomato souce, mozzarella & basill.
                    </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="pizza-item">
                    <div class="title justify-content-between d-flex">
                        <h4>Hawaiian</h4>
                        <p class="price float-right">
                            $4
                        </p>
                    </div>
                    <p>
                        Tomato sauce, mozzarella, ham, pineapple.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="gallery" class="section-gap">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class=".pizza-content pb-60 col-lg-10">
                <div class="title text-center">
                    <h1 class="mb-10">Our pizza moments</h1>
                    <p>Follow us on Instagram @animepizza</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <img src="images/kind_pizza/g1.png" class="img-fluid" />
                <img src="images/kind_pizza/g2.png" class="img-fluid" />
            </div>
            <div class="col-lg-8">
                <img src="images/kind_pizza/g3.png" class="img-fluid" />
                <div class="row">
                    <div class="col-lg-6">
                        <img src="images/kind_pizza/g4.png" class="img-fluid" />
                    </div>
                    <div class="col-lg-6">
                        <img src="images/kind_pizza/g5.png" class="img-fluid" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->

<!-- <section id="review" class="section-gap">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class=".pizza-content pb-60 col-lg-10">
                <div class="title text-center">
                    <h1 class="mb-10">What kind of Pizza we serve for you</h1>
                    <p>Choose your favorite</p>
                </div>
            </div>
        </div>
       <div class="row d-flex align-items-center justify-content-center">
            <div class="col-md-6 p-5">
                <h6>See how we make magic</h6>
                <h1>We bake our pizzas <br>
                Live for you</h1>
                <p><span>From fresh dough to hot oven - watch the real process of making your favorite pizza in our kitchen!</span></p>
                <img src="images/signature.png" alt="img-fluid">
            </div>
            <div class="col-md-6 p-5">
                <h6>See how we make magic</h6>
                <h1>We bake our pizzas <br>
                Live for you</h1>
                <p><span>From fresh dough to hot oven - watch the real process of making your favorite pizza in our kitchen!</span></p>
                <img src="images/signature.png" alt="img-fluid">
            </div>
        </div>
    </div>
</section>

<section id="blog" class="section-gap">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class=".pizza-content pb-60 col-lg-10">
                <div class="title text-center">
                    <h1 class="mb-10">What kind of Pizza we serve for you</h1>
                    <p>We bake our pizzas with love and only the freshest ingridients!</p>
                </div>
            </div>
        </div>
       <div class="row d-flex align-items-center justify-content-center">
            <div class="col-md-6 p-5">
                <img src="images/blog1.png" alt="cat">
                <h2 class="desc">Why our pizzas are simply the best</h2>
                <p><span>From fresh dough to hot oven - watch the real process of making your favorite pizza in our kitchen!</span></p>
                <div class="date">1st, June, 2026</div>
            </div>
            <div class="col-md-6 p-5">
                <img src="images/blog2.png" alt="cat">
                <h2 class="desc">Hot, cheesy, and made just for you</h2>
                <p><span>From fresh dough to hot oven - watch the real process of making your favorite pizza in our kitchen!</span></p>
                <div class="date">1st, August, 2026</div>
            </div>
        </div>
    </div>
</section> -->
<!-- 
<footer id="contactus" class="footer">
    <div class="footer-overlay">
        <div class="container footer-content">

            <div class="footer-column">
                <h3>About Us</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore dolore magna aliqua.
                </p>

                <p class="copyright">
                    Copyright © 2026 All rights reserved | Anime Pizza
                </p>
            </div>

            <div class="footer-column">
                <h3>Newsletter</h3>
                <p>Stay updated with our latest news</p>

                <form class="newsletter-form">
                    <input type="email" placeholder="Enter Email">
                    <button type="submit">➜</button>
                </form>
            </div>

            <div class="footer-column">
                <h3>Follow Us</h3>
                <p>Let us be social</p>

                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-x-twitter"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>

        </div>
    </div>
</footer>

<script src="libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="scripts/main.js"></script>
</body>
</html> -->