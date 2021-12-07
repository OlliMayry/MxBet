<?php

if (isset($_POST["submit"])) {

$name = $_POST["name"];
$email = $_POST["email"];
$username = $_POST["uid"];
$pwd = $_POST["pwd"];
$pwdRepeat = $_POST["pwdrepeat"];


require_once 'dbh.inc.php';
require_once 'functions.inc.php';

if (emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat) !== false) {
  header("location: ../register.php?error=emptyinput");
  exit();
}
if (invalidUid($username) !== false) {
  header("location: ../register.php?error=invalidUid");
  exit();
}
if (invalidEmail($email) !== false) {
  header("location: ../register.php?error=invalidEmail");
  exit();
}
if (pwdMatch($pwd, $pwdRepeat) !== false) {
  header("location: ../register.php?error=passwordsdontmatch");
  exit();
}
if (uidExsists($conn, $username, $email) !== false) {
  header("location: ../register.php?error=usernametaken");
  exit();
}

createUser($conn, $name, $username, $email, $pwd);

}
else{
  header("location: ../register.php");
  exit();
}