<?php include "functions.php" ?>
<?php include "includes/header.php" ?>
    

	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


	<article class="main-content col-xs-8">
	
	
	
	<?php  

	/* 
	Étape 1 - Créer une base de données dans PHPmyadmin

	Étape 2 - Créez un tableau comme celui de la conférence

	Étape 3 - Insérez des données

	Étape 4 - Connectez-vous à la base de données et lisez les données 
	*/
	
	$db =new mysqli("localhost","root","","base2");

	$db->query("INSERT INTO amis (nom, prenom, age) VALUES('hamid', 'mohammed', '24')");

	$sql="SELECT * from amis";
	$query=mysqli_query($db,$sql);
	while($rows=mysqli_fetch_assoc($query)){
		echo $rows['nom'];
		echo nl2br("\r\n");
		echo $rows['prenom'];
		echo nl2br("\r\n");
		echo $rows['age'];
		echo nl2br("\r\n");
	}

	
	?>

	





</article><!--MAIN CONTENT-->

<?php include "includes/footer.php" ?>
