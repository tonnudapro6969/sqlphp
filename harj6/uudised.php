



<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="uudised.php">uudised</a>
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



<?php
// Server connection details
$server = 'localhost';
$dbuser = 'tonis';
$dbpass = 'tonis';
$db = 'muusikapood tonis';
$yhendus = mysqli_connect($server, $dbuser, $dbpass, $db);
if (!$yhendus) {
 die('probleem andmebaasiga');
}

// Maximum number of news items per page
$uudiseid_lehel = 10;

// Calculate total pages
$uudiseid_kokku_paring = "SELECT COUNT(id) FROM uudised";
$lehtede_vastus = mysqli_query($yhendus, $uudiseid_kokku_paring);
$uudiseid_kokku = mysqli_fetch_array($lehtede_vastus);
$lehti_kokku = ceil($uudiseid_kokku[0] / $uudiseid_lehel);

// Display total pages and news items per page
echo 'Lehekülgi kokku: '.$lehti_kokku.'<br>';
echo 'Uudiseid lehel: '.$uudiseid_lehel.'<br>';

// User page selection
$leht = isset($_GET['page']) ? $_GET['page'] : 1;

// Determine the starting point for fetching news items
$start = ($leht - 1) * $uudiseid_lehel;

// Fetch news items from the database
$paring = "SELECT * FROM uudised LIMIT $start, $uudiseid_lehel";
$vastus = mysqli_query($yhendus, $paring);

// Display news items
while ($rida = mysqli_fetch_assoc($vastus)) {
 echo '<h3>'.$rida['pealkiri'].'</h3>';
 echo '<p>'.$rida['tekst'].'</p>';
}

// Page navigation links
$eelmine = $leht - 1;
$jargmine = $leht + 1;

if ($leht > 1) {
 echo "<a href=\"?page=$eelmine\">Eelmine</a> ";
}

if ($lehti_kokku >= 1) {
 for ($i = 1; $i <= $lehti_kokku; $i++) {
   if ($i == $leht) {
     echo "<b><a href=\"?page=$i\">$i</a></b> ";
   } else {
     echo "<a href=\"?page=$i\">$i</a> ";
   }
 }
}

if ($leht < $lehti_kokku) {
 echo "<a href=\"?page=$jargmine\">Järgmine</a> ";
}
?>
