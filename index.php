<?php
$link = mysqli_connect('localhost', 'root','') OR die ('Erreur de connexion');
if (!$link) {
    die('Connexion impossible : ' . mysqli_error());
}
echo 'Connecté correctement';
mysqli_close($link); //On ferme la connexion à MySQL
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Test_Octolo</title>
</head>
<body>
<H1>Affichage de la date et de l'heure courante</H1>
<?php

// set timezone
date_default_timezone_set('Europe/Paris');

// display the date and time with a greeting
function show_date(){
    return date('l, jS F H:i');
}
function greeting(){
    $hour = date('H');
    if($hour < 12){
        $greeting = "Bonjour!";
    }
    else{
        $greeting = "Bonsoir!";
    }
    return $greeting;
}
echo show_date();
echo "<br/>" . greeting();
?>
</body>
</html>

