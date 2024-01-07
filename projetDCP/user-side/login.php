<?php
include_once('../database/DatabaseConnection.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = $_POST['nom'];
    $password = $_POST['password'];
    $databaseConnection = new DatabaseConnection();
    $pdo = $databaseConnection->getPDO();

    $query = "SELECT * FROM login WHERE nom = :nom AND password = :password";
    $statement = $pdo->prepare($query);
    $statement->bindParam(':nom', $nom, PDO::PARAM_STR);
    $statement->bindParam(':password', $password, PDO::PARAM_STR);
    $statement->execute();

    if ($row = $statement->fetch(PDO::FETCH_ASSOC)) {

        header('Location: formulaire.html');
        exit();
    } else {

        echo "<script> alert('Login failed. Please check your username and password.');
        window.location.href = 'login.html';</script>";
    }
}
?>