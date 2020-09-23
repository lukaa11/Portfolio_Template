<?php
session_start();

if(!isset($_SESSION['zalogowany']))
{
    header('Location:index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatibile" content="IE=edge,chrome=1">
    <title>Osadnicy - gra przeglądarkowa</title>
</head>

<body>

<?php

    echo "<p> Witaj ".$_SESSION['user'].'![<a href="logout.php">Wyloguj się!</a>]<p>';
    echo "<p><b>Drewno</b>:".$_SESSION['drewno'];
    echo "|<b>Kamień</b>:".$_SESSION['kamien'];
    echo "|<b>Zboże</b>:".$_SESSION['zboze']."<p>";

    echo "<p><b>E-mail</b>:".$_SESSION['email'];
    echo "<p><b>Data wygaśnięcia premium</b>:".$_SESSION['dnipremium']. "<p>";

    $dataczas=new DateTime('2017-01-01 09:30:15');

    echo $dataczas->format('Y-m-d H:i:s')."<br>";


    
   
 



?>




    

</body>
</html>