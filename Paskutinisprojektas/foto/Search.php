<?php
$output = NULL;

if (isset($_POST['submit'])) {

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
        $output = "nera rezultatu";
    }

}
include_once 'bibliotekosHead.php';
 ?>
<!---.....................Headeris..............................-->
    <body class="kuriama">
        <div class="conainer-fluid">

            <div class="row aukstis-200 ">
                <div class="col">
                    <div class="demo-layout-transparent mdl-layout mdl-js-layout">
                  <header class="mdl-layout__header mdl-layout__header--transparent">
                    <div class="mdl-layout__header-row">
                      <!-- Title -->
                      <span class="mdl-layout-title">Title</span>
                      <!-- Add spacer, to align navigation to the right -->
                      <div class="mdl-layout-spacer"></div>
                      <!-- Navigation -->
                      <nav class="mdl-navigation">
                        <a class="mdl-navigation__link" href="">Link</a>
                        <a class="mdl-navigation__link" href="">Link</a>
                        <a class="mdl-navigation__link" href="">Link</a>
                        <a class="mdl-navigation__link" href="">Link</a>
                      </nav>
                    </div>
                  </header>

                  <div class="mdl-layout__drawer">
                    <span class="mdl-layout-title">Title</span>
                    <nav class="mdl-navigation">
                      <a class="mdl-navigation__link" href="">Link</a>
                      <a class="mdl-navigation__link" href="">Link</a>
                      <a class="mdl-navigation__link" href="">Link</a>
                      <a class="mdl-navigation__link" href="">Link</a>
                    </nav>
                  </div>
                  <main class="mdl-layout__content">
                  </main>
                </div>
  </div>
</div>
                </div>
            </div>
        </div>
        <br />
<!--.........................Mainas................................-->

<div class="container border">


            <div class="row aukstis-300 boxed">
                <div class="col">

                    <div class="row oflow">

                    <div class="col-md-2 bg-info">
                        <?php echo $output; ?>
                    </div>

                    <div class="col bg-danger aukstis-200">

                                <form method="post">
                                    <input type="text" name="search"/>
                                     <input type="submit" name="submit"/>
                                </form>

                    </div>

                    <div class="col bg-light">

                    </div>

                    </div>
                </div>
            </div>

            <div class="row aukstis-100 bg-warning">
                <div class="col">

                </div>
            </div>
<!--...............................Footeris...........................-->
            <div class="row aukstis-100 bg-dark">
                <div class="col">

                </div>
            </div>





        </div>




    </body>
</html>


<?php
include_once 'bibliotekosFooter.php';


 ?>
