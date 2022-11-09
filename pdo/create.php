<?php
require_once("config.php");
function createUser(array $data, $conn,$date){
    $nom = htmlspecialchars($data["nom"]);//convert all special chars to html code with utf-8 specification
    $prenom = htmlspecialchars($data["prenom"]);
    $msg = htmlspecialchars($data["message"]);
    $sql = "INSERT INTO users (nom, prenom, message,date) VALUES (:nom,:prenom,:message,:date)";
    $g=$conn->prepare($sql);
    $g->bindParam(":nom",$nom, PDO::PARAM_STR);//sert à relier les parametres de values aux données recuperer du form, en forcant la recup afin qu'elle soit un string
    $g->bindParam(':prenom', $prenom, PDO::PARAM_STR);
    $g->bindParam(':message', $msg, PDO::PARAM_STR);
    $g->bindParam(':date', $date, PDO::PARAM_STR);
    $g->execute();
    header('Location:index.php');
}
createUser($_POST, $conn, $newDate);

