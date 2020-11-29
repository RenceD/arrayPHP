<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    //simple printing of array 
    $assasins = array('Allan', 'Mila', 'Jabez');
    $ninjas = array('Rence', 'Anna', 'Rico');
    echo $ninjas[0];    //to print single value in array
    print_r($ninjas);   //to print all the value in array 
    print_r($ninjas[0]); //to print single value in array
    

    //changing the value of array
    $ninjas[0] = "Oliver";
    print_r($ninjas[0]);

    //Array push
    array_push($ninjas, "ralph"); //Two parameter (variable, value)
    print_r($ninjas);

    //array merge
    $mergeArray = array_merge($ninjas, $assasins); //Two parameters (variable , variable)
    print_r($mergeArray);
    echo count ($mergeArray);

    ?>
</body>
</html>