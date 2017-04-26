<?php
	$title="Accueil";
	include("inc/top.php");
?>

<main>
	
	 <h2>Accueil</h2>
	 <a href="formulaire.php" <?=($title=='Formulaire')?'class="active"':''?>>Commencer votre liste</a>
	 <br>

</main>

<?php  
	include("inc/bottom.php")
?>