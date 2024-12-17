<?php

    include ("./connect.php");

    $fetch_query = "SELECT * FROM `recipes_tb` WHERE `recipe_type` = 'chicken' ";

    $send_query = mysqli_query($connect, $fetch_query);

    $recipes = mysqli_fetch_all($send_query, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chicken - Recipe.com</title>
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
    <title>Chicken-Recipe.com</title>

    <style>
    *{
        font-family: "Josefin Sans", serif;
        font-optical-sizing: auto;
        font-style: normal;
        }

        .h-25{
            height: 75vh !important;
            width: 98.7vw;
        }

        .py-1{
            padding: 20px 0;
        }

        .gradient-bg {
        background: linear-gradient(to bottom, #ffffff, #2E7D32);
        }

        p {
        font-size: 14pt !important;
        }

        .green {
            background-color: #2E7D32 !important;
        }

        .green-text {
            color: #2E7D32 !important;
        }

    </style>
</head>
<body>
    <header class="top">
        <!-- Nav Component 👀👇🏾 -->
        <div class="navbar-fixed">
            <nav class="white z-depth-0">
                <div class="container">
                    <div class="row">
                        <div class="col s12 m6 l3">
                            <a href="/" class="brand-logo">
                                <!-- Logo for Desktops 👀👇🏾 -->
                                <img src="assets/img/logo.png" alt="" width="150px" class="hide-on-med-and-down">
                                <!-- Slightly Smaller Logo for Tablets & Smartphones 👀👇🏾 -->
                                <img src="assets/img/logo.png" alt="" width="120px" class="hide-on-large-only">
                            </a>
                            <!-- Sidenav Trigger -->
                            <a href="#sidenav" class="sidenav-trigger left">
                                <i class="material-icons green-text text-darken-4">menu</i>
                            </a>
                        </div>
                        <!-- Nav links for Desktops -->
                        <div class="col s12 m6 l9 hide-on-med-and-down">
                            <ul class="right">
                                <li><a href="home.html#about_us" class="green-text text-darken-4 scrollspy">Who We Are</a></li>
                                <li><a href="home.html#catergories" class="green-text text-darken-4 scrollspy">Find a Recipe</a></li>
                                <li><a href="home.html#experts" class="green-text text-darken-4 scrollspy">Meet the Experts</a></li>
                                <li><a href="home.html#cliente" class="green-text text-darken-4 scrollspy">Cliente</a></li>
                                <li><a href="./login.php" target="_blank" class="btn rounded-edges green white-text darken-4 scrollspy">Login</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Sidenav 👀👇🏾 -->
        <ul class="hide-on-large-only sidenav" id="sidenav">
            <li><a href="home.html#about_us" class="green-text text-darken-4 scrollspy">Who We Are</a></li>
            <li><a href="home.html#catergories" class="green-text text-darken-4 scrollspy">Find a Recipe</a></li>
            <li><a href="home.html#experts" class="green-text text-darken-4 scrollspy">Meet the Experts</a></li>
            <li><a href="home.html#cliente" class="green-text text-darken-4 scrollspy">Cliente</a></li>
            <br>
            <li><a href="./login.php" target="_blank" class="btn green darken-4 z-depth-0">Login</a></li>
        </ul>
        <!-- Background image & Welcome Text (Desktops) 👀👇🏾 -->
        <div class="hide-on-med-and-down">
            <div class="slider">
                <ul class="slides">
                    <li>
                        <img src="./assets/img/chicken-main.jpg">
                    </li>
                </ul>
            </div>
        </div>

        <!-- Background Image & Welcome Text (Tabs & Mobile) 👀👇🏾 -->
        <div class="hide-on-large-only left-align white-text valign-wrapper" style="height: 40vh; background-image: url(assets/img/chicken-main.jpg); background-size: cover;"></div>
    </header>
    <main>
        <section class="section">
            <div class="container">
                <h4 class="green-text darken-4-text py-1">Chicken</h4>
                <p>What's for dinner? We hope it's chicken! Chicken in all its many forms—from breasts to thighs, or grilled to fried—has long been considegreen the dinner winner winner, and rightfully so. Unfortunately, that can mean falling into a dinner rut much too easily for our liking. If you’re like us and just can’t bear to make your (or your family’s) old standbys for the umpteenth time, we’ve got you. Get inspigreen with our list of our 93 best chicken dinner recipes—you’ll be sure to find a new weeknight favorite.</p>
                <p class="">Chicken is a popular, versatile type of poultry that’s enjoyed worldwide in various forms, from roasted and grilled to fried and stewed. It's known for its mild flavor, which makes it adaptable to many cuisines and seasonings. Chicken is rich in protein, essential vitamins (like B6 and niacin), and minerals (such as phosphorus and selenium), making it a nutritious choice. It can be cooked with spices, herbs, or marinades, allowing for endless recipe possibilities. Common dishes include chicken curry, grilled chicken, chicken soup, and chicken salad, each offering a different taste and texture experience.</p>
                <p class="green-text text-darken-4">Here's a few popular chicken recipes from around the world.</p>
            </div>
        </section>
        <section class="section">
            <!-- Category Section 👀👇🏾 -->
            <section class="section">
                <div class="section container">
                    <!-- On Desktops 👀👇🏾 -->               
                    <div class="row hide-on-med-and-down">
                        <?php foreach ($recipes as $recipe) { ?>
            
                            <div class="col s12 m12 l4">
                                
                                <div class="card z-depth-0" style="background-color: #f5f5f5;">

                                    <div class="card-image">
                                        <img src="./assets/img/cake-main.jpg" alt="">
                                    </div>
            
                                    <div class="card-content">
            
                                    <h5 class="green-text" style="font-size: 16px !important;"><?php echo $recipe["recipe_name"] ?></h5>
                                    <p style="font-size: 16px !important;"><?php echo $recipe["description"] ?></p>
            
                                    </div>

                                    <div class="card-action">
                                        <div class="row">
                                            <div class="col l10">
                                                <a href="./view_recipe.php?recipe_id=<?php echo $recipe['recipe_id']; ?>" class="green white-text btn btn-flat">more details</a>
                                            </div>
                                            <div class="col l2">
                                                <a href="./delete_recipe.php?recipe_id=<?php echo $recipe['recipe_id']; ?>"><i class="material-icons green-text tooltipped" data-position="bottom" data-tooltip="Delete" >delete</i></a>
                                            </div>
                                        </div>
                                    </div>
            
                                </div>

                                
                            </div>
            
                        <?php } ?>
                    </div>
                </div><br>

                    <div style="text-align: center;">
                        <a href="https://en.wikipedia.org/wiki/List_of_cakes" target="_blank" style="font-size: 12px; background-color: #2E7D32;" class="btn btn-large hide-on-med-and-down z-depth-0">VIEW ALL CHICKEN</a>
                    </div>
                    <!-- On Mobiles 👀👇🏾 -->

                <div class="hide-on-large-only">
                    <div class="row">
                        <?php foreach ($recipes as $recipe) { ?>
            
                            <div class="col s12 m12 l4">
                                
                                <div class="card z-depth-0" style="background-color: #f5f5f5;">

                                    <div class="card-image">
                                        <img src="./assets/img/cake-main.jpg" alt="">
                                    </div>
            
                                    <div class="card-content">
            
                                    <h5 class="green-text text-darken-4" style="font-size: 16px !important;"><?php echo $recipe["recipe_name"] ?></h5>
                                    <p style="font-size: 16px !important;"><?php echo $recipe["description"] ?></p>
            
                                    </div>

                                    <div class="card-action">
                                        <div class="row">
                                            <div class="col l10">
                                                <a href="./view_recipe.php?recipe_id=<?php echo $recipe['recipe_id']; ?>" class="green white-text btn btn-flat">more details</a>
                                            </div>
                                            <div class="col l2">
                                                <a href=""><i class="material-icons green-text tooltipped" data-position="bottom" data-tooltip="delete" >Delete</i></a>
                                            </div>
                                        </div>
                                    </div>
            
                                </div>
                                
                            </div>
            
                        <?php } ?>
                    </div>
                </div>


                <div style="text-align: center;">
                    <a href="https://en.wikipedia.org/wiki/List_of_cakes" style="font-size: 12px; background-color: #2E7D32;" class="btn hide-on-large-only z-depth-0">VIEW ALL CHICKEN</a>
                </div>
            </section>
        </section>
    </main>
    <footer class="page-footer section scrollspy gradient-bg" id="footer">
        <section class="section">
            <div class="section container">
                <div class="section row">
                    <div class="col s12 l3">
                        <h6 class="green-text text-darken-4">About</h6>
                        <ul>
                            <li><a class="black-text scrollspy" href="home.html#about_us">Who We Are</a></li>
                            <li><a class="black-text scrollspy" href="home.html#experts">Meet the Chefs</a></li>
                            <li><a class="black-text scrollspy" href="#top">Back to Top</a></li>
                        </ul>
                    </div>
                    <div class="col s12 l3">
                        <h6 class="green-text text-darken-4">Explore</h6>
                        <ul>
                            <li><a class="black-text" href="./cakes.html">Cakes</a></li>
                            <li><a class="black-text" href="./Chicken.html">Chicken</a></li>
                            <li><a class="black-text" href="./soups.html">Soups</a></li>
                        </ul>
                    </div>
                    <div class="col s12 l3">
                        <h6 class="green-text text-darken-4">Legal</h6>
                        <ul>
                            <li><a class="black-text" href="">Privacy Policy</a></li>
                            <li><a class="black-text" href="">Terms & Conditions</a></li>
                            <li><a class="black-text" href="">Disclosure</a></li>
                        </ul>
                    </div>
                    <div class="col s12 l3">
                        <h6 class="green-text text-darken-4">Contact Us</h6>
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

            $(document).ready(function(){
            $('.tooltipped').tooltip();
            });
        });
    </script>
</body>
</html>

