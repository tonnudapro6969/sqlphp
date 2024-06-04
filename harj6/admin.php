<?php
session_start();
if (!isset($_SESSION['tuvastamine'])) {
    header("Location: login.php");
    exit;
}
var_dump($_SESSION);
include("config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

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

    <div class="container">
    <h2>Registreeri uus kasutaja</h2>        
        <form action="#" method="get">
            <label for="username">Kasutajanimi:</label>
            <input type="text" name="username" id="username" required><br>
            <label for="parool">Parool:</label>
            <input type="password" name="parool" id="parool" required><br>
            <input type="submit" class="btn btn-success my-2" value="Registreeri">
        </form>

    
    

        <?php
        if(!empty($_GET['username']) && !empty($_GET['parool'])){
            $username = htmlspecialchars($_GET["username"]);
            $parool = htmlspecialchars($_GET["parool"]);

            $query = "SELECT COUNT(*) as count FROM kasutajad WHERE kasutajanimi = '$username'";
            $result = $sqluhendus->query($query);
            $user_count = $result->fetch_assoc()["count"];

            if ($user_count > 0) {
                echo "Kasutajanimi võetud!";
            } else{
                if (strlen($parool) < 8) {
                    echo "8 tähemärki!";
                } else{
                    $hashed = password_hash($parool, PASSWORD_DEFAULT);
                    $lisasql = "INSERT INTO kasutajad (kasutajanimi, kasutajaparool) VALUES ('$username', '$hashed')";
                    $stmt = $sqluhendus->prepare($lisasql);

                    if(password_verify($parool, $hashed)){
                        if ($sqluhendus->query($lisasql) === TRUE) {
                            // echo "Korras";
                            header("Location: admin.php");
                            exit;
                        }
                    }  
                }
            }
        }
        ?>


        <?php
        $sqluhendus->close();
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
