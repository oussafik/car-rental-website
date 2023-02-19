<?php 
    extract($_POST);
    if (isset($btn)) {
      $con = mysqli_connect('localhost:3308', 'root', '', 'location');
        $query = "INSERT INTO client values(null, '$nom', '$prenom', '$tele','$city', '$email', '$password')";
        mysqli_query($con, $query);
        echo "<script>alert('Good job!!')</script>";
        header('location:index.php');
    }
    else
    {
      echo"<script>alert('VUILLER REMPLIRE LA FORMULAIRE!!')</script>";
    }
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="./image/fav.ico"/>

    <link rel="stylesheet" href="css/11.css">
    <title>create new account</title>
</head>
<body>

<div class="modal-wrap">
  <div class="modal-header"><span class="is-active"></span><span></span><span></span></div>
  <div class="modal-bodies">
    <div class="modal-body modal-body-step-1 is-showing">
      <div class="title">New user account</div>
      <form action="" method="POST">
            
            <input  required="text" type="text" name="nom" placeholder="First Name" ><br>
            <input  required="text" type="text" name="prenom" type="prenom" placeholder="Last Name" ><br>
            <input  required="text" type="text" name="tele" placeholder="Phone" ><br>
            <input  required="text" type="text" name="city" placeholder="city" ><br>
            <input  required="text" type="email" name="email" placeholder="E-mail" ><br>
            <input required="text" type="password" name="password" placeholder="password" ><br>
            <input type="submit"  name="btn" value="create" class="submit">
            <p><a href="index.php"><--BACK</a></p>
            
    </div>
  
  </div>
</div>
<div class="text-center">
  <div class="rerun-button">ReRun</div>
</div>
<script src="js/create1.js"></script>
</body>
</html>