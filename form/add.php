<?php

// traite le formulaire d'ajout de produits à la liste de course
// stocke les produits en SessionHandler
// redirige vers formulaire.php

session_start();

print_r($_POST); //afficher les données des formulaires POST stockées dans le tableau $_POST

$product=$_POST["product"]; //récupérer la donnée depuis le tableau, et la stocke dans ma variable

//on initialise notre tableau dans notre session s'il n'existe pas déja
if (empty($_SESSION["products"])){
  $_SESSION["products"]=[];//on créé la clé products dans la session, on la déclare en tableau
}
if(empty($product)){ //on refuse les valeurs vides
  header("location:../formulaire.php?error=Veuillez renseigner un produit"); //avec la fonction header on redirige vers une page, le ? annonce le début des parametres d'url, error est la clé du paramètre d'url
}
else{  //on a un produit à ajouter
  $productArray=[
    "name"=>$product,
    "stroked"=>false,//par défaut, le produit n'est pas rayé
    "quantity"=>1,
  ];
  //$_SESSION["products"][]=$product; cela aurait ajouté chaque produit en fin de liste
  array_unshift($_SESSION['products'], $productArray);//cela ajoute chaque produit en début de liste
  header("location:../formulaire.php");
}

 ?>
