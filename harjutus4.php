
<!DOCTYPE html>
<html lang="et">
 
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
    <title>harjutus 3</title>
</head>
<body>
<?php
include('config.php');



?>
<body>
        

<?php

        

        $sql = "SELECT kliendid.first_name, kliendid.last_name, kliendid.phone_number, arved.kogus FROM kliendid INNER JOIN arved ON arved.kliendid_id = kliendid.id INNER JOIN albumid ON arved.albumid_id = albumid.id";
        $result = $sqluhendus->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                
                echo "Klient: " . $row["first_name"] . " " . $row["last_name"] . " " . $row["phone_number"] . " | Album: " . $row["albumid_id"] . " | Kogus: " . $row["kogus"] . "<br>";
            }
        }

        
    








        $sqluhendus->close();
        ?>
    



      

























</body>
 
</html>