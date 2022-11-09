<?php
define("serveur", "localhost");
define("admin_bdd", "root");
define("password", "");
define("bdd", "salle_de_sport");
try {
    $dsn= "mysql:dbname=" .bdd.";host=".serveur;
    $pdo= new PDO($dsn, admin_bdd, password);
    $pdo->setAttribute(PDO:: ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
    //$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC); 
    echo "connection a la base de données reussis";
}
catch (PDOException $e) {
    die ($e->getMessage());
}
?>
<?php


$sql ="INSERT INTO blog(title, slug, description, id_user) VALUES (:title, :slug, :description, 1)";
$result = $pdo->prepare($sql);
$result->bindValue(':title', $_POST['title'], PDO::PARAM_STR);
$result->bindValue(':slug', $_POST['slug'], PDO::PARAM_STR);
$result->bindValue(':description', $_POST['description'], PDO::PARAM_STR);

$insertOk = $result->execute();

if($insertOk){
    echo 'insertion réussie';
}else{
    echo 'insertion échouée';
}
