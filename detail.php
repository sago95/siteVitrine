<?php 
include('db-connection.php');
if(isset($_GET['id'])){
    $id = mysqli_real_escape_string($conn, $_GET['id']);
    $sql = "SELECT * FROM personnages WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    $per = mysqli_fetch_assoc($result);

    mysqli_free_result($result);
    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Détail</title>
</head>
<body>
    <div>
        <?php if($per): ?>
            <img src="<?=($per ['nom_image'])?>" alt="personne">
            <h3><?php echo ($per ['nom_complet']); ?></h3><br>
            <p> <?php echo ($per ['historique']); ?></p><br><br>
            <?php else: ?>
        <?php endif; ?>
    </div>
</body>
</html>