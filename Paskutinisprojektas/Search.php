<?php
$output = NULL;

if (isset($_POST['ieškoti'])) {

$mysqli = NEW MySQLi ("localhost","testas1","root","scamsite");

    $search = $mysqli->real_escape_string($_POST['search']);


    $resultSet = $mysqli->query("SELECT * FROM atrinkti WHERE vardas LIKE '$search' OR saskaitosNR LIKE '$search' OR pavarde LIKE '$search' OR facebook LIKE '$search' ");

    if($resultSet->num_rows > 0) {
        while($rows = $resultSet->fetch_assoc())
        {
            $saskaitosNR = $rows['saskaitosNR'];
            $pavarde = $rows['pavarde'];
            $vardas = $rows['vardas'];
            $facebook = $rows['facebook'];
            $Trumpai = $rows['Trumpai'];


            $output .= "Banko Saskaitos numeris: $saskaitosNR<br />Vardas: $vardas<br />Pavarde: $pavarde <br />Facebook: $facebook <br />Trumpa info: $Trumpai <br /><br />";

        }
    }else {
        $output = "nerasta";
    }

}
include_once 'headerbibliotekos.php';

session_start();

 ?>



<div class="searchBackgroundas">



<!---.....................Headeris..............................-->
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
                    <li ><a href="index.php">Namai</a></li>
                    <li><a href="Ikelk1.php">Įkelk</a></li>
                    <li><a href="sarasas.php">Sąrašas</a></li>
                    <li class="active"><a href="#">Ieškok</a></li>
                    <li class="disabled"><a href="#">Kuriama...</a></li>


                </ul>
            </div>
        </div>
</nav>
<!--.........................Mainas................................-->
<div class="container">
    <br>

    <h1 class="center"> Paieška</h1>





    <div class="row">

    <br><br><br><br><br>



            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 borderis">
                <?php echo $output; ?>
            </div>

<!-- ...................-->

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 borderis">
                <div class="form-group">
                    <form method="post" >
                        <input type="text" name="search" class="form-control "/>
                        <button type="submit" class="btn btn-default" name="ieškoti">Ieškok!</button>
                    </form>
                </div>
            </div>

<!--  ..................-->

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 searchBorderis">
                <p>Į paieškos laukelį įveskite vieną iš žmogaus duomenų, tiksliausia paieška vykdoma į laukelį įvedus banko sąskaitos numerį pvz: "LT012345678901234567",
                visuomet išbandykite paieška su vis skirtingais duomenimis. </p>
            </div>
    </div>
</div>
<br><br><br><br><br><br><br>

<!--...............................Footeris...........................-->


<?php include_once 'copyright.php' ?>

</div>








<?php
include_once 'footerbibliotekos.php';


 ?>
