<?php

session_start();

include 'includes/dbh.inc.php';
include_once 'headerbibliotekos.php';

?>


<div class="sarasoback">

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



                     <li><a href="#">Namai</a></li>
                     <li><a href="ikelk1.php">Įkelk</a></li>
                     <li  class="active"><a href="sarasas.php">Sąrašas</a></li>
                     <li><a href="Search.php">Ieškok</a></li>
                     <li class="disabled"><a href="#">Kuriama...</a></li>


                 </ul>
             </div>
         </div>
 </nav>
<br><br><br><br>

<h1 class="center">Nepatikimų žmonių sąrašas</h1>


<div class="container ">
<div class="row">
    <div class="col   sarasoBorderis">

 <?php
 $query = "SELECT * FROM atrinkti"; //You don't need a ; like you do in SQL
 $result = mysqli_query($conn, $query);


 echo "<table>"; // start a table tag in the HTML

 while($row = mysqli_fetch_array($result)){   //Creates a loop to loop through results

 echo "<tr>
 <th> &nbsp;Vardas:  &nbsp;  </th>
 <td>" . $row['vardas'] . "</td>

 <th>&nbsp;Pavarde:&nbsp;</th>
 <td>" . $row['pavarde'] . "</td>

 <th>&nbsp;Banko saskaitos numeris:&nbsp;</th>
 <td>" . $row['saskaitosNR'] . "</td>

 <th>&nbsp;FB:&nbsp;</th>
 <td>" . $row['facebook'] . "</td>

 <th>&nbsp;Trumpai:&nbsp;</th>
 <td>" . $row['Trumpai'] . "</td>
 </tr>";  //$row['index'] the index here is a field name
 }


 echo "</table>";

 mysqli_close($conn); //Make sure to close out the database connection

  ?>

</div>
</div>
</div>
<br><br><br><br><br><br><br>


</div>
<?php

include_once 'copyright.php';

include_once 'footerbibliotekos.php';


 ?>
