<?php

session_start();



if (isset($_GET['Message'])) {
    print '<script type="text/javascript">alert("' . $_GET['Message'] . '");</script>';
}


include_once 'headerbibliotekos.php'


 ?>

<!--........................Headeris--------------------------->


<nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img src="img/netikek2.png"></a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">

                    <?php
                        if (isset($_SESSION['u_id'])) {
                            echo ' <form class="" action="includes/logout.inc.php" method="POST">
                                 <button class="btn-danger btn-sm " type="submit" name="submit">Atsijungti</button>
                                   </form>';
                               }
                     ?>

                    <li class="active"><a href="#">Namai</a></li>
                    <li><a href="ikelk1.php">Įkelk</a></li>
                    <li><a href="sarasas.php">Sąrašas</a></li>
                    <li><a href="Search.php">Ieškok</a></li>
                    <li class="disabled"><a href="#">Kuriama...</a></li>


                </ul>
            </div>
        </div>
</nav>

<!--.........................Karusele--------------------------------->

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1" ></li>
        <li data-target="#myCarousel" data-slide-to="2" ></li>
    </ol>

    <div class="carousel-inner" role="listbox">
        <div class="item active">
        <img src="foto/tvorgrota.jpeg" alt="mountains">
        <div class="carousel-caption">
            <p>Labas,<br /> prieš pirkdamas prekę/paslaugą iš žmogaus ar įmonės visuomet įsitikink kad jis yra patikimas. VISADA paitikrink ar jo nėra mūsų juodame saraše </p>
                <h1>Ieškok žmogaus</h1>
                <br />

                <a href="Search.php" class="btn btn-default" role="button">Ieškok</a>
        </div>
    </div>


        <div class="item">
            <img src="foto/brickwall.jpg" alt="snow">
            <div class="carousel-caption">
                <p>Labas,<br /> prieš pirkdamas prekę/paslaugą iš žmogaus ar įmonės visuomet įsitikink kad jis yra patikimas. VISADA paitikrink ar jo nėra mūsų juodame saraše </p>
                    <h1>Ieškok žmogaus</h1>
                    <br />
                    <a href="Search.php" class="btn btn-default" role="button">Ieškok</a>
            </div>
        </div>

        <div class="item">
            <img src="foto/blcgr.jpg" alt="mountain red">
            <div class="carousel-caption">
                <p>Labas,<br /> prieš pirkdamas prekę/paslaugą iš žmogaus ar įmonės visuomet įsitikink kad jis yra patikimas. VISADA paitikrink ar jo nėra mūsų juodame saraše </p>
                    <h1>Ieškok žmogaus</h1>
                    <br />
                    <a href="Search.php" class="btn btn-default" role="button">Ieškok</a>
            </div>
        </div>
    </div>
    <!--  slaiderio kontrolai-->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>

    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<!--..........................slaiderio pabaiga......................-->

<!--........................tekstai...............................-->

<!-- <div class="container text-center">
    <h2>What We're Using</h2>
    <div class="row">
        <div class="col-sm-4">
            <img src="img/html5.png" class="ikona" alt="html5 icon">
            <h4>HTML5</h4>
        </div>
        <div class="col-sm-4">
            <img src="img/bootstrap.png" class="ikona" alt="html5 icon">
            <h4>Bootstrap</h4>
        </div>
        <div class="col-sm-4">
            <img src="img/css3.png" class="ikona" alt="html5 icon">
            <h4>CSS3</h4>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h4>Biski apie bootstrap</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="col-md-6">
            <img src="img/bootstrap2.jpg" class="img-responsive" alt="">
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <h4>Biult with sass</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <img src="img/sass.png" class="img-responsive" alt="">
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <h4>Biult with less</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <img src="img/less.png" class="img-responsive" alt="">
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <h4><a href="#hidden" data-toggle="collapse">Care to learn more?</a></h4>
        <div id="hidden" class="collapse">

            <h4>Biski apie bootstrap</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
    </div>
</div> -->

<!--..................................Footeris......................-->

<footer class="container-fluid text-center">
    <div class="row">
        <div class="col-sm-4">
            <h3>Kontaktai</h3>
            <br />
            <h4>@gmail.com</h4>
        </div>
        <div class="col-sm-4">
            <h3>Plačiau</h3>
            <p>Daugelis iš mūsų ar mūsų pažįstamų rato vienaip ar kitaip yra nukentėję nuo sukčių. Kadangi šį bėda yra labai didelė ,o teisėsauga nevisada gali padėti, išeitis šis puslapis. Čia žmonės gali dalintis nepatikimais žmonėmis ir įmonėmis. Tokiu būdų prisidėti prie švarios ir sąžiningos visuomenės kūrimo.</p>
        </div>
        <div class="col-sm-4">
            <h3>Įkelk</h3>
            <p>Jei buvai apgautas ir turi įrodymu, nedvėjok būk pilietiškas ir pasidalink, neleisk apgavikam ir toliau pelnytis.</p>
        </div>
    </div>
</footer>

<?php
include_once 'copyright.php';

include_once 'footerbibliotekos.php';

 ?>
