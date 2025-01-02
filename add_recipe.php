<?php

// Create Blank Variables to match form field names

$recipe_name = "";
$recipe_type = "";
$description = "";
$ingredients = "";
$duration = "";

// if (isset ($_GET ["submit"])) {

//     print_r($_GET);

// }


include ("connect.php"); 

// Check if the submit button is pressed

if (isset ($_POST["submit"])) {
    $recipe_name = $_POST ["recipe_name"];
    $recipe_type = $_POST ["recipe_type"];
    $description = $_POST ["description"];
    $ingredients = $_POST ["ingredients"];
    $duration = $_POST ["duration"];

    // Write the submit query

    $upload_query = "INSERT INTO `recipes_tb`(`recipe_name`, `recipe_type`, `description`, `ingredients`, `duration`) VALUES ('$recipe_name','$recipe_type', '$description','$ingredients','$duration')";

    // Send Query to Database

    $send_query = mysqli_query($connect, $upload_query);

    // Check if data was submitted successfully

    if ($send_query) {
        header("Location: home.html");
    }  else {
        echo "Connection Error";
    }

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipe.com  - Cook, Explore & Tell a Story</title>
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

        a:hover {
            font-weight: 800 !important;
            transition: ease-in .2s;
        }

        a.btn {
            border-radius: 10px !important;
        }

        p {
            font-size: 16pt !important;
        }
        .text-justify {
            text-align: justify !important;
        }

        .rounded-edges {
            border-radius: 10px !important;
        }

        .card-image:hover .overlay {
            border-radius: 10px;
            opacity: 1;
            cursor: pointer;
            text-decoration: underline white;
        }

        .underline {
            text-decoration: underline white !important;
        }

        .gradient-bg {
            background: linear-gradient(to bottom, #ffffff, #e65100);
        }

        /* label focus color */
        .input-field input[type=text]:focus + label {
            color: #e65100 !important;
        }

        /* label focus color */
        .input-field input[type=number]:focus + label {
            color: #e65100 !important;
        }

        /* label underline focus color */
        .input-field input[type=text]:focus {
            border-bottom: 1px solid #e65100 !important;
            box-shadow: 0 1px 0 0 #e65100 !important;
        }

        /* label underline focus color */
        .input-field input[type=number]:focus {
            border-bottom: 1px solid #e65100 !important;
            box-shadow: 0 1px 0 0 #e65100 !important;
        }

        .dropdown-content li > a, .dropdown-content li > span {
            font-size: 16px;
            color: #e65100;
            display: block;
            line-height: 22px;
            padding: 14px 16px;
        }

    </style>
</head>
<body>
    <header class="top">
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
                                <i class="material-icons orange-text text-darken-4">menu</i>
                            </a>
                        </div>
                        <!-- Nav links for Desktops -->
                        <div class="col s12 m6 l9 hide-on-med-and-down">
                            <ul class="right">
                                <li><a href="#about_us" class="orange-text text-darken-4 scrollspy">Who We Are</a></li>
                                <li><a href="#catergories" class="orange-text text-darken-4 scrollspy">Find a Recipe</a></li>
                                <li><a href="#experts" class="orange-text text-darken-4 scrollspy">Meet the Experts</a></li>
                                <li><a href="#cliente" class="orange-text text-darken-4 scrollspy">Cliente</a></li>
                                <li><a href="./login.php" target="_blank" class="btn rounded-edges orange white-text darken-4 scrollspy">Login</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Sidenav 👀👇🏾 -->
        <ul class="hide-on-large-only sidenav" id="sidenav">
            <li><a href="#about_us" class="orange-text text-darken-4 scrollspy">Who We Are</a></li>
            <li><a href="#catergories" class="orange-text text-darken-4 scrollspy">Find a Recipe</a></li>
            <li><a href="#experts" class="orange-text text-darken-4 scrollspy">Meet the Experts</a></li>
            <li><a href="#cliente" class="orange-text text-darken-4 scrollspy">Cliente</a></li>
            <br>
            <li><a href="./login.php" target="_blank" class="btn orange darken-4 z-depth-0">Login</a></li>
        </ul>
        <!-- Background img (Dessktops) 👀👇🏾 -->
            <div class="hide-on-med-and-down" style="height: 40vh; background-image: url(assets/img/welcome-banner.jpg); background-size: cover;">

            </div>

        <!-- Background img (Tabs & Mobile) 👀👇🏾 -->
        <div class="hide-on-large-only" style="height: 40vh; background-image: url(assets/img/welcome-banner.jpg); background-size: cover;">
            
        </div>
    </header>
    <main>
        <div><br>
            <h3 style="text-align: center; color: #e65100;">Add a New Recipe</h3><br>

            <div class="container">
                <div class="container">
                    <div class="row">
                        <form action="add_recipe.php" method="POST" class="col s12">
                            <div class="row">
                                <div class="input-field col s8">
                                    <input id="recipe_name" name="recipe_name" type="text" class="validate">
                                    <label for="recipe_name">Recipe Name</label>
                                </div>
                                <div class="input-field col s4">
                                    <select id="recipe_type" name="recipe_type" type="text" class="validate">
                                        <option value="cake">Cake</option>
                                        <option value="chicken">Chicken</option>
                                        <option value="soup">Soup</option>
                                    </select>
                                    <label>Recipe Type</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="description" name="description" type="text" class="validate">
                                    <label for="description">Description</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s10">
                                    <input id="ingredients" name="ingredients" type="text" class="validate">
                                    <label for="ingredients">Ingredients</label>
                                </div>
                                <div class="input-field col s2">
                                    <input id="duration" name="duration" type="number" class="validate">
                                    <label for="duration">Duration</label>
                                </div>
                            </div>
                            <div style="text-align: center;">
                                <input type="submit" name="submit" value="submit" class="btn btn-large btn-flat orange white-text darken-4 z-depth-0">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <br><br>
    <footer class="page-footer section scrollspy gradient-bg" id="footer">
        <section class="section">
            <div class="section container">
                <div class="section row">
                    <div class="col s12 l3">
                        <h6 class="orange-text text-darken-4">About</h6>
                        <ul>
                            <li><a class="black-text scrollspy" href="#about_us">Who We Are</a></li>
                            <li><a class="black-text scrollspy" href="#experts">Meet the Chefs</a></li>
                            <li><a class="black-text scrollspy" href="#top">Back to Top</a></li>
                        </ul>
                    </div>
                    <div class="col s12 l3">
                        <h6 class="orange-text text-darken-4">Explore</h6>
                        <ul>
                            <li><a class="black-text" href="./cakes.html">Cakes</a></li>
                            <li><a class="black-text" href="./Chicken.html">Chicken</a></li>
                            <li><a class="black-text" href="./soups.html">Soups</a></li>
                        </ul>
                    </div>
                    <div class="col s12 l3">
                        <h6 class="orange-text text-darken-4">Legal</h6>
                        <ul>
                            <li><a class="black-text" href="">Privacy Policy</a></li>
                            <li><a class="black-text" href="">Terms & Conditions</a></li>
                            <li><a class="black-text" href="">Disclosure</a></li>
                        </ul>
                    </div>
                    <div class="col s12 l3">
                        <h6 class="orange-text text-darken-4">Contact Us</h6>
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
            $('.slider').slider({
                interval: 5000,
                indicators: false
            });
            $('.scrollspy').scrollSpy();
            $(document).ready(function(){
            $('select').formSelect();
            });
        });
    </script>
</body>
</html>