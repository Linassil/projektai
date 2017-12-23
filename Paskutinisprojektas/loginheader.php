<?php

session_start();
include_once "headerbibliotekos.php";
 ?>


<div class="registracijosBack">

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
                 <li><a href="index.php">Namai</a></li>
                 <li ><a href="Ikelk1.php">Įkelk</a></li>
                 <li><a href="sarasas.php">Sąrašas</a></li>
                 <li><a href="Search.php">Ieškok</a></li>
                 <li class="disabled"><a href="#">Kuriama...</a></li>


             </ul>
         </div>
     </div>
 </nav>
            <div >
                <h1 class="center">Norint įkelti žmogų į juodąjį sąrašą pirmiausiai turi prisijungti</h1>
                <br><br><br>
                <?php
                    if (isset($_SESSION['u_id'])) {
                        echo ' <form class="" action="includes/logout.inc.php" method="POST">
                             <button type="submit" name="submit">Logout</button>
                               </form>';
                           } else {
                               echo '<form action="includes/login.inc.php" method="POST" class="center">
                                   <input class="logi" type="text" name="uid" placeholder="login/email">
                                   <input class="logi" type="password" name="pwd" placeholder="slaptazodis">
                                   <button class="mygt" type="submit" name="submit">Prisijungti</button>


                                   </form>';
                           }
                 ?>
            </div>








<?php include_once "footerbibliotekos.php";

 ?>
