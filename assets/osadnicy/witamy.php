<?php
session_start();
if(isset($_SESSION['udanarejestracja'])) 
{
    header('location:index.php');
    exit();
}
else
{
    unset($_SESSION['udanarejestracja']);

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
Dziękujemy za rejestracje w serwisje! Możesz już zalogować się na swoje konto <br><br>


<a href="index.php">Zaloguj się na swoje konto!</a>
<br><br>




<form action="zaloguj.php" method="POST">
    Login: <br> <input type="text" name="login"> <br>
    Hasło: <br> <input type="password" name="haslo"> <br>
    <input type="submit" value="Zaloguj się">






</form>

<?php
if(isset($_SESSION['blad']))
echo $_SESSION['blad'];
?>

    

</body>
</html>