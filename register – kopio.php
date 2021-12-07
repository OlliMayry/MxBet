<?php
include_once 'header.php';
?>

<div class=position-relative2>
<section class="signup-form">
    <div class="signup-form-form">
<h2>Register to MxBet</h2>

<form action="includes/register.inc.php" method="post">
<p><input type="text" name="name" placeholder="Full name..."></p>
<p><input type="text" name="email" placeholder="Email..."></p>
<p><input type="text" name="uid" placeholder="Username..."></p>
<p><input type="password" name="pwd" placeholder="Password..."></p>
<p><input type="password" name="pwdrepeat" placeholder="Repeat password..."></p>
<p><button class="btn btn-primary" type="submit" name="submit">Register</button></p>
</form>
</div>

    <?php
    if (isset($_GET["error"])){
        if ($_GET["error"] == "emptyinput") {
            echo "<p>Fill in all fields!</p>";
        }
    else if ($_GET["error"] == "invaliduid") {
        echo "<p>Choose a proper username!</p>";
    }
    else if ($_GET["error"] == "invalidemail") {
        echo "<p>Choose a proper email!</p>";
    }
    else if ($_GET["error"] == "passwordsdontmatch") {
        echo "<p>Passwords doesn't match!</p>";
    }
    else if ($_GET["error"] == "stmtfailed") {
        echo "<p>Something went wrong, try again!</p>";
    }
    else if ($_GET["error"] == "usernametaken") {
        echo "<p>Username already taken!</p>";
    }
    else if ($_GET["error"] == "none") {
        echo "<p>You have registered to MxBEt!</p>";
    }
}
    ?>
</section>
</div>

<?php
include_once 'footer.php';
?>
