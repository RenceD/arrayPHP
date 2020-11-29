<?php 
///////////////////////
// Indexed Array 
///////////////////////
$peopleOne = ['Rence', 'Anna', 'Rico']; /* First method of array*/
echo $peopleOne[0];     /* Using an echo to display array*/

    echo "<br>";

$peopleTwo = array('Helcurt', 'Thamuz', 'Miya');
echo $peopleTwo[2];     /* Using an echo to display array*/

    echo "<br>";

$ages = ['20', '30', '40', '50'];
print_r($ages);     /* Using a print_readable*/

    echo "<br>";

$ages[1] = '80'; /* Changing the value or array */
print_r($ages);     /* displaying with the new value using print_readable */

    echo "<br>";

$ages[] = '90';     /* no value declared so inserting its just inserting it */ 
print_r($ages);


    echo "<br>";

array_push($ages, '70'); /* (two parameters) array push(variable, value) */
print_r($ages);

    echo "<br>";

echo count($ages); /* Counting the value of array */

    echo "<br>";

$mergeArray = array_merge( $peopleOne, $peopleTwo );
print_r($mergeArray);

//end 

echo "<br>";

////////////////////////////////////////////////
//Associative Array (key and value pairs)
////////////////////////////////////////////////

$ninjasOne = ['Rence' => 'Black' , 'Anna' => 'Orange'];
echo $ninjasOne['Rence'];
echo "<br>";
print_r($ninjasOne);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>