<?php
    $date = date('Y-m-d H:i:s', time());
    $newDate = date('Y-m-d H:i:s', strtotime($date . ' + 2 hours'));

    $conn= new PDO('mysql:host=localhost;dbname=salle_de_sport;charset=utf8','root','');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $id = $_GET["id"];
?>