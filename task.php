<?php
include "connect.php";

?>
    <html class="no-js" lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>EXPassion : Be passioned by learning</title>
        <link rel="stylesheet" href="css/foundation.css">
        <link rel="stylesheet" href="css/app.css">
        <link rel="stylesheet" href="img/foundation-icons/foundation-icons.css">
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
        <link href="http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel="stylesheet">
    </head>

    <body>
        <!-- NAVIGATOR -->

        <div data-sticky-container>
            <div class="sticky" data-sticky data-options=" marginTop: 0; stickyOn: small;">
                <div class="top-bar">
                    <div class="top-bar-left">
                        <p class="menu-text"><img src="img/passion.png">&nbsp;&nbsp;EXPassion</p>
                    </div>
                    <div class="top-bar-right">
                        <ul class="menu">
                            <?php

                                if(!isset($_SESSION['username']))
                                {
                                    echo    "<ul class='inline-list hide-for-small-only account-action'>
                                                <li><a data-open='myModal'>Login</a></li>
                                                <li><a class='signup'  data-reveal-id='myModal'>Signup</a></li>
                                            </ul>";
                                }
                                else if (isset($_SESSION['username']))
                                {
                                    echo "<ul class='inline-list hide-for-small-only account-action'>
                                            <li class='islogged'>Hi! ".$_SESSION["username"]."</li>
                                            <li ><i class='fi-lock'></i></li>    
                                        </ul>";
                                }
                          
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- REVEAL -->
        <div id="myModal" class="large reveal" data-reveal aria-labelledby="login or sign up" aria-hidden="true" role="dialog">
            <div class="row">
                <div class="large-6 columns auth-plain">
                    <div class="signup-panel left-solid">
                        <p class="welcome">Registered Users</p>
                        <form name="form1" id="form" action="check_login.php" enctype="multipart/form-data" method="POST">
                            <div class="row collapse">
                                <div class="small-2  columns">
                                    <span class="prefix"><i class="fi-torso-female"></i></span>
                                </div>
                                <div class="small-10  columns">
                                    <input type="text" name="username" id="username" placeholder="username">
                                </div>
                            </div>
                            <div class="row collapse">
                                <div class="small-2 columns ">
                                    <span class="prefix"><i class="fi-lock"></i></span>
                                </div>
                                <div class="small-10 columns ">
                                    <input type="password" name="password" id="password" placeholder="password">
                                </div>
                            </div>
                            <button class="button" type="submit" name="submit">Log In </button>
                        </form>
                    </div>
                </div>
                    <div class="large-6 columns auth-plain">
                        <div class="signup-panel newusers">
                            <p class="welcome"> New User?</p>
                            <p>By creating an account with us, you will be able to move through the checkout process faster, view and track your orders, and more.</p>
                            <br>
                            <a href="#" class="button ">Sign Up</a></br>
                        </div>
                    </div>
                </div>
                <button class="close-button" data-close aria-label="Close Accessible Modal" type="button">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        
        <br>
        <div class="row expanded lead-head">
              <div class="head">
                 Let's do that again!
              </div>
        </div>
        <!-- MAIN CONTENT-->
        <div class="task-container">
            <div class="row expanded">
                <div class="small-12 medium-12 large-12 columns subject" id = "subject">
                </div>
            </div>
            <div class="row expanded">
                <div class="main-nav">
                    kuy
                </div>
            </div>
            <div class="row expanded">
                <div class="small-9 medium-9 large-9 columns main-problem">
                    <legend id = "problemtask"></legend>
                    <input type="radio" name="setOfChoice" id="choiceA" required><label><p onclick = "check(0)" id = "dataChoiceA"> </p></label></br>
                    <input type="radio" name="setOfChoice" id="choiceB" ><label><p onclick = "check(1)" id = "dataChoiceB"> </p></label></br>
                    <input type="radio" name="setOfChoice" id="choiceC" ><label><p onclick = "check(2)" id = "dataChoiceC"> </p></label></br>
                    <input type="radio" name="setOfChoice" id="choiceD" ><label><p onclick = "check(3)" id = "dataChoiceD"> </p></label></br>
                    <a onclick="checkTask()" class="button expanded" >Submit !!!</a>
                    <a onclick="reload()" class="button expanded" >Reload !!!</a>
                    <p>score</p> <p id = "score"></p>
                </div>
                <div class="small-3 medium-3 large-3 columns main-problem problem-info">
                    Difficulty: <i class="" id = "star1"></i>
                    <i class="" id = "star2"></i>
                    <i class="" id = "star3"></i>
                    <i class="" id = "star4"></i>
                    <i class="" id = "star5"></i>
                    <p id = "pass"></p>
                    <p id = "alluser"></p>
                </div> 
            </div>
        </div>
        <!-- FOOTER -->
        <footer class="footer">
            <div class="row full-width">
                <div class="small-12 medium-3 large-4 columns">
                    <p>TEST COLUMN 1 IN FOOTER</p>
                </div>
                <div class="small-12 medium-3 large-4 columns">
                    <p>TEST COLUMN 2 IN FOOTER</p>
                </div>
                <div class="small-6 medium-3 large-2 columns">
                    <p>TEST COLUMN 3 IN FOOTER (FEATURES)</p>
                    <ul class="footer-links">
                        <li><a href="#">Forums</a></li>
                        <li><a href="#">Events</a></li>
                        <li><a href="#">FAQ's</a></li>
                        <ul>
                </div>
                <div class="small-6 medium-3 large-2 columns">
                    <p>TEST COLUMN 4 IN FOOTER (FOLLOW US)</p>
                    <ul class="footer-links">
                        <li><a href="#">Github</a></li>
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Twitter</a></li>
                        <ul>
                </div>
            </div>
        </footer>

        <script src="setElement.js"></script>

        <?php
            echo "The time is " . date("h:i:sa");
            include 'connectphpjump.php';
        ?>

        <script src="problemtask.js"></script>

        <?php 
            include 'updatescore.php';
        ?> 

        <script src="js/vendor/jquery.js"></script>
        <script src="js/vendor/what-input.js"></script>
        <script src="js/vendor/foundation.js"></script>
        <script src="js/app.js"></script>
    </body>

    </html>