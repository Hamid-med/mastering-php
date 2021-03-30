<?php include "functions.php" ?>
<?php include "includes/header.php" ?>
	<section class="content">

		<aside class="col-xs-4">
		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php 


/*  
	Étape 1: utilisez une fonction mathématique prédéfinie ici et faites-en écho

	Étape 2: utilisez une fonction de chaîne prédéfinie ici et faites-en écho

	Étape 3: Utilisez une fonction Array prédéfinie ici et faites-en écho 

 */
/*  
	Étape 1:
	*/
	echo max(9,7);
	echo "</br>";
	/*  
	Étape 2:
	*/

	echo strtolower("HELLO");
	echo "</br>";
	/*  
	Étape 3:
	*/

	$array=["Hamid","Ali"];
	array_push($array,"Oussama");
	echo $array[2];


	
?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php" ?>