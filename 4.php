<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

	<aside class="col-xs-4">

		<?php Navigation();?>
			
		
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php  

/*  
	Étape 1: Définir une fonction et qui renvoie un calcul de 2 nombres

	Étape 2: Créez une fonction qui transmet des paramètres et appelez-la à l'aide de valeurs de paramètres

 */

/*  
	Étape 1:
	*/
function calcu($nbr1,$nbr2){
	echo $nbr1 * $nbr2;
}
calcu(2,5);
echo "</br>";
/*  
	Étape 1:
	*/
function identite(string $text1,string $text2){
	echo $text1.' '.$text2;
}
identite("gc2.0", " topleft");
?>





</article><!--MAIN CONTENT-->


<?php include "includes/footer.php" ?>