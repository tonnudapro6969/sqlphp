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
 <?php     
$vnimi="";
$vemail="";
$vsonum="";
//kas väljad on täidetud
if (isset($_POST['nimi']) && isset($_POST['email']) && isset($_POST['sonum'])) {
	//andmed vormist
	$nimi = trim(addslashes($_POST['nimi']));
	$email = trim(addslashes($_POST['email']));
	$sonum = trim(addslashes($_POST['sonum']));
	//kui kasutaja on midagi sisestanud, siis jäetakse need "meelde"
	$vnimi=$nimi;
	$vemail=$email;
	$vsonum=$sonum;
	//kas väljad on tühjad
	if (!empty($nimi) && !empty($email) && !empty($sonum)) {
		//kas vastavad soovitud pikkusele
		if (strlen($nimi)>25 || !preg_match("/^[a-z0-9]((\.|_)?[a-z0-9]+)+@([a-z0-9]+(\.|-)?)+[a-z0-9]\.[a-z]{2,}$/", strtolower($email)) || strlen($sonum)>500 ) {
			echo'Tekstid on liiga pikad või email on valesti!';
		} else {
			//emaili andmed
			$to = 'tonis.kandmaa@gmail.com';
			$subject = 'Tagasiside kodulehelt';
			$message = $sonum;
			$from = 'From: '.$nimi.'<'.$email.'>';
			//CAPTCHA kontroll
			if ($_POST['kood']==$_SESSION['captchatekst']) {
				//kas emaili saatmine õnnestus
				if(mail($to, $subject, $message, $from)){
					echo "Email saadetud!<br>Täname tagasiside eest!";
					echo "<meta http-equiv=\"refresh\" content=\"2;URL='10_email.php'\">";
					exit();
				} else {
					echo "Teie emaili ei saadetud ära!";
				}
			} else{
				echo "Turvakood on vale!";
			} 
		}
	} else {
		$error = 'Palun täida kõik väljad!';
	}
}
?>
<h2>Tagasiside</h2>
<form action="" method="post">
	Teie nimi:<br>
	<input name="nimi" type="text" value="<?php echo $vnimi; ?>"><br>
	Teie email:<br>
	<input name="email" type="text" value="<?php echo $vemail; ?>"><br>
	Sõnum:<br>
	<textarea cols="30" rows="10" name="sonum"><?php echo $vsonum; ?></textarea><br>
	<img src="captcha.php"><br>
  Sisesta kood pildilt:<br>
  <input name="kood" type="text"><br>
	<input value="saada sõnum" type="submit">
</form>






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