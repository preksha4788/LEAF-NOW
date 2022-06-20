<?php
session_start();
include 'partials/_dbconnect.php';
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <title>Customer Profile</title>
    <style>
    body {
          /* The image used */
          background-image: url("custre.jpg");

         /* Full height */
          height: 100%;

          /* Center and scale the image nicely */
          /* background-position: center; */
          background-repeat: no-repeat;
          background-size: cover;
          font-family: 'Lobster', cursive;
         }
         </style>
  </head>
  <body>
  <?php require 'partials/_navcust.php' ?>

<h3 class= "text-center my-4" style="font-size: 400%;">Customer Profile</h3>
<div class="container my-4">


    <table class="table" id="myTable" style="margin-top: 150px;box-shadow: 10px 10px 10px black;">
      <thead>
        <tr>
          <th scope="col" style="font-size: 250%;">Username</th>
          <th scope="col" style="font-size: 250%;">First Name</th>
          <th scope="col" style="font-size: 250%;">Last Name</th>
          <th scope="col" style="font-size: 250%;">Phone</th>
          <th scope="col" style="font-size: 250%;">Email</th>
          <th scope="col" style="font-size: 250%;">DOB</th>
        </tr>
      </thead>
      <tbody>
        <?php 
          
          $sql = "SELECT * FROM `customer`";
          $result = mysqli_query($conn, $sql);
          while($row = mysqli_fetch_assoc($result)){
            if($row['c_username']==$_SESSION['username']){
            echo "<tr>
            <td>". $row['c_username'] . "</td>
            <td>". $row['f_name'] . "</td>
            <td>". $row['l_name'] . "</td>
            <td>". $row['c_phone'] . "</td>
            <td>". $row['email'] . "</td>
            <td>". $row['c_dob'] . "</td>
          </tr>";
        }
    } 
          ?>
       </tbody>
    </table>
  </div>
  <hr>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    

  </body>
</html>