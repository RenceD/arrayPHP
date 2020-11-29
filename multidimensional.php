<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    //multidimential array (array inside array)
    $blogs = [ ['Name' => 'Rence', 'NName' => 'Aljon', 'LName' =>'Domingo'], 
                ['Name' => 'Anna', 'NName' => 'Liza', 'LName' =>'Libutan'] ];
    print_r($blogs[0]['Name']);

    echo count($blogs);

    $blogs[] = ['Lorem' => 'Lorem'];
    print_r($blogs);

    ?>
</body>
</html>