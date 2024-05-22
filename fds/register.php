<?php include('config.php'); ?>


<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kasutaja = $_POST['kasutaja'];
    $parool = $_POST['parool'];

    // Kontrolli, kas kasutaja juba eksisteerib
    $sql = "SELECT COUNT(*) FROM kasutajad WHERE kasutajanimi = ?";
    $stmt = $sqluhendus->prepare($sql);
    if ($stmt === false) {
        die("Valmistamise ebaõnnestus: " . $sqluhendus->error);
    }
    
    $stmt->bind_param("s", $kasutaja);
    $stmt->execute();
    $stmt->bind_result($count);
    $stmt->fetch();
    $stmt->close();

    if ($count > 0) {
        die("Viga: Kasutajanimi on juba kasutusel.");
    }

    // Loo sool ja krüpteeri parool
    $sool = 'taiestisuvalinetekst';
    $krupteeritudParool = crypt($parool, $sool);

    $sql = "INSERT INTO kasutajad (kasutajanimi, kasutajaparool) VALUES (?, ?)";

    $stmt = $sqluhendus->prepare($sql);
    if ($stmt === false) {
        die("Valmistamise ebaõnnestus: " . $sqluhendus->error);
    }

    $stmt->bind_param("ss", $kasutaja, $krupteeritudParool);

    if ($stmt->execute() === true) {
        echo "Uus kasutaja on edukalt registreeritud!";
    } else {
        echo "Viga: " . $sql . "<br>" . $sqluhendus->error;
    }

    $stmt->close();
}

$sqluhendus->close();
?>
