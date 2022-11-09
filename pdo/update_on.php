<?php
require_once("config.php");
function updateUser($data,$id,$conn) {
    $nom = $data["nom"];
    $prenom = $data["prenom"];
    $email = $data["email"];
    $msg = $data["message"];
    $sql = "UPDATE tablepdo SET nom =:nom, prenom =:prenom , email=:email,  message =:message WHERE id =:id";
    $g=$conn->prepare($sql);
     $g->bindParam(":nom",$nom, PDO::PARAM_STR);
     $g->bindParam(':prenom', $prenom, PDO::PARAM_STR);
     $g->bindParam(':email', $msg, PDO::PARAM_STR);
     $g->bindParam(':message', $msg, PDO::PARAM_STR);
     $g->bindParam(':id', $id, PDO::PARAM_STR);
     $g->execute();
     header('Location:index.php');
}
updateUser($_POST,$id,$conn);





