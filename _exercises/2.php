<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

		<aside class="col-xs-4">

	<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


		<article class="main-content col-xs-8">
		


		<?php

		/* Step 1: Make 2 variables called number1 and number2 and set 1 to value 10 and the other 20:

		  Step 2: Add the two variables and display the sum with echo:


		  Step3: Make 2 Arrays with the same values, one regular and the other associative

		  Step4: Make a constant and set it to the value of PHP. and use an echo to print it out
			 */

		
	$number1 = 10; 
	$number2 = 20;

	echo $number1 + $number2 . "<br/>";
	$number_array = array(10,20);
	$number_associative = array(10=>10, 20=>20);
	$php_constant = "PHP"; 
	echo $number_associative[10] . "<br/>";
	echo $php_constant;

		?>

	

		</article><!--MAIN CONTENT-->

<?php include "includes/footer.php" ?>