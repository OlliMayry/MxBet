<?php
include_once 'header.php';
?>

<section class="signup-form">
<h2>Register to MxBet</h2>
<div class="signup-form-form">
<form action="includes/register.inc.php" method="post">
<input type="text" name="name" placeholder="Full name...">
<input type="text" name="email" placeholder="Email...">
<input type="text" name="uid" placeholder="Username...">
<input type="password" name="pwd" placeholder="Password...">
<input type="password" name="pwdrepeat" placeholder="Repeat password...">
<button type="submit" name="submit">Register</button>
</form>
<div>
</section>

<?php
include_once 'footer.php';
?>
