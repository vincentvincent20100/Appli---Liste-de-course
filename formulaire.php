<?php
  $title="Formulaire";
  include("inc/top.php"); //prend le contenu du fichier top.php pour l'afficher en haut
?>

    <main>
      <h2>Ajouter un produit</h2>
      <p>le dernierproduit ajouté s'affiche en haut de la liste</p>

      <form method="post" action="form/add.php" name="formulaire">
        <label for="product">Nom du produit : </label>
        <input type="text" name="product" id="product" placeholder="pommes frittes une fois" autofocus><!--autofocus permet d'avoir le curseur dans la zone de saisie-->
          <?php
          //si j'ai une erreur dans l'url
          if(!empty($_GET['error'])){
            echo'<p>'.$_GET['error'].'</p>';
          }
           ?>
        <button>OK</button>

      </form>
      <?php //si on a des produits dans la session
      if (!empty($_SESSION["products"])){
        echo '<ul>';
        foreach($_SESSION["products"] as $product){
          echo '<li>'.$product["name"].'</li>';
        }
        echo '</ul>';
      }

      ?>

    </main>

<?php 
  include("inc/bottom.php") //prend le contenu du fichier bottom.php pour l'afficher en bas
?>
