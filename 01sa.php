<?php
/* multidimensional array;
    "TeamName"
*/
$DSH = array (
    array('id','Species','Type1', 'Type2', 'Ability', 'Hp', 'Attack', 'Defense'),
    array('1','Bulbasaur','Grass', 'Poison', 'Overgrow', 45, 49, 49),
    array('2','Ivysaur','Grass', 'Poison', 'Overgrow', 60, 62, 63),
    array('3','Venusaur','Grass', 'Poison', 'Overgrow', 80, 82, 83),
    array('4','Charmander','Fire', 'N/A', 'Blaze', 39, 52, 43),
    array('5','Charmeleon','Fire', 'N/A', 'Blaze', 58, 64, 58),
    array('6','Charizard','Fire', 'Flying', 'Blaze', 78, 84, 78),
    array('7','Squirtle','Water', 'N/A', 'Torrent', 44, 48, 65),
    array('8','Wartortle','Water', 'N/A', 'Torrent', 59, 63, 80),
    array('9','Blastoise','Water', 'N/A', 'Torrent', 79, 83, 100),
    array('10','Caterpie ','Bug', 'N/A', 'Shield Dust', 50, 20, 55)
);

$favorite = array('Bulbasaur','Charmander','Squirtle');
echo "Print the array  ";
echo '<br>';
print_r($DSH);
echo '<br>';
echo '<br>';

echo " The number of elements in an array: ";
echo '<br>';
echo count($DSH);
echo '<br>';
echo '<br>';

echo " Declare variable favorite and assign your favorite species (use array notation)";
echo '<br>';
print_r($favorite);
echo '<br>';
echo '<br>';

$Species = array('Bullbasaur','Ivysaur','Venusaur','Charmander','Charmeleon','charizard','Squirtle','Wartotle','Blastoise','Caterpie');
echo "The Species of Pokemons Available";
echo '<br>';
foreach($Species as $pokemon){
echo $pokemon;
echo '<br>';
}
//echo $DSH[2][4];

?>