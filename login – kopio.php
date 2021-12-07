<?php
include_once 'header.php';
?>

<div class = position-relative2>
<section class="signup-form">
    <div class="signup-form-form">
<h2>Login to MxBet</h2>
<hr>

<form action="includes/login.inc.php" method="post">
<p><input type="text" name="uid" placeholder="Username/Email..."></p>
<p><input type="password" name="pwd" placeholder="Password..."></p>
<button class="btn btn-primary" type="submit" name="submit">Login</button>
</form>
<hr>
</div>


<?php
    if (isset($_GET["error"])){
        if ($_GET["error"] == "emptyinput") {
            echo "<p>Fill in all fields!</p>";
        }
    else if ($_GET["error"] == "wronglogin") {
        echo "<p>Incorrect login information!</p>";
    }
}
    ?>
</section>
</div>

<?php
include_once 'footer.php';
?>