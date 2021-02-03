<?php
session_start();
if (isset($_SESSION["nom"], $_SESSION["prenom"], $_SESSION["age"])) {
    echo $_SESSION["nom"]."<br>";
    echo $_SESSION["prenom"]."<br>";
    echo $_SESSION["age"];
}