
<p>

<?php

//1.1 Clean your room Exercise 

$room_is_filthy = false;

if( $room_is_filthy == true){
	echo "Yuk, Room is dirty : let's clean it up !";
	cleanup_room();
	echo "<br>Room is now clean!";
	$room_is_filthy = false;
} else {
	echo "<br>Nothing to do, room is neat.";
}

?>

</p>


<p> 

<?php 

//1.2 Clean your room Exercise, improved

$possible_states = array (
0 => 'disgusting',
1 => 'dirty',
2 => 'clean',
);

$room_is_filthiness = $possible_states[2]; 

if ($room_is_filthiness == 'disgusting') {

    echo "Yuk, Room is Disgusting! Let's clean it up";

} else if ($room_is_filthiness == 'dirty') {
    echo"Yuk, Room is dirty : let's clean it up !";
} else {
    echo "<br>Nothing to do, room is neat.";  
}
?>

</p>



<p>

<?php

// 2. "Different greetings according to time" Exercise

$now = date ("H");
echo $now;

if ($now >= "5" && $now <= "9") {

echo "Good morning !";

} else if ($now > "9" && $now <= "12") {

echo "Good day !";

} else {

    echo "t'es nulle";
}


?>

</p>


<p> 

<?php

//3. "Different greetings according to age and gender"
//4. "Different greetings according to mothertongue"



$age=(int)$_GET['age']; 
$gender=$_GET['gender'];
$english= $_GET['english'];

if ($age < 12  ){
    // Form processing
    if ($gender == 'female') {
        if ($english == 'yes')  
        echo "Hello Miss kiddo !";
        else echo "Aloha Miss kiddo !";
} 

    if ($gender == 'male') {
        if ($english == 'yes')
        echo "Hello Mister kiddo !";
        else echo "Aloha Mister kiddo";
    }
     

   
}

elseif ($age >= 12 && $age <= 18) {
    if ($gender == 'female') echo "Hello Miss Teenager !";
    else echo "Hello Mister Teenager !";
    
}

elseif ($age >= 18 && $age <= 115) {
    if ($gender == 'female') echo "Hello Miss Adult";
    else echo "Hello Mister Adult";
}

else {
    echo "Wow! Still alive ? Are you a robot, like me ? Can I hug you ?";
}

// Form (incomplete)
?>


<form method="get" action="conditions.php">

<label for="age">Do you speak english ?</label>
 <input type ='Radio' Name='english' value='yes'>Yes 
    <input type = 'Radio' Name ='english' value= 'no'> No
    <br>

    <input type ='Radio' Name='gender' value='male'>Male 
    <input type = 'Radio' Name ='gender' value= 'female'> Female

    <br> 

	<label for="age">Enter your age : </label>
	<input type="" name="age">
	<input type="submit" name="submit" value="Greet me now">
</form>


</p>




<p>

<?php

// 5. Soccer Team

$agesoccer = (int)$_GET['agesoccer']; 
$gendersoccer = $_GET['gendersoccer'];

if ($agesoccer >= 21 AND $age <= 40  ){
    // Form processing
    if ($gendersoccer == 'female')   echo "Welcome to the team";
    else echo "t'es un mec";

    } 


?>

<form method="get" action="conditions.php">

    <input type ='Radio' name='gendersoccer' value='male'> Male 
    <input type = 'Radio' name ='gendersoccer' value= 'female'> Female

    <br> 

	<label for="agesoccer">Enter your age : </label>
	<input type="" name="agesoccer">
	<input type="submit" name="submit" value="Greet me now">
</form>





<p>

<?php

// 6. Just If (KÉVIN)

$ageif = (int)$_GET['ageif']; 
$genderif = $_GET['genderif'];

$message = "No Welcome !";

if ($ageif >= 21 AND $ageif <= 40) $agecorrect = true;

if ($agecorrect AND $genderif =="femaleif") $message = "Welcome girl !";

echo $message;
  

?>

<form method="get" action="conditions.php">

    <input type ='Radio' name='genderif' value='maleif'>Male 
    <input type = 'Radio' name ='genderif' value= 'femaleif'> Female

    <br> 

	<label for="ageif">Enter your age : </label>
	<input type="" name="ageif">
	<input type="submit" name="submit" value="Greet me now">
</form>






<p>

<?php

// 7. "School Sucks"

$note= (int)$_GET['note'];
if ($note <4 ) $value = 1;
elseif ($note >= 5 AND $note <=9) $value = 2;
elseif ($note == 10) $value = 3;
elseif ($note >= 11 AND $note <= 14) $value = 4;
elseif ($note >= 15 AND $note <= 18) $value = 5;
else $value = 6; 



switch ($value) {

	case 1:
		echo "This work is really bad. What a dumb kid!";
        break;
        
	case 2:
		echo "This is not sufficient. More studying is required.";
        break;

    case 3: 
        echo "barely enough!";
        break; 

    case 4:
        echo "Not bad!";   
        break; 

    case 5: 
        echo "Bravo, bravissimo!";
        break; 

    case 6:
        echo "Too good to be true : confront the cheater!";
        break;
        
}


?>
</p>

<form method="get" action="conditions.php">

    <label for="note">Enter your note : </label>
	<input type="" name="note">
	<input type="submit" name="submit" value="Greet me now">

    </form>



    <p>

<?php

// 8. The "Switch" structure = done; 


?>

</p>


<?php

// 9. Ternary operators




?>

</p>