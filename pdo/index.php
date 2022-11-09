<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<title>Index</title>
<?php
try {
    $pdo = new PDO("mysql:dbname=sport;host=localhost", 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    die($e->getMessage());
}


$a= new PDO('mysql:host=localhost;dbname=sport;charset=utf8','root','');
$a->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$b=$a->prepare("SELECT * FROM tablepdo");
$b->execute();
$results = $b->fetchAll();
?>

<?php echo "<table border = '1px' class='table table-dark'>" ?>

<?php foreach($results as $x => $v) : ?>
    <?php 
    $id = $v["id"];
    $nom = htmlspecialchars($v["nom"]);
    $prenom = htmlspecialchars($v["prenom"]);
    $message = htmlspecialchars($v["message"]);
    $date = htmlspecialchars($v["date"]);
    ?>
    <tr>
        <td><?=$id?></td>
        <td><?=$nom?></td>
        <td><?=$prenom?></td>
        <td><?=$message?></td>
        <td><?=$date?></td>
        <td><a href="./update.php?id=<?=$id?>">MODIFIER</a></td>
        <td><a href="./delete.php?id=<?=$id?>">SUPPRIMER</a></td>
    </tr>
<?php endforeach; ?>
<?php echo "</table>" ?>