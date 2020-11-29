<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    //Associative Array (key and value pairs )

    $ninjas = array('Rence' => 'Black', 'Anna' => 'Orange', 'Rico' => 'White'); //key => value (associative mean)
    print_r($ninjas);
    echo $ninjas['Rence'];  //not 0 but instead the key

    //changing the value 
    $ninjas['Rence'] = 'Oliver';
    print_r($ninjas);

    //array merge 
    $ninjasOne = array('Naruto' => 'Hokage', 'Hinata' => 'Jonin', 'Neji' => 'Assasis');
    $ninjasTwo = array('Kurama' => 'Beast', 'Gaara' => 'Hokage', 'Shikamaru' => 'Adviser');
    $ninjasThree = array_merge($ninjasOne, $ninjasTwo);
    print_r($ninjasThree);
    
    ?>
</body>
</html>