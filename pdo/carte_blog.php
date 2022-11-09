
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>
<body>
  <?php require('config.php');
 echo "<br />";
$selectFromDB = $pdo->prepare("SELECT * FROM blog ORDER BY 'date' DESC LIMIT 3");
$exec = $selectFromDB->execute();
$res = $selectFromDB->fetchAll(PDO::FETCH_ASSOC);?>
<div class="container">
<?php foreach($res as $x => $v) : ?>
    <div class="card">
      <img src="<?php echo $v['image']?>" height="400px" width="300px" alt="">
      <h4><?php echo $v["title"]?></h4>
      <p><?php echo $v["content"]?></p>
      <a href="#">lire la suite</a>
    </div>
    <?php endforeach; ?>
 </div>
</body>
</html>