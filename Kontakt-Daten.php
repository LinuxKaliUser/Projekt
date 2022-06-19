<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontakt-Daten</title>
</head>

<body>

    <h1>Kontakt-Daten</h1>   

    <pre> <?php 
     echo "eingetragener anrede: ". $_GET['anrede'];
     echo "eingetragener Vorname: ". $_GET['vorname'];
    echo "eingetragener nachname: ". $_GET['nachname'];
    echo "eingetragener email: ". $_GET['email'];
    echo "eingetragener telefonnummer: ". $_GET['telefonnummer'];
    echo "eingetragener plz, strasse: ". $_GET['plz''strasse'];
    echo "eingetragener nachricht: ". $_GET['nachricht'];?></pre>

    

</body>
</html>