<?php
include_once 'loginheader.php';
 ?>





<section>
    <div>
        <br /><br /><br /><h2 class="center">Jei dar neesi užsiregistravęs, užsiregistruok</h2><br><br>
        <form class="signup-form center" action="includes/signup.inc.php" method="POST">
            <input type="text" name="first" placeholder="Vardas"><br />
            <input type="text" name="last" placeholder="Pavarde"><br />
            <input type="text" name="email" placeholder="email"><br />
            <input type="text" name="uid" placeholder="Username"><br />
            <input type="password" name="pwd" placeholder="Slaptazodis"><br />
            <button type="submit" name="submit">Sign up</button><br><br><br><br /><br />
        </form>
    </div>
</section>
</div>
<?php
include_once 'loginfooter.php';
include_once 'copyright.php';
 ?>
