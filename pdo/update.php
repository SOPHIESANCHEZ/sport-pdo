<?php
$id = $_GET["id"];
$a= new PDO('mysql:host=localhost;dbname=sport;charset=utf8','root','');
$a->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$b=$a->prepare("SELECT * FROM tablepdo WHERE id=$id");
$b->execute();
$results = $b->fetch(PDO::FETCH_BOTH);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MODIFICATION</title>
</head>
<body>
<form action="./update_on.php?id=<?=$id?>" method="POST">
        <div class="col">
            <input type="text" placeholder="nom" name ="nom" id="nom" value="<?=$results["nom"]?>">
        </div>
        <div class="col">
            <input type="text" placeholder="prenom" name ="prenom" id = "prenom" value="<?=$results["prenom"]?>">
        </div>
        <div class="col">
            <input type="text" placeholder="email" name ="email" id = "email" value="<?=$results["email"]?>">
        </div>
        <div class="col">
            <input type="text" placeholder="message" name ="message" id="message" value="<?=$results["message"]?>">
        </div>
        <input type="submit" value="MODIFIE">
</form>
</body>
</html>
