


<?php
include ("config.php");
?>

<?php 
//loome sessiooni ja lisame sinna suvalise arvu 
session_start(); 
$_SESSION['captchatekst'] = rand(1000,9999); 
//muudab dokumendi pildiks 
header('Content-type: image/jpeg'); 
//omistame sessiooni väärtuse muutujasse 
$tekst = $_SESSION['captchatekst']; 
//teksti parameetrid 
$teksti_suurus = 20; 
$laius = 80; 
$korgus = 40; 
//loome pildi 
$pilt = imagecreate($laius, $korgus); 
//tausta värv 
imagecolorallocate($pilt, 255, 255, 255); 
//teksti värv 
$teksti_varv = imagecolorallocate($pilt, 0, 0, 0); 
//joonistame suvalised jooned 
for ($i=1; $i<=40 ; $i++) {  
	$x1 = rand(1,100); 
	$y1 = rand(1,100); 
	$x2 = rand(1,100); 
	$y2 = rand(1,100); 
	imagesetthickness($pilt, 2); 
	imagedashedline($pilt, $x1, $y1, $x2, $y2, $teksti_varv); 
} 
//lisame pildile soovitud parameetrud
//imagettftext(pilt, teksti_suurus, kalddenurk, x, y, teksti_värv, fondifail, tekst)
imagettftext($pilt, $teksti_suurus, 0, 10, 25, $teksti_varv, 'OpenSans-ExtraBold.ttf', $tekst);
imagejpeg($pilt);
?>













<!-- // session_start();
// //kuni ei ole väljad täidetud, saadame tühja stringi
// $vnimi="";
// $vemail="";
// $vsonum="";
// //kas väljad on täidetud
// if (isset($_POST['nimi']) && isset($_POST['email']) && isset($_POST['sonum'])) {
	//andmed vormist
	// $nimi = trim(addslashes($_POST['nimi']));
	// $email = trim(addslashes($_POST['email']));
	// $sonum = trim(addslashes($_POST['sonum']));
	// //kui kasutaja on midagi sisestanud, siis jäetakse need "meelde"
	// $vnimi=$nimi;
	// $vemail=$email;
	// $vsonum=$sonum;
	// //kas väljad on tühjad
	// if (!empty($nimi) && !empty($email) && !empty($sonum)) {
		// //kas vastavad soovitud pikkusele
		// if (strlen($nimi)>25 || strlen($email)>25 || strlen($sonum)>500 ) {
		// 	echo'Tekstid on liiga pikad või email on valesti!';
		// } else {
		// 	//emaili andmed
		// 	$to = 'ton@gmail.com';
		// 	$subject = 'Tagasiside kodulehelt';
		// 	$message = $sonum;
		// 	$from = 'From: '.$nimi.'<'.$email.'>';
		// 	//CAPTCHA kontroll
		// 	if ($_POST['kood']==$_SESSION['captchatekst']) {
				//kas emaili saatmine õnnestus
// 				if(mail($to, $subject, $message, $from)){
// 					echo "Email saadetud!<br>Täname tagasiside eest!";
// 					echo "<meta http-equiv=\"refresh\" content=\"2;URL='10_email.php'\">";
// 					exit();
// 				} else {
// 					echo "Teie emaili ei saadetud ära!";
// 				}
// 			} else{
// 				echo "Turvakood on vale!";
// 			} 
// 		}