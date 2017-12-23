<?php


include_once 'headerbibliotekos.php';



session_start();

if (!isset($_SESSION['u_id'])) {
   header("Location: Ikelk1.php");
}


 ?>

<body class="ikelkBackgroundas">

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
                    <li><a href="index.php">Namai</a></li>
                    <li><a href="#">Įkelk</a></li>
                    <li><a href="sarasas.php">Sąrašas</a></li>
                    <li><a href="Search.php">Ieškok</a></li>
                    <li class="disabled"><a href="#">Kuriama...</a></li>


                </ul>
            </div>
        </div>
    </nav>





    <!--.........................mainas--------------------------------->
    <main class="container ivdeimas">
        <div class="row borderis">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <h2 class="warning">Būtina perskaityti</h2>
                <p class="taisykles">Dešinėje matote įvedimo laukus. Į juos įveskite jus apgavusio žmogaus ar įmonės duomenis. Paspaudę ant mygtuko įrodymai pasirinkite nuotraukas kuriose aiškiai matoma situacija kurioje esate apgautas. ĮRODYMAI YRA BŪTINI! Laikydami "ctrl"
                    klavišą galite pasirinkti daugiau nei vieną nuotrauką. Jeigu neturite visų duomenų į įvedimo langelį įveskite "nera".</p>
                <br />
                <p>Visuomenės informavimo įstatymo 14 str. leidžia: 3. Informacija apie privatų gyvenimą gali būti skelbiama be žmogaus sutikimo tais atvejais, kai ji padeda atskleisti įstatymų pažeidimus ar nusikalstamas veikas, taip pat kai informacija
                    yra pateikiama viešai nagrinėjant bylą. Be to, informacija apie viešojo asmens privatų gyvenimą gali būti skelbiama be jo sutikimo, jeigu ši informacija atskleidžia visuomeninę reikšmę turinčias privataus šio asmens gyvenimo aplinkybes
                    ar asmenines savybes. <a href="https://www.e-tar.lt/portal/lt/legalAct/TAR.7C5D266B28F0">Šaltinis</a> <br /> </p><hr />
                    Sukčių duomenis internete galima viešinti siekiant apsaugoti kitus.


                        <p>Daugelis nukentėjusių asmenų baiminasi viešinti sukčiaus tapatybę, nes prasideda grasinimai dėl teismo, neva bus kreipiamasi dėl duomenų viešinimo. Bet, duomenis apie sukčius viešinti galima, tačiau tai reikia daryti nepažeidžiant įstatymų. Policijos departamento Komunikacijos skyriaus vyriausioji specialistė Simona Ludavičiūtė patvirtinta, kad sukčiaujančių asmenų duomenis viešinti galima: “Dėl viešojo intereso ir siekiant apsaugoti kitus gyventojus nuo sukčiautojų kėsinimųsi į turtą, galima skelbti sukčiautojų duomenis.” Jeigu jūs nukentėjote nuo sukčiaus ir turite jo vardą bei pavardę, tai juos galite viešinti, tačiau turite tai daryti nepažeidžiant to asmens garbės ir orumo. Dažniausiai nukentėję asmenys, veikiami emocijų, prirašo daug negatyvios ir žeidžiančios informacijos, o tai dažniausiai sukčiui ir leidžia pasinaudoti savo teise kreiptis į teismą ar įvairias institucijas. Nepamirškite, kad nukentėjus nuo sukčiaus, taip pat reikėtų kreiptis į teisėsaugą: “Nukentėjusius nuo sukčiautojų raginame nedelsiant kreiptis su pareiškimu į policijos įstaigą pagal gyvenamąją vietą.” – aiškina S. Ludavičiūtė.
                        </p> <a href="https://www.skaiciau.lt/saugotis-nuo-sukciu-galima-skelbiant-ju-duomenis-internete/">Šaltinis</a>

                <h3>Už įkeltos informacijos turinį atsako asmenys, kurie pateikė duomenis.</h3>


            </div>


            <!--.....................Ikelimo forma...........................-->

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

    <form action="./sukurtiScameri.php" method="POST" onsubmit="return check_info();" id='ivdeimas' enctype="multipart/form-data">

                    <div class="form-group">
                        <label for="vardas">Vardas:</label>
                        <input type="text" class="form-control" name="vardas" maxlength="30" id="vardas">
                    </div>


                    <div class="form-group">
                        <label for="pavarde">Pavardė:</label>
                        <input type="text" class="form-control" name="pavarde" maxlength="30" id="pavarde">
                    </div>


                    <div class="form-group">
                        <label for="facebook">Facebook:</label>
                        <input type="text" class="form-control" name="facebook" maxlength="300" id="facebook">
                    </div>


                    <div class="form-group">
                        <label for="saskaitosNR">Sąskaita:</label>
                        <input type="text" class="form-control" name="saskaitosNR" maxlength="50" id="saskaitosNR">
                    </div>

                    <div class="form-group">
                        <label for="adresas">Adresas:</label>
                        <input type="text" class="form-control" name="adresas" maxlength="100" id="adresas">
                    </div>


                    <div class="form-group">

                        <input type="hidden" name="size" value="10000">
                        <div>
                            <input type="file" name="image">
                        </div>
                        <div>
                            <textarea name="text" rows="4" cols="40" placeholder="Vardas"></textarea>

                        </div>


                    </div>




                    <div class="form-group">
                        <label for="skola">Žąlos dydis:</label>
                        <input type="text" class="form-control" name="skola" maxlength="10" id="skola">
                    </div>


                    <div class="form-group">
                        <label for="Trumpai">Paaiškinimas:</label>
                        <input type="text" class="form-control" name="Trumpai" maxlength="300" id="trumpai">
                    </div>

                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" id="checkbox1">
                            Su taisyklėmis susipažinau, prisiimu atsakomybę už pateiktus duomenis.
                        </label>
                    </div>



                    <div class="form-group row">

                        <button type="submit" class="btn btn-primary">Pateikti</button>
                    </div>

    </form>
            </div>
        </div>
    </main>

<script type="text/javascript" src="main.js"></script>
    <!--..................................Footeris......................-->




<?php
include_once 'copyright.php';

include_once 'footerbibliotekos.php';

 ?>
