<?php
session_start();

$_SESSION["nom"] = "Ardoise";
$_SESSION["prenom"] = "Chloé";
$_SESSION["age"] = 18;
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercice 172 / 2</title>
</head>
<body>
    <a href="page2.php">Page2.php</a><br>
<?php
    echo $_SESSION["nom"]."<br>";
    echo $_SESSION["prenom"]."<br>";
    echo $_SESSION["age"];
?>

</body>
</html>
