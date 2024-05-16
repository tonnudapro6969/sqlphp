
<!DOCTYPE html>
<html lang="et">
 
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
    <title>harjutus 2</title>
</head>
<body>
<?php
include('config.php');
?>


        <h2>Otsing</h2>
        <form action="#" method="get">
            <select name="search_type">
                <option value="artist">Artistid</option>
                <option value="album">Albumid</option>
            </select>
            <input type="text" name="s"><br>
            <input type="submit" value="Otsi">
        </form>
        <?php
        if(!empty($_GET['s'])) {
            $sisestus = $_GET['s'];

            $sql = "SELECT artist, album FROM albumid WHERE artist LIKE '%$sisestus%' OR album LIKE '%$sisestus%'";
            $result = $sqluhendus->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "Artist: " . $row["artist"] . " - Album: " . $row["album"] . "<br>";
                }
            } else {
                echo "Ei leitud vastavad albumit/artisti.";
            }
        }
        ?>
<br>

  
        <h1>Tabeli sisu ridade kaupa (10 rida)</h1>
        <?php
        $start = 0;
        while (true) {
            $sql = "SELECT * FROM albumid LIMIT $start, 10";
            $result = $sqluhendus->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "Artist: " . $row["artist"] . " - Album: " . $row["album"] . " - Aasta: " . $row["aasta"] . " - Hind: " . $row["hind"] . "<br>";
                }
                $start += 10; 
                echo "<br>";
            } else {
                break;
            }
        }
        
        ?>



<br>

        
        
        <h1>Artist ja album, kasvav artisti järgi (10 rida)</h1>
        <?php
        $sql = "SELECT artist, album FROM albumid ORDER BY artist ASC LIMIT 10";
        $result = $sqluhendus->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "Artist: " . $row["artist"] . " - Album: " . $row["album"] . "<br>";
            }
        }
        ?>

       
<br>
        <h1>Artist ja album, aasta 2010 ja uuemad</h1>
        <?php
        $sql = "SELECT artist, album, aasta FROM albumid WHERE aasta >= 2010";
        $result = $sqluhendus->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
            echo "Artist: " . $row["artist"] . " - Album: " . $row["album"] . " - Aasta: " . $row["aasta"] . "<br>";
            }
        }
        ?>

    
<br>
        <h1>Albumite arv, keskmine hind ja koguväärtus</h1>
        <?php
        $andmed = "SELECT COUNT(DISTINCT album) AS albumeid FROM albumid";
        $keskmine = "SELECT AVG(hind) AS keskmine FROM albumid";
        $kokku = "SELECT SUM(hind) AS koguvaartus FROM albumid";

        $andmedd = $sqluhendus->query($andmed);
        $keskmine_t = $sqluhendus->query($keskmine);
        $kokku = $sqluhendus->query($kokku);

        if ($andmedd && $keskmine_t && $kokku) {
            $album = $andmedd->fetch_assoc();
            $hind = $keskmine_t->fetch_assoc();
            $summa = $kokku->fetch_assoc();

            echo "Albumeid: " . $album["albumeid"] . "<br>";
            echo "Keskmine: " . round($hind["keskmine"]) . "€<br>";
            echo "Koguväärtus: " . round($summa["koguvaartus"]) . "€<br>";
        }
        ?>

       
<br>
        <h1>kõige vanema albmum </h1>
        <?php
        $sql = "SELECT album, aasta FROM albumid ORDER BY aasta ASC LIMIT 1";
        $result = $sqluhendus->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
            echo "Album: " . $row["album"] . " - Aasta: " . $row["aasta"] . "<br>";
            }
        }
        ?>

    
<br>
        <h1>Albumid keskmisest suuremad</h1>
        <?php
        $keskmain = "SELECT AVG(hind) AS keskmain FROM albumid";
        $sql = "SELECT artist, album FROM albumid WHERE hind > ($keskmain)";

        $kesksuur = $sqluhendus->query($keskmain);
        $sqlsuur = $sqluhendus->query($sql);


        if ($kesksuur && $sqlsuur) {
            // Töötle keskmise hinna päringu tulemust
            $row_kesk = $kesksuur->fetch_assoc();
            $keskminehind = $row_kesk["keskmain"];

            echo "Keskmine hind: " . round($keskminehind, 2) . "<br>";

            // Töötle albumite päringu tulemusi
            if ($sqlsuur->num_rows > 0) {
                echo "Keskmisest suuremad:";
                while($row = $sqlsuur->fetch_assoc()) {
                    echo $row["album"] . "<br>";
                }
            }
        }
        ?>

        


    
        

        <?php
        $sqluhendus->close();
        ?>











</body>
 
</html>