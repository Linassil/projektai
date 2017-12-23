<?php
include_once 'loginheader.php';
 ?>

<section class="main-container">
    <div class="main-wrapper">
        <h2>Signup</h2>
        <form class="signup-form" action="includes/signup.inc.php" method="POST">
            <input type="text" name="first" placeholder="Vardas">
            <input type="text" name="last" placeholder="Pavarde">
            <input type="text" name="email" placeholder="email">
            <input type="text" name="uid" placeholder="Username">
            <input type="password" name="pwd" placeholder="Slaptazodis">
            <button type="submit" name="submit">Sign up</button>
        </form>
    </div>
</section>

<?php
include_once 'loginfooter.php';
 ?>
