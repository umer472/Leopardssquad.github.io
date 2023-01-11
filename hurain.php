<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   
   <title>TRAX WALLET</title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
</head>
<body>
   <style type="text/css">
    body{
      background-color: goldenrod;
    }
      .navbar{
         background-color:black;
      }
      .navbar a{
        color:white;
      }
   </style>
<nav class="navbar is-fixed-top" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="hurain.html">
    <header class="has-text-weight-semibold">TRAX WALLET</header>
    </a>

    <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>

  <div id="navbarBasicExample" class="navbar-menu"   >
    <div class="navbar-start" style="margin: left 70px;">
     
      
        <div class="buttons">
          <a href="deposit.php" class="button is-primary is dark has-text-weight-semibold mr-6">
            <strong>Deposit</strong>
          </a>
          <a href="createwallet.php" class="button has-text-weight-semibold is-dark">
            Signup
          </a>
        </div>
      </div>
    </div>
  </div>
</nav>
<section class="columns mt-6">
<div class="hero column is-7-desktop">
  <div class="hero body">
    <h1 class="is-size-1 has-text-weight-semiibold has-text-white manage">Manage your Account with TRAX WALLET</h1>
      <div class="is-flex mt-6">
        <button class="button">Get Started</button>
        <button class="button ml-4">buy your Crypto</button>
      </div>
  </div>
</div>
<div class="column hero is-5-desktop mt-6">
  <div class="hero body has-background-light">
    <h1 class="is-size-4 has-text-weight-semibold has-text-centered">Welcome back</h1>
    <form class="field" method="post"action="">
      <div class="second"></div>
      <input type="text" class="input is-size-5 mt-5 email"placeholder="email"name="">

      <input type="password" class="input is-size-5 mt-5 password"placeholder="password"name="">
     <button  class="button btn has-text-weight-semibold is halfwidth is-info is-size-6 mt-6 "><a href="dashbord1.php">Sign In</a></button>

    </form>
  </div>
</div>
</section>
</body>
</html>