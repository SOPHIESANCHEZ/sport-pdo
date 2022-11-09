<?php
require_once("config.php");
function delUser($data,$conn) {
    $sql = "DELETE FROM tablepdo WHERE id =:id";
    $b =$conn->prepare($sql);
    $b->bindParam(":id",$data, PDO::PARAM_STR);
    $b->execute();
    header('Location:list-users.php');
}
delUser($_GET["id"],$conn);
?>