<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="preconnect" href="https://googleapis.com">

<link rel="preconnect" href="https://googleapis.com"crossorigin>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" 
integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" 
crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;1,400&display=swap" rel="stylesheet">
   <title>TRAX WALLET</title>
   


</head>
<body>
<style type="text/css">
    
    body{
      background-color: goldenrod;
    }
    form{
      box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px ;
    }
    .navbar{
         background-color:#000;
    }
    .navbar a{
        color:white;
      }
    </style>
<nav class="navbar is-fixed-top" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="hurain.html">
    <header class="has-text-weight-semibold">CREATE TRAX WALLET</header>
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
          <a class="button has-text-weight-semibold is-dark">
            Signup
          </a>
        </div>
      </div>
    </div>
  </div>
</nav>
<form action=""method="post"class="column mt-6 is-offset-4 is-5-desktop">
    <h1 class="has-text-centered is-size-4 has-text-weigth-semibold">CREATE TRAX WALLET</h1>
    <i class="fa-solid fa-money-bill-transfer mt-6" style="font-size:50px;"></i>


    <div class="field mt-6">
      <label class="is-normal">Full Name</label>
    <p class="control has-icons-left has-icons-right">
    <input class="input" type="email" placeholder="Name">
    <span class="icon is-small is-left">
      <i class="fas fa-user"></i>
    </span>
    <span class="icon is-small is-right">
      <i class="fas fa-check"></i>
    </span>
  </p>
</div>
<div class="field">
<label class="is-normal">Second Name</label>  
<p class="control has-icons-left">
    <input class="input" type="password" placeholder="Password">
    <span class="icon is-small is-left">
      <i class="fas fa-user"></i>
    </span>
  </p>
</div>
<div class="field mt-6">
<label class="is-normal">E-mail</label>  
<p class="control has-icons-left">
    <input class="input" type="email" placeholder="email">
    <span class="icon is-small is-left">
      <i class="fas fa-envelope"></i>
    </span>
  </p>
</div>
<div class="field">
<label class="is-normal">Code</label>  
<p class="control has-icons-left">
    <input class="input" type="password" placeholder="code">
    <span class="icon is-small is-left">
      <i class="fas fa-lock"></i>
    </span>
  </p>
</div>
<div class="field">
<label class="is-normal">Re-typecode</label>  
<p class="control has-icons-left">
    <input class="input" type="password" placeholder="re-typecode">
    <span class="icon is-small is-left">
      <i class="fas fa-lock"></i>
    </span>
  </p>
</div>
<div class="field">
<label class="is-normal">Phone</label>  
<p class="control has-icons-left">
    <input class="input" type="password" placeholder="phone">
    <span class="icon is-small is-left">
      <i class="fas fa-phone"></i>
    </span>
  </p>
</div>

<div class="field">
<label class="is-normal">Date of birth</label>  
<p class="control has-icons-left">
    <input type="date" type="password" >
    <span class="icon is-small is-left">
      
    </span>
  </p>
</div>
<div class="field">
<label class="is-normal">Refferal link</label>  
<p class="control has-icons-left">
    <input class="input" type="password" placeholder="refferal link">
    <span class="icon is-small is-left">
      <i class="fas fa-link"></i>
    </span>
  </p>
</div>

<button  class="is-fullwidth button is-info has text weight semibold mt-6"><a href="dashbord1.php"> Create Account

</a></button>
<h1 class="has-text-centered">Already have an Account ?<a href="hurain.php">Log in</a></h1>



</form>

</body>
</html>    