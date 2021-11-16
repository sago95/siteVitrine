<?php
require 'db-connection.php';

$sql = 'SELECT nom_complet, nom_image, historique, id FROM personnages ORDER BY id ASC';
$result = mysqli_query($conn, $sql);
$pers = mysqli_fetch_all($result, MYSQLI_ASSOC);
mysqli_free_result($result);
mysqli_close($conn);
?>
  
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <title>Accueil</title>
</head>
<body>
  <header>
  <img src="images/mali.png" alt="mali" class="lg">
    <h1 class="t1"><span>O</span><span style="color:orange">DK</span></h1>
  </header><br><br>
  <h3>Les personnages</h3>
  <hr><br><br>
  <div class="container-fluid">
    <div class="px-lg-5">
      <div class="row">
        <?php foreach($pers as $per): ?>
          <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
            <div class="bg-white rounded shadow-sm">
              <a href="detail.php?id=<?php echo $per['id']?>"><img src="<?=($per ['nom_image'])?>" alt="personnage" class="img-fluid card-img-top"></a>
              <div class="p-4">
                <h5  class="text-dark"><?php echo ( $per ['nom_complet']); ?></h5>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</body>
</html>