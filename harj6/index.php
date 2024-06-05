<?php
include ("config.php");
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="admin.php">admin</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">index</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="uudised.php">uudised</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="login.php">logis sisse</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="logout.php">logi välja</a>
        </li>

      </ul>
    </div>
  </div>
</nav>
            
<div class="container">
            
            <h1>avaleht?</h1>
            <hr>
        
        <h2>tagasiside vorm</h2>
        <form action="#" method="get">
            <label for="nimi"> nimi:</label><br>
            <input type="text" name="nimi" id="nimi"><br>
            <label for="email"> email:</label><br>
            <input type="text" name="email" id="email"><br>
            <label for="sonum">sonum:</label><br>
            <textarea cols="30" rows="10" name="sonum" id="sonum"></textarea><br>
            <img src="captcha.php"><br>
            <label for="kood">Sisesta captcha:</label><br>
            <input type="text" name="kood" id="kood"><br>
            <input type="submit" class="btn btn-success my-2" value="Saada">
        </form>
        <?php
        if(!empty($_GET['nimi']) && !empty($_GET['email']) && !empty($_GET['sonum'])){
            $nimi = $_GET['nimi']; 
            $email = $_GET['email'];
            $sonum = $_GET['sonum'];

            $to = 'tonis.kandmaa@gmail.com'; 
            $subject = 'midagimidagi ulesanne'; 
            $message = $sonum; 
            $from = 'From: '.$nimi.'<'.$email.'>'; 

            if ($_GET['kood']==$_SESSION['captchatext']){
                if(mail($to, $subject, $message, $from)){ 
                    echo "Email saadetud!<br>Täname tagasiside eest!"; 
                    echo "<meta http-equiv=\"refresh\" content=\"2;URL='index.php'\">"; 
                    exit(); 
                } else { 
                    echo "Teie emaili ei saadetud ära!"; 
                }
            }
        }
        ?>






<?php
        $sqluhendus->close();
        ?>


        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>