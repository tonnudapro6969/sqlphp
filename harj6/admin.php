<?php
session_start();
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: login.php");
    exit;
}

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
    <div class="container">
        <h2>Register New User</h2>
        <form action="#" method="post">
            <label for="new_username">Uus Kasutajanimi:</label>
            <input type="text" name="new_username" id="new_username" required><br>
            <label for="new_parool">Uus Parool:</label>
            <input type="password" name="new_parool" id="new_parool" required><br>
            <input type="submit" class="btn btn-success my-2" value="Register">
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $new_username = htmlspecialchars($_POST["new_username"]);
            $new_parool = htmlspecialchars($_POST["new_parool"]);

            if (strlen($new_parool) < 8) {
                echo "Parool peab olema vähemalt 8 tähemärki pikk.";
            } else {
                $stmt = $sqluhendus->prepare("SELECT COUNT(*) FROM kasutajad WHERE kasutajanimi = ?");
                $stmt->bind_param("s", $new_username);
                $stmt->execute();
                $stmt->bind_result($count);
                $stmt->fetch();
                $stmt->close();

                if ($count > 0) {
                    echo "Kasutajanimi on juba olemas.";
                } else {
                    $hashed_parool = password_hash($new_parool, PASSWORD_DEFAULT);

                    $stmt = $sqluhendus->prepare("INSERT INTO kasutajad (kasutajanimi, kasutajaparool) VALUES (?, ?)");
                    $stmt->bind_param("s", $new_username);
                    $stmt->bind_param("s", $hashed_parool);
                    if ($stmt->execute()) {
                        echo "Uus kasutaja edukalt registreeritud.";
                    } else {
                        echo "Viga kasutaja registreerimisel.";
                    }
                    $stmt->close();
                }
            }
        }

        $sqluhendus->close();
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
