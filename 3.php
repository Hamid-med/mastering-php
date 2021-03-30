<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php  

/*  

Étape 1: Créez une condition facultatif avec if, elseif et else pour enfin afficher la chaîne en disant, "I love greenchip :p"

Étape 2: Créez un forloop qui affiche 10 nombres

Étape 3: Créez une instruction switch qui teste à nouveau une condition avec 5 cas 

 */

/*facultatif avec if, elseif et else*/

 function test($forma){
	 if(!$forma){
		 echo "tapi chi 7aja";
	 }
	 elseif(!($forma=="greenchip")){
		 echo "ghalat a lbalad";
	 }
	 else{
		 echo "I love greenchip :p";
	 }
 }

test("greenchip");
echo "</br>";

/*un forloop*/

for($i=1; $i<=10 ; $i++){
	echo $i;
	echo "</br>";
}
/*une instruction switch*/

$j=1;
switch ($j) {
    case 0:
        echo "'j' égal 0";
        break;
    case 1:
        echo "'j' égal 1";
        break;
    case 2:
        echo "'j' égal 2";
        break;
	case 3:
		echo "'j' égal 3";
		break;
	case 4:
		echo "'j' égal 5";
		break;
}




	
?>






</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php" ?>