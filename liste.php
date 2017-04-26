<?php
  $title="Liste";
  include("inc/top.php"); //prend le contenu du fichier top.php pour l'afficher en haut
?>
    <main>
      <h2>Ma liste de course</h2>
      <p>Tous les produits ajoutés à la liste :</p>


    <?php //si on a des produits dans la session
    if (!empty($_SESSION["products"])){

      echo '<ul>';//on ouvre la liste une seule formulaires
      foreach($_SESSION['products'] as $key=>$product){//$key est égal à chaque index tour à tour

      ?>
      <li>
        <?php if($product["stroked"]===true){//===vérifie l'équivalence des données et du type de donnée ?>
          <del><?=$product["name"]?></del>
        <?php }else{
          echo $product["name"];
        } ?>
          <!--ajoute un bouton supprimer-->
          <form method="POST" action="form/remove.php">
            <input type="hidden" name="product" value="<?=$key?>">
            <input type="submit" value="Retirer">
          </form>
          <!--raye un produit-->
          <form method="POST" action="form/stroke.php">
            <input type="hidden" name="product" value="<?=$key?>">
            <input type="submit" value="Rayer">
          </form>
      </li>
    <?php
      }
    }
    ?>


    </main>

<?php 
  include("inc/bottom.php"); //prend le contenu du fichier bottom.php pour l'afficher en bas
?>
