<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercice 172 / 5</title>
</head>
<body>
<?php
$login = $_POST["login"];
$password = $_POST["password"];

setcookie("Login", $login);
setcookie("Password", $password);

echo "Identifiant : ".$login."<br>";
echo "Mot de passe : ".$password."<br>";

?>

<a href="modificationCookie.php">Modification </a>
</body>
</html>
