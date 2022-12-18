<?php

session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}   

$servername = "localhost";
$username = "id17867745_muhalwan";
$password = "Ayamgoreng12@";
$dbname = "id17867745_pweb";

// Create connection
$link = new mysqli($servername, $username, $password, $dbname);
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$sql = "SELECT * FROM dashboard";
$result = $link->query($sql);

mysqli_close($link);

date_default_timezone_set('Asia/Jakarta');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Starts  -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Ini adalah website untuk Pemrograman Web Kelas B">
    <meta name="author" content="Muhammad Alwan">
    <meta name="theme-color" content="#fff" />
    <title>Website Pemrograman Web Kelas B</title>
    <!-- Meta Ends  -->

    <!-- CSS Starts -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <!-- CSS Ends -->
</head>

<body>

    <!-- Main Starts-->
    <br><br>
    <div class="container">
        <div class="row center">
            <div class="col s4">
                <img class="responsive-img" src="images/its-logo.png">
            </div>
            <div class="col s4 offset-s4" style=" margin-top:70px; ">
                <a class="waves-effect waves-light btn disabled"><i class="material-icons right">cloud</i><?php echo date('d-m-Y H:i:s');?></a>
            </div>
        </div><br><br>

        <div class="row center">
            <div class="col s3">
                <!--<div class="row">
                    <a class="waves-effect waves-light btn disabled black-text" style=" background-color: #01579b !important; color: black !important;"><i class="material-icons right">directions_car</i>Mobil 1</a>
                </div>
                <div class="row">
                    <a class="waves-effect waves-light btn disabled black-text" style=" background-color: #a7ffeb  !important;  color: black !important;"><i class="material-icons right">directions_car</i>Mobil 2</a>
                </div>-->
                <div class="row">
                    <a href="graph.php" class="waves-effect waves-light btn lime accent-1 black-text" style=" margin-top:70px; "><i class="material-icons right">equalizer</i>Graph</a>
                </div>
                <div class="row">
                    <a class="waves-effect waves-light btn light-blue accent-1 black-text"><i class="material-icons right">expand_more</i>Export</a>
                </div>
                <div class="row">
                    <a href="logout.php" class="waves-effect waves-light btn orange darken-4 black-text"><i class="material-icons right">exit_to_app</i>Logout</a>
                </div>
            </div>
            <div class="col s9">
                <table class="highlight centered responsive-table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nama</th>
                            <th>Semester</th>
                            <th>SKS</th>
                        </tr>
                    </thead>

                    <?php
                        while($row = mysqli_fetch_array($result))
                        {
                    ?>
                    <tbody>
                        <tr >
                            <td style="text-align:center"><?php echo $row['No'];?></td>
                            <td style="text-align:center"><?php echo $row['Nama'];?></td>
                            <td style="text-align:center"><?php echo $row['Semester'];?></td>
                            <td style="text-align:center"><?php echo $row['SKS'];?></td>
                        </tr>
                    </tbody>
                    <?php
                        }
                        ?>
                </table>
            </div>
        </div>

    </div>
    <!-- Main Ends-->

    <!-- Scripts Starts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js "></script>
    <script src="js/materialize.js "></script>
    <script src="js/init.js "></script>
    <!-- Scripts Ends-->
</body>

</html>