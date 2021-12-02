<?php
include_once 'header.php';
?>

<section class="signup-form">
<h2>Login to MxBet</h2>
<div class="signup-form-form">
<form action="login.inc.php" method="post">
<input type="text" name="uid" placeholder="Username...">
<input type="password" name="pwd" placeholder="Password...">
<button type="submit" name="submit">Login</button>
</form>
</div>
</section>

<?php
include_once 'footer.php';
?>