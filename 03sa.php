<?php
/*
After watching the **Conditionals** write PHP code for this problem.

1. Inside /php-fiesta-cookie create another file named **03sa.php**

2. Create a function with this header **pokemon_defense**(arrayname, limit_number)
   - pokemon_defense function will echo the name of the pokemon with defense is greater than or equal to limit_number
3.  In CLI, git add, commit and push. [message in commit: "03sa.php done"]
*/

$defense = array(49, 63, 43, 83, 58, 78, 65, 80, 100, 55);
function pokemon_defense($def, $limit_number = 50){
$mon = array(49 => 'Bullbasaur', 63 => 'Ivysaur', 43 => 'Venusaur', 83 =>'Charmander', 58 => 'Charmeleon', 78 => 'charizard', 65 => 'Squirtle', 80 => 'Wartotle', 100 => 'Blastoise', 55 => 'Caterpie');
foreach ($def as $Highdef){
    if ($Highdef >= $limit_number){
		echo $mon[$Highdef];
		echo '<br>';
}
}
}
echo " Pokemon with defense greater than 60!";
echo '<br>';
pokemon_defense($defense,60);
?>