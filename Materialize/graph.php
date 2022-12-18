<?php
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
$nama = mysqli_query($link, "SELECT nama FROM dashboard");
$sks = mysqli_query($link, "SELECT sks FROM dashboard");

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
            <div class="col s12">
                <canvas id="myChart" width="400" height="400"></canvas>
            </div>
        </div>

    </div>
    <!-- Main Ends-->

    <!-- Scripts Starts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js "></script>
    <script src="js/materialize.js "></script>
    <script src="js/init.js "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.min.js" integrity="sha512-Wt1bJGtlnMtGP0dqNFH1xlkLBNpEodaiQ8ZN5JLA5wpc1sUlk/O5uuOMNgvzddzkpvZ9GLyYNa8w2s7rqiTk5Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <?php
        while($row = mysqli_fetch_array($result))
        {
    ?>
    <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                
                labels: [<?php while ($p = mysqli_fetch_array($nama)) { echo '"' . $p['nama'] . '",';}?>],
                datasets: [{
                    label: 'SKS',
                    data: [<?php while ($p = mysqli_fetch_array($sks)) { echo '"' . $p['sks'] . '",';}?>],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                   
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
    <?php
                        }
                        ?>
    <!-- Scripts Ends-->

</body>

</html>
