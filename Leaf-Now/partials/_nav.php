<?php

if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']=true){
    $loggedin = true;
}
else{
  $loggedin = false;
}
echo'<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#" style="font-size:300%"><img src="R.png" width="100px" hieght ="100px" style="border-radius: 200px;"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php" style="font-size:200%">Home <span class="sr-only">(current)</span></a>
      </li>';
      if(!$loggedin){
      echo '<li class="nav-item">
        <a class="nav-link" href="login.php" style="font-size:200%">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="signup.php" style="font-size:200%">Signup</a>
      </li>';
      }
      if($loggedin){
      echo'<li class="nav-item">
        <a class="nav-link" href="logout.php" style="font-size:200%">Logout</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="cust_profile.php" style="font-size:200%">Your Profile</a>
      </li>';
      }
      
    
  echo'</div>
</nav>';

?>