<h5>NAMA : SELIA NUR <br>
    KELAS: XI RPL
<h5>    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Null</title>
</head>
<body>
    <!-- Dalam sintak koding, “null” dapat digunakan untuk mengisi kolom atau variabel yang tidak memiliki nilai. 
    Sebagai contoh, pada PHP, sintak koding untuk mengisi variabel dengan nilai “null” adalah sebagai berikut: $var = null; -->
    <?php
        $a = 0;
        echo "a is " . is_null($a) . "<br>";

        $b = null;
        echo "b is " . is_null($b) . "<br>";

        $c = "null";
        echo "c is " . is_null($c) . "<br>";

        $d = NULL;
        echo "d is " . is_null($d) . "<br>";
    ?>
</body>
</html>