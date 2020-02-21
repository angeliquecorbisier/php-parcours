<html>
  <head><title>Hi!</title></head>
  <body>
  	<?php if (isset($_GET['name'])){ ?>
    	<h1>Aloha <?php echo $_GET['name']; ?>!</h1>
   	<?php } ?>

       <?php 
       $a = 25;
       $a = $a + 37;
       echo $a;
       ?> 

       <?php 

       $total= 78/2;

       echo $total;
    ?>
  </body>
</html>