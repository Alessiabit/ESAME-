<?php include 'menu.php';
?>
<?php
// Leggi i dati dal file JSON
$json = file_get_contents('webdesigner.json');
$projects = json_decode($json, true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style/style.css" rel="stylesheet" type="text/css">
    <link href="style/main.css" rel="stylesheet" type="text/css">
    <link href="style/form.css" rel="stylesheet" type="text/css">
    <link href="style/menu.css" rel="stylesheet" type="text/css">
    <link href="style/footer.css" rel="stylesheet" type="text/css">
    <link rel="icon" type="image/x-icon" href="img/icon.png">
    <title>Portfolio</title>
    <style>
       
       .sfondo {
  background: url(img/sfondo.jpg) no-repeat center center/cover;
  height: 400px;
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
  color: white;
  text-align: center;
}
.testo {
  font-size: 20px;
  padding: 20px;
  border-radius: 10px;
}



  
   
   
</style>
</head>
<body>

<section class="sfondo">
    <div class="testo">
        <h1>Benvenuto</h1>
        <p>Esplora il mio sito!</p>
    </div>
    </section>
    <div class="profilo">
    <h2>PORTFOLIO</h2>
</div>

<div class="container">
    <?php foreach ($projects as $project): ?>
        <div class="project">
            <?php if ($project['id'] == 1): // Solo il primo progetto ha un link ?>
                <a href="progettosingolo.php?id=1">
                    <img src="<?php echo $project['image']; ?>" alt="<?php echo $project['title']; ?>">
                </a>
            <?php else: ?>
                <img src="<?php echo $project['image']; ?>" alt="<?php echo $project['title']; ?>">
            <?php endif; ?>
            <h3><?php echo $project['title']; ?></h3>
            <p><?php echo $project['description']; ?></p>
        </div>
    <?php endforeach; ?>
</div>
<?php include 'form.php';
?>
<hr>

<?php require ("footer.php");
         ?>
</body>

</html>


        




