
<?php

//Exercice 1

function say_hello($firstname){
	echo "<p>Hello $firstname!</p>";
	echo '<hr>';
}

say_hello("Angélique");
say_hello("Alice");
say_hello("Pierrot");
say_hello("Bernard");

//Exercice 2 (transform a string)
$str = "Coucou toi";
$words = explode(" ", $str);
foreach ($words as $word) {
  echo str_shuffle($word) . " ";
}
echo '<hr>';

//Exercice 3 (capitalize)
function capitalize($word){
  return ucfirst($word);
}
echo capitalize('capucin') . "<br/>";
echo '<hr>';


//Exercice 4 (argument)
function sum($argument1, $argument2) {
  if (is_numeric($argument1) && is_numeric($argument2)) {
    return $argument1 + $argument2;
  } else {
    return "Error: argument is the not a number.";
  }
}
echo sum(3, 4) . "<br/>";
echo sum(3, "e") . "<br/>";
echo '<hr>';

//Exercice 5(acronym)

function acronym($str) {
  $newStr = "";
  $words = explode(" ", $str);
  foreach ($words as $word) {
    $newStr .= strtoupper($word[0]);
  }
  return $newStr;
}
echo acronym("In code we trust!"); 
echo '<hr>';

// Exercice 6 (replace æ by ae)
function illogisme($str) {
  return str_replace("ae", "æ", $str) . "<br/>";
}
echo illogisme("caecotrophie");
echo illogisme("chaenichthys");
echo illogisme("microsphaera");
echo illogisme("sphaerotheca");
echo '<hr>';

// Exercice 6 bis

function noillogisme($str) {
  return str_replace("æ","ae", $str) . "<br/>";
}
echo noillogisme("cæcotrophie");
echo noillogisme("chænichthys");
echo noillogisme("microsphæra");
echo noillogisme("sphærotheca");
echo '<hr>';


// Exercice 7
function feedback($msg, $cssClass = "info"){
  $msg =" Error: Incorrect email address";
  return "<div class='$cssClass'>$msg</div>";
}

echo feedback("Incorrect email address", "error");
echo '<hr>';


// Exercice 8 (De-capitalize)
function decap($str){
  return strtolower($str);
}
echo decap("STOP YELLING I CAN'T HEAR MYSELF THINKING!!") . "<br/>";
echo '<hr>';

// Exercice 9 (calculate_cone_volume)
function cone($ray, $height){
  $vol = $ray * $ray * M_PI * $height * (1/3);
  return  "The volume of $ray and a height of $height is equal to $vol cm<sup>3</sup><br />";
}

echo cone(5, 2) . "<br/>";
echo cone(3, 4) . "<br/>";
echo '<hr>';



//Exercice 10 (random words generator)


function randomword () {

  $arr1 = [];

  for ($i= 0; $i < rand(1,5); $i++) {
    array_push($arr1, chr(rand(64,90)));

  }

  $arr2 = [];

  for ($i= 0; $i < rand(7,15); $i++) {
    array_push($arr2, chr(rand(64,90)));

  }

  return implode(" ", $arr1)."<br>".implode(" ",$arr2)."<br>";

}

if(isset($_POST['generate'])){
  echo randomword();
}




?>

<form action="" method='post'>

<label for="generate"> Generate</label><br>
<button type="submit" name='generate' id="generate">Generate</button>

</form>

