<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
   
    $array= ['10','20','30'];
    $array2= ['40','50','60'];
    $array3= ['70','80','90'];

    $result = [];
    foreach ([$array, $array2, $array3] as $a) {
        foreach ($a as $k=>$v) {
            if (!isset($result[$k]))
                $result[$k] = 0;
            $result[$k] += $v;
        }
    }    

    dd($result);

    ?>
</body>
</html>
