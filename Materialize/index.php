<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title>Starter Template - Materialize</title>

  <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

    
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
    
    <div class="container">
    <div class="section">

      <!--   Icon Section  -->
      <div class="row">       
        <div class="col s12 m6 l3">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">table_rows</i></h2>
            <div style="text-align: center">
              <a href="https://pwebmuhalwan.000webhostapp.com/dashboard.php">Dashboard</a>
            </div>
          </div>
        </div>
        
        <div class="col s12 m6 l3">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">person</i></h2>
            <div style="text-align: center">
              <a href="https://pwebmuhalwan.000webhostapp.com/database.php">Profile</a>
            </div>
          </div>
        </div>

        <div class="col s12 m6 l3">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">leaderboard</i></h2>
            <div style="text-align: center">
              <a href="https://pwebmuhalwan.000webhostapp.com/graph.php">Graph</a>
            </div>
          </div>
        </div>
      </div>
    </div>
      <br><br>
    </div>
      <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
      </p>
</body>
</html>