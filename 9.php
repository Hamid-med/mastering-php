<?php include "functions.php" ?>
<?php include "includes/header.php" ?>



	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


			<article class="main-content col-xs-8">
	
			<a href="9.php?setts=<?php echo $param1 = "Hii", $param2 = "Hey" ?>" name='setts' method='GET'>Cliquez ici</a>
			
		
	
	<?php 

	/*  
	Étape 1 - Créez un lien indiquant Cliquez ici et définissez le lien href pour passer certains paramètres et utiliser le super global GET pour le voir

	Étape 2 - Définissez un cookie qui expire dans une semaine

	Étape 3 - Démarrez une session et définissez-la sur la valeur, quelle que soit la valeur souhaitée. 
	*/

    
        session_start();

        $_SESSION['something'] = 'a message!';

        if(isset($_GET['setts'])){
            echo nl2br("\r\n");
            echo $param1;
            echo nl2br("\r\n");
            echo $param2;

            echo nl2br("\r\n");
            echo $_SESSION['something'];

        }


    
	?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php" ?>