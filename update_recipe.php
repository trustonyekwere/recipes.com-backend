<?php



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cakes - Recipe.com</title>
    <!-- Fav Icon 👀👇🏾 -->
    <link rel="shortcut icon" href="assets/img/rcon.png" type="image/x-icon">
    <!-- MaterializeCSS 👀👇🏾 -->
    <link rel="stylesheet" href="assets/css/materialize.css">
    <!-- Material Icons 👀👇🏾 -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Josephin Sans Font 👀👇🏾-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Josefin+Slab:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">

    <style>
        * {
        font-family: "Josefin Sans", serif;
        font-optical-sizing: auto;
        font-style: normal;
        }

        .text-justify {
            text-align: justify !important;
        }

        a:hover {
            font-weight: 800 !important;
            transition: ease-in .2s;
        }

        .red-text {
            color: #b71c1c !important;
        }

        .red {
            background-color: #b71c1c !important;
        }

        p {
            font-size: 16pt !important;
        }
        .text-justify {
            text-align: justify !important;
        }

        .material-icons {
            font-size: 200% !important;
        }

        .underline {
            text-decoration: underline white !important;
        }

        .gradient-bg {
        background: linear-gradient(to bottom, #ffffff, #b71c1c);
        }
    </style>
</head>
<body>
    <header id="top">
        <!-- Nav Component 👀👇🏾 -->
        <div class="navbar-fixed">
            <nav class="white z-depth-0">
                <div class="container">
                    <div class="row ">
                        <div class="col s12 m6 l3">
                            <a href="/" class="brand-logo">
                                <!-- Logo for Desktops 👀👇🏾 -->
                                <img src="assets/img/logo.png" alt="" width="150px" class="hide-on-med-and-down">
                                <!-- Slightly Smaller Logo for Tablets & Smartphones 👀👇🏾 -->
                                <img src="assets/img/logo.png" alt="" width="120px" class="hide-on-large-only">
                            </a>
                            <!-- Sidenav Trigger -->
                            <a href="#sidenav" class="sidenav-trigger left">
                                <i class="material-icons red-text text-darken-4">menu</i>
                            </a>
                        </div>
                        <!-- Nav links for Desktops -->
                        <div class="col s12 m6 l9 hide-on-med-and-down">
                            <ul class="right">
                                <li><a href="home.html#about_us" class="red-text text-darken-4 scrollspy">Who We Are</a></li>
                                <li><a href="home.html#catergories" class="red-text text-darken-4 scrollspy">Find a Recipe</a></li>
                                <li><a href="home.html#experts" class="red-text text-darken-4 scrollspy">Meet the Experts</a></li>
                                <li><a href="home.html#cliente" class="red-text text-darken-4 scrollspy">Cliente</a></li>
                                <li><a href="./login.php" target="_blank" class="btn rounded-edges red white-text darken-4 scrollspy">Login</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Sidenav 👀👇🏾 -->
        <ul class="hide-on-large-only sidenav" id="sidenav">
            <li><a href="home.html#about_us" class="red-text text-darken-4 scrollspy">Who We Are</a></li>
            <li><a href="home.html#catergories" class="red-text text-darken-4 scrollspy">Find a Recipe</a></li>
            <li><a href="home.html#experts" class="red-text text-darken-4 scrollspy">Meet the Experts</a></li>
            <li><a href="home.html#cliente" class="red-text text-darken-4 scrollspy">Cliente</a></li>
            <br>
            <li><a href="./login.php" target="_blank" class="btn red darken-4 z-depth-0">Login</a></li>
        </ul>
        <!-- Background image & Welcome Text (Desktops) 👀👇🏾 -->
        <div class="hide-on-med-and-down">
            <div class="slider">
                <ul class="slides">
                    <li>
                        <img src="assets/img/cake-main.jpg">
                    </li>
                </ul>
            </div>
        </div>
        <!-- Background Image & Welcome Text (Tabs & Mobile) 👀👇🏾 -->
        <div class="hide-on-large-only left-align white-text valign-wrapper" style="height: 40vh; background-image: url(assets/img/cake-main.jpg); background-size: cover;"></div>
    </header>
    <main>





    </main>
    <footer class="page-footer section scrollspy gradient-bg" id="footer">
        <section class="section">
            <div class="section container">
                <div class="section row">
                    <div class="col s12 l3">
                        <h6 class="red-text text-darken-4">About</h6>
                        <ul>
                            <li><a class="black-text scrollspy" href="home.html#about_us">Who We Are</a></li>
                            <li><a class="black-text scrollspy" href="home.html#experts">Meet the Chefs</a></li>
                            <li><a class="black-text scrollspy" href="#top">Back to Top</a></li>
                        </ul>
                    </div>
                    <div class="col s12 l3">
                        <h6 class="red-text text-darken-4">Explore</h6>
                        <ul>
                            <li><a class="black-text" href="./cakes.html">Cakes</a></li>
                            <li><a class="black-text" href="./Chicken.html">Chicken</a></li>
                            <li><a class="black-text" href="./soups.html">Soups</a></li>
                        </ul>
                    </div>
                    <div class="col s12 l3">
                        <h6 class="red-text text-darken-4">Legal</h6>
                        <ul>
                            <li><a class="black-text" href="">Privacy Policy</a></li>
                            <li><a class="black-text" href="">Terms & Conditions</a></li>
                            <li><a class="black-text" href="">Disclosure</a></li>
                        </ul>
                    </div>
                    <div class="col s12 l3">
                        <h6 class="red-text text-darken-4">Contact Us</h6>
                        <ul>
                            <li><a class="black-text" target="_blank" href="tel:+2349024364876">+2349024364876</a></li>
                            <li><a class="black-text" target="_blank" href="mailto:coresystechng">customersupport@recipe.com</a></li>
                            <li><a class="black-text" target="_blank" href="https://instagram.com/coresystechng">Instagram</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright transparent">
                <div class="container center-align">
                    <p>&COPY; 2024. Recipe.com. All rights reserved. </p>
                </div>
            </div>
        </section>
    </footer>

    <!-- Scripts Below 👀👇🏾 -->
    <script src="assets/js/jqueryv3.4.1.js"></script>
    <script src="assets/js/materialize.js"></script>
    <script>
        $(document).ready(function(){
            $('.sidenav').sidenav();
            $('.materialboxed').materialbox();
            $('.slider').slider({
                height: 500,
                interval: 5000,
                indicators: false
            });
            $('.scrollspy').scrollSpy();
            $('.tooltipped').tooltip();
        });
    </script>
</body>
</html>

