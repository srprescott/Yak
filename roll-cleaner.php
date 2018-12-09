<?php
    
    $name=$_POST["name"];
    $email=$_POST["email"];
    $input=$_POST["input"];

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Yak Store</title>
        <link rel="stylesheet" href="main.css">
        <link rel="stylesheet" href="roll-cleaner.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
        
                   
                    <!-- Global site tag (gtag.js) - Google Analytics -->
                <script async src="https://www.googletagmanager.com/gtag/js?id=UA-129014896-1"></script>
                <script>
                  window.dataLayer = window.dataLayer || [];
                  function gtag(){dataLayer.push(arguments);}
                  gtag('js', new Date());

                  gtag('config', 'UA-129014896-1');
                </script>

    
    </head>

    <body>
        <div class="container">
            <div class="row">
                <section class="header" id="about">
                    <div class="ban"> <img class="banner" src="images/banner-4.jpg"> </div>
                    <div class="topnav" id="myTopnav"> <a href="index.html">Yak Home</a> <a href="dust-wall.html">Dust Wall</a> <a href="drill-press.html">Drill Press</a> <a href="ex-tool.html">Extention Tool</a> <a href="roll-cleaner.php">Paint Roll Cleaner</a> <a href="contact-us.html">Contact Us</a>
                        <p class="this-page">Paint Roll Cleaner</p> <a href="javascript:void(0);" style="font-size:20px;" class="icon" onclick="myFunction()">&#9776;</a> </div>
                </section>
                <section class="one">
                    <div class="area-one">
                        <div class="intro">
                            <p class="p-heading">Meet The YAK Paint Roll Cleaner!</p>
                            <p class="p-body">The YAK Paint Roll Cleaner is a versatile, easy-to-use cleaner for any size paint roll. It will cut your clean up time to a fraction of what you normally spend cleaning up after a painting project. It confines the mess to a small area, and contains any potential splatter mess!</p> <img class="image" src="images/roll-cleaner/YAK-still.jpg">
                            <p class="p-body">After a long day of painting, the last thing you want to do is spend hours cleaning your paint rolls for storage. Some people even throw them away to avoid the hassle. Instead, use the YAK Paint Roll Cleaner to clean each paint roll in under two minutes!</p>
                        </div>
                    </div>
                    <div class="area-two">
                        <p class="p-heading">See YAK Paint Roll Cleaner in action!</p>
                        <div class="video-area">
                            <div class="video">
                                <iframe src="https://www.youtube.com/embed/N3rlQJpQux4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                <p class="caption">Watch the YAK Paint Roll Cleaner fully clean a large paint roll in just 1 minute!</p>
                            </div>
                            <!-- <div class="video">
                                <iframe src="https://www.youtube.com/embed/IO1RSLy2Vog" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                <p class="caption">See how the YAK Paint Roll Cleaner works it's magic!</p>
                            </div> --></div>
                    </div>
                    <div class="buy-now">
                        <p class="p-heading-two white-text">Find Out When YOU Can Buy the YAK Paint Roll Cleaner!</p> <img class="yak" src="images/roll-cleaner/product-1.jpg">
                        <h4 class="white-text">The YAK Paint Roll Cleaner is not currently being sold. Please enter your name and email address below to receive an email when this product is ready for purchase!</h4>
                        <div class="button">
                            <form method="post">
                                <label class="white-text">Your Name:</label>
                                <input type="text" name="name" required>
                                <br>
                                <label class="white-text">Your Email:</label>
                                <input type="email" name="email" required>
                                <br>
                                <label class="white-text">Let Us Know What You Think!</label>
                                <br>
                                <textarea name="input"></textarea>
                                <br>
                                <input type="submit" value="Submit" onclick="thankYou()"> </form>
                        </div>
                        <div class="thank-you"></div>
                    </div>
                </section>
            </div>
        </div>
        <footer>
            <div class="footer">
                <p class="copywrite">Prescott, G, inventor; Terracon Industries. Bar clamp / spreader. United States patent 91,156,138 B1. Designed &amp; Coded by <a href="http://www.prescottdev.com">Prescott Web Development.</a></p>
            </div>
        </footer>
        
        <script>
            function myFunction() {
                var x = document.getElementById("myTopnav");
                if (x.className === "topnav") {
                    x.className += " responsive";
                    document.querySelector('.this-page').style.display = "none";
                }
                else {
                    x.className = "topnav";
                }
            }
        </script>
    </body>

    </html>
    <?php

    $file=fopen("log.txt", "a");
    fwrite($file, $name);
    
    fwrite($file, $email);

    fwrite($file, $input);

    fclose($file);

   

?>