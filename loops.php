<?php
//Exercice 1 (Foreach)

$pronouns = array ( 'I', 'You', 'He/She', 'We', 'You', 'They');

foreach ($pronouns as $pronoun) {
if ($pronoun == 'He/She') {
echo $pronouns."codes<br/>";

}else{ echo $pronoun."code<br/>"; 

}
}

//Exercice 2 (While loop)

$number = 1;

while ($number <= 120) {
echo "Le nombre précédent +1: $number <br>"; 

$number++;

}

//Exercice 3 (For loop)

for ($num = 0; $num <= 120; $num+=1) {
    echo "Même chose: le num précédent +1: $num <br>";
}


//Exercice 4 (array and loop)

$everyone = array ('Brigitte', 'Bernard', 'Martine', 'Kévin', 'Joffrey');

for ($e = 0; $e < count($everyone); $e++) {
    echo $everyone [$e]. "<br>";

}

//Exercice 5
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Countries selector</title>
</head>
<body>
  <select>
    <?php 
    
    $pays = array ('Argentina', 'Australia', 'Austria', 'Belgium', 'Brazil', 'Canada', 'China');
    
    foreach ($pays as $key => $value) {
      echo "<option value=$key>$value</option>";
    } 
    ?>
  </select>
</body>
</html>



