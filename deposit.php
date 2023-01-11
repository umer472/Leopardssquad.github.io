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
        .column{
            margin-top:60px;
        }
        </style>
<div class="column is offset-4 is-5-desktop">



</div>
<div class="field">
    <h2 class="has-text-centered is-size-4 has-text-weight-semibold pt-4">DEPOSIT INTO WALLET</h2>
    <hr>
    <form>
    <label class="has-text-weight-bold is-size-4">Amount</label>
  <p class="control has-icons-left has-icons-right mt-4">
    <input class="input" type="email" placeholder="Amount">
    <span class="icon is-small is-left">
    <i class="fa-solid fa-naira-sign"></i> 
    </span>
    <span class="icon is-small is-right">
     
    <i class="fas fa-check"></i>
    </span>
  </p>
</div>
<div class="field">
        <label class="has-text-weight-bold is-size-4">Account number</label>
        <p class="control has-icons-left mt-4">
        <input class="input" type="password" placeholder="No#trds45CGYTRW....">
         <span class="icon is-small is-left">
         
         <i class="fas fa-lock"></i>
         </span>
      </p>
      <button class="has-text-weight-bold button btn is-primary is-fullwidth mt-6">Deposit</button>
    </div>



</form>

</body>

</html>    