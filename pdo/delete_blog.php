<?php
$host = "localhost";
$dbname = "salle_de_sport";
$dbuser = "root";
$dbpassword = "";

// Créer une connexion

// Vérifier la connexion
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $dbuser, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Co reussis";
    $id= $_GET['id'];
    $sql= $pdo->prepare("DELETE FROM users WHERE id = $id");
    $sql->execute(); 
        echo "suppresion reussie";
        header('location:users.php');
    }
    catch (PDOException $erreur) {
    die($erreur->getMessage());
    }
?>