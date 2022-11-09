<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  <title>USERS</title>
</head>
<body>
<?php 
     $servname = "localhost"; $dbname = "salle_de_sport"; $user = "root"; $pass = "";$link = mysqli_connect("localhost", "root", "", "contact");
 
  try{
     $dbco = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
     $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
    //$sth appartient à la classe PDOStatement
    $sth = $dbco->prepare("SELECT * FROM users");
    $sth->execute(); 
    $results = $sth->fetchAll(PDO::FETCH_ASSOC);
}    
catch(PDOException $e){
    echo "Erreur ça marche pas du tout!!! : " . $e->getMessage();
}
?>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NOM</th>
      <th scope="col">PRENOM</th>
      <th scope="col">EMAIL</th>
      <th scope="col">DATE</th>
    <th scope="col">ROLE</th>  
    </tr>
  </thead>
  
  <tbody class="">
  <?php foreach ($results as $result) : ?>
    <tr>
      <th scope="row"><?php echo $result['id']  ?></th>
      <th scope="row"><a class="text-success" href="user.php?id=<?= $result['id'] ?>"><?php echo $result['nom']?></a></th>
      <th scope="row"><?php echo $result['prenom']?></th>
      <th scope="row"><?php echo $result['email']?></th>
      <th scope="row"><?php echo $result['date']?></th>
      <th scope="row"><?php echo $result['role']?></th>
      <td scope="col">
</td>
<?php endforeach ?>
  </tbody>

  </body>
</html>