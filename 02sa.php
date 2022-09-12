<?php
/*
After watching the **Functions** write PHP code for this problem.

1. Inside /php-fiesta-cookie create another file named **02sa.php**
2. Create a function using this template hp_sum, ave_attack
   - hp_sum will return the sum of the column hp
   - ave_attack will return the average of column attack
3.  In CLI, git add, commit and push. [message in commit: "02sa.php done"]
*/
//$hp = array(45, 60, 80, 39, 58, 78, 44, 59, 79, 50);
//$attack = array(49, 62, 82, 52, 64, 84, 48, 63, 83, 20);

function addnumbers($hp1, $hp2, $hp3, $hp4, $hp5, $hp6, $hp7, $hp8, $hp9, $hp10){
	echo $hp1 + $hp2 + $hp3 + $hp4 + $hp5 + $hp6 + $hp7 + $hp8 + $hp9 + $hp10;
}
echo " The sum of HP column is:";
echo '<br>';
addnumbers(45, 60, 80, 39, 58, 78, 44, 59, 79, 50);

echo '<br>';
echo '<br>';
echo '<br>';

function average($attack1, $attack2, $attack3, $attack4, $attack5, $attack6, $attack7, $attack8, $attack9, $attack10){
 $sum = $attack1 + $attack2 + $attack3 + $attack4 + $attack5 + $attack6 + $attack7 + $attack8 + $attack9 + $attack10;
echo $sum/10;
}

echo "The average of attack column is:";
echo '<br>';
average(49, 62, 82, 52, 64, 84, 48, 63, 83, 20);
echo '<br>';

?>