<?php

session_start();

$productIndex=$_POST["product"];//récupère le produit depuis les données POST

//change le statut stroked à vrai
if($_SESSION["products"][$productIndex]["stroked"]==false){
  $_SESSION["products"][$productIndex]["stroked"]=true;
}
else{
  $_SESSION["products"][$productIndex]["stroked"]=false;
}

header("Location: ../liste.php");//redirection vers liste.php
 ?>
