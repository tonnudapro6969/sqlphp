<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>harjutus6 login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="login.php">login</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">index</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="uudis.php">uudised</a>
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



    
<?php include('config.php'); ?>
<?php
 session_start();
 if (isset($_SESSION['tuvastamine'])) {
   header('Location: admin.php');
   exit();
   }
   //kontrollime kas väljad on täidetud
 if (!empty($_POST['login']) && !empty($_POST['pass'])) {
 //eemaldame kasutaja sisestusest kahtlase pahna
 $login = htmlspecialchars(trim($_POST['login']));
 $pass = htmlspecialchars(trim($_POST['pass']));
 //SIIA UUS KONTROLL
 $sool = 'taiestisuvalinetekst';
 $kryp = crypt($pass, $sool);
 //kontrollime kas andmebaasis on selline kasutaja ja parool
 $paring = "SELECT * FROM kasutajad WHERE kasutajanimi='$login' AND kasutajaparool='$kryp'";
 $valjund = mysqli_query($sqluhendus, $paring);
 //kui on, siis loome sessiooni ja suuname
 if (mysqli_num_rows($valjund)==1) {
 $_SESSION['tuvastamine'] = 'misiganes';
 header('Location: admin.php');
 } else {
 echo "kasutaja või parool on vale";
 }
 }
?>
<h1>Login</h1>
<form action="" method="post">
 Login: <input type="text" name="login"><br>
 Password: <input type="password" name="pass"><br>
 <input type="submit" value="Logi sisse">
</form>
<h6> usernim: tonis passwurt: tonis</h6>



       <?php
$sqluhendus->close();
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
