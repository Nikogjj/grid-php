<?php
require_once(__DIR__."/../common/bdd.php");
$produits_id=$_GET["id"];

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Produit</title>
    <link rel="stylesheet" href="../../style.css">
    <link rel="stylesheet" href="product.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Instrument+Serif:ital@0;1&display=swap" rel="stylesheet">
</head>
<body>
    <a id="accueil" href="../../index.php"><img src="/Vector.png" alt=""></a>
    <div class="titre">
        <h1> Page produit</h1>
    </div>
    <div class="affichage">
            <!-- <div></div> -->
            <img src="/public/<?=$fruits[$produits_id]["photo"]?>" alt="">
            <!-- <div></div> -->
            <!-- <div></div> -->
            <p>id : <?= $_GET["id"] ?></p>
            <!-- <div></div> -->
            <!-- <div></div> -->
            <h1><?= $fruits[$produits_id]["name"] ?></h1>
            <!-- <div></div> -->
            <!-- <div></div> -->
            <h2>Stock : <?= $fruits[$produits_id]["stock"] ?></h2>
    </div>
</body>
</html>