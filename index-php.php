<!-- //-------------------MILESTONE1----------------------- -->
<!-- Prima Milestone: Stampiamo i dischi solo con l’utilizzo di PHP, che stampa direttamente i dischi in pagina: al caricamento della pagina ci saranno tutti i dischi. -->


<?php
include __DIR__.'/db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Dischi</title>
</head>
<body>
    <div id="app">
        <nav></nav>
        <div class="disks">
            <?php foreach($albums as $album) { ?>
                <img src="<?= $album['poster']; ?>" alt="<?= $album['title']; ?>">    
                    <?= $album['title']; ?>
                    <?= $album['author']; ?>
                    <?= $album['year']; ?>
            <?php } ?>
        </div>





    </div>
</body>
</html>