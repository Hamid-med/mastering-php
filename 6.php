
<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

		<aside class="col-xs-4">
		
		<?php Navigation();?>
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">
 

	<?php  

/*  
	Étape 1: Créez un formulaire qui soumet une seule valeur à POST (super global)
 */
if(isset($_POST['send'])){
	echo $_POST['name'];
}	
?>

<form action="6.php" method="post"> 
	<input type="text" name="name">
	<button type="submit" name="send">click me</button>
</form>


</article><!--MAIN CONTENT-->
<?php include "includes/footer.php" ?>