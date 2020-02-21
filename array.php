<?php

//Exercice 1

$capucin = array ('firstname' => 'Angélique', 'lastname' => 'Corbisier');

echo '<pre>';
print_r($capucin);
echo '</pre>';



//Exercice 2 

$capucin2 ['hobbies'] = [
    'video games',
    'writting',
    'reading',
    'mother' => array('firstname' => 'Boulette', 'lastname' => 'Cheese')

];




// Exercice 3 ( Manipulating arrays - Add an element in a multi-dimensional array)

$capucin2 ['hobbies'] ["mother"] ["balade"] = "foret"; 

echo '<pre>';
print_r($capucin2);
echo '</pre>';


//Exercice 3 (Manipulating arrays - Count)

echo count($capucin2['hobbies']);

//Exercice 3 (Manipulating arrays - Replace)

$capucin2 ['hobbies'] [0] = 'new value';

echo '<pre>';
print_r($capucin2);
echo '</pre>';


//Exercice 3 (Manipulating arrays - Create a new array from 2 others (or more))

$capucinsoulmate ['hobbies'] = [
    'licorne',
    'Phasme',
    'poneyclub',
    'father' => array('firstname' => 'Paprika', 'lastname' => 'Menthol')

];

$result = array_merge($capucin2, $capucinsoulmate);

print_r($result);



//Last exercice


$web_development = [
"frontend" => [],
"backend" => [],


];

array_push ($web_development ['frontend'], "xhtml", "CSS", "Flash"); 
array_push ($web_development ['backend'], "Ruby on Rails", "Javascript"); 


$web_development ['frontend'] [0] = 'html';

unset($web_development ['frontend'] [2]);


echo '<pre>';
print_r($web_development);
echo '</pre>';


?>



