<?php
session_start();
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet"> 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/mxbet.css">
  <title>Mxbet Homepage</title>
</head>
<body>
  <div class="container">
    <div class="header">
      <a>
    <img src="img/mxbet.png" alt="" width="100" height="88" class="d-inline-block">
  </a>
    </div>
    <ul class="nav nav-pills">
      <li class="nav-item">
        <a class="nav-link active" href="MxBet.php">Home</a>
      </li>
      <?php
      if (isset($_SESSION["useruid"])) {
echo "<a href='profile.php' class='btn btn-link'>Profile page</a>";
echo "<a href='includes/logout.inc.php' class='btn btn-danger'>Log out</a>";
      }
      else {
        echo "<li><a href='login.php' class='btn btn-link'>Login</a></li>";
        echo "<li><a href='register.php' class='btn btn-link'>Register</a></li>";
      }
?>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
          aria-expanded="false">Account</a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="profile.php">My Account</a>
          <a class="dropdown-item" href="#">Deposit</a>
          <a class="dropdown-item" href="#">Withdraw</a>
          <a class="dropdown-item" href="#">Bank</a>
          <a class="dropdown-item" href="#">History</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </ul>
  </div>
