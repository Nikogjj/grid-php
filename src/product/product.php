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
    <h1> Page produit</h1>
    <p><?= $fruits[$produits_id]["name"] ?></p>
    <a href="../../index.php">accueil</a>
</body>
</html>