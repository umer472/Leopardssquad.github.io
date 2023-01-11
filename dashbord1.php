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
    <style>
        body{
            background-color: goldenrod;
        }
    </style>
<section class="column">
    <div class="card column is-4-desktop">
        
    
    </div>
<form action="showed" method="post">
    <div class="card-content">
        <p class="pb-4 has-text-weight-semibold">FULLNAME</p>
        <p class="pb-4 has-text-weight-semibold">E-mail</p>
        <p class="pb-4 has-text-weight-semibold">Account Balance</p>
        <p class="pb-4 has-text-weight-semibold">Account Number</p>
        </form>
        <form class="" action="logout.php">
       
            <button class="is-small button is-info"><a href="hurain.php"> logout</a></button>
        </form>
    </div>
<div class="card-column">
<header class="card header"><div class="card-header-title ">Transfer & Payment</div></header>
<div class="card-content">
    <div class="columns">
        <form action="" method="post" class="column">
            <div class="first"></div>
      <h1 class="second has-text-weight-semiboldpl-6 pb-4 has-teext-centered">Send Funds to Others</h1>
      <label class="has-text-weight-bold">Receiver Account Number</label>
    <input type="text" name="" class="input receive mt-4"><br>
    <div class="field">
<label class="is-normal">Amount to Send</label>  
<p class="control has-icons-left">
    <input class="input" type="text" placeholder="Amount to Send">
    <span class="icon is-small is-left">
      <i class="fa-solid fa-naira-sign"></i>
    </span>
  </p>
</div>
<div class="button is-dark is-fullwidth mt-5">Transfer</div>
<button class=""></button>
    </form>
    </div>
</div>
</div>

</section>



</body>
</html>