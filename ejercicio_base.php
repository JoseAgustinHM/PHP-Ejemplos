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
    function queHace($num){
        $r = 0;
        $v = 0;
        $i = 1;
        while ($num > 0){
            $r = ($num%2);
            $num = intval($num/2);
            $v = $v + ($r * $i);
            $i *= 10;
        }
        print "El numero en binario es " . $v;
    }
    queHace(4);

    ?>
</body>
</html>