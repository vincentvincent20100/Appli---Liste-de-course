<?php

session_start();

$productIndex=$_POST["product"];//récupère le produit depuis les données POST

//print_r($_SESSION["products"]); pour afficher le tableau de la liste de course
unset($_SESSION["products"][$productIndex]);//efface la variable)

$_SESSION["products"]=array_values($_SESSION["products"]);//array_values réinitialise les index à partir de 0

header("Location: ../liste.php");//redirection vers liste.php

?>
