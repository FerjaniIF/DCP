<?php
include_once('../database/DatabaseConnection.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = $_POST['nom'];
    $password = $_POST['password'];
    

    if($nom =="admin" && $password=="admin"){
    header("Location:showDB.php");
    }
    echo '
    <script>
        alert("Access Denied, login et mot de passe invalides!");
        window.location.href = "login.html";
    </script>
    ';
    exit();
}
?>