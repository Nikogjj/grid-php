<?php
require_once(__DIR__."/src/common/bdd.php");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Shop fruitz</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Instrument+Serif:ital@0;1&display=swap" rel="stylesheet">
</head>
<body>
    <a id="accueil" href="/index.php"><img src="/Vector.png" alt=""></a>
    <div class="titre">
        <h1>Fruitz Shop</h1>
    </div>
    <div class="catalogue">
        <?php for ($i=0; $i < count($fruits); $i++) :?>
                    <div class="produit">
                            <a href="/src/product/product.php?id=<?=$i?>"><img src="/public/<?=$fruits[$i]["photo"]?>" alt=""></a>
                        </div>      
        <?php endfor;?>
    </div>
</body>
</html>