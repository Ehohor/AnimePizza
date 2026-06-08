<!DOCTYPE html>
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
                    <li><a href="#contact-us">Contact Us</a></li>
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
                                            a Peperoni!1
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
                                        <h6>NOW YOU CAN FEEL TASTE</h6>
                                        <h1>
                                            Have a nice day with
                                            <br>
                                            a Peperoni!2
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
                                        <h6>NOW YOU CAN FEEL TASTE</h6>
                                        <h1>
                                            Have a nice day with
                                            <br>
                                            a Peperoni!3
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
<section id="about">
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
</section>

<script src="libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="scripts/main.js"></script>
</body>
</html>