<h5>NAMA : SELIA NUR <br>
    KELAS: XI RPL
<h5>    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA TYPE</title>
</head>
<body>
<!-- tipe data PHP ada 3 yaitu: Tipe data sederhana meliputi integers, strings, Booleans, dan floats.
 Tipe data kompleks meliputi array dan objects. 
 Array dan objects disebut sebagai data kompleks karena masing-masing memiliki satu nilai. 
 NULL dianggap tidak memiliki data sama sekali. -->
    <h2>Array</h2>
<!-- Array adalah struktur data yang digunakan untuk menyimpan kumpulan nilai atau elemen. Dalam PHP, 
    array memungkinkan kita untuk mengelompokkan data menjadi satu variabel, yang memudahkan pengelolaan dan manipulasi data. -->
    <?php
        $cars = array("Volvo", "BMW", "Toyota");
        echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
    ?>
    <h2>Integer</h2>
    <!-- Integer merupakan salah satu tipe data yang ada pada bahasa pemrograman PHP.
    Pada umumnya Tipe data integer digunakan untuk angka atau bilangan bulat seperti harga barang atau jumlah stok barang.
    Integer meliputi angka bulat seperti 2, 50, atau 120. -->
    <?php
        $x = "Hello world!";
        $y = 'Hello world!';

        echo $x;
        echo "<br>";
        echo $y;
    ?>
    <h2>Null</h2>
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
    <h2>Object</h2>
    <!-- Tipe data object dibuat dengan tujuan agar para programmer terbiasa dengan OOP.
    Tipe data object bisa berupa bilangan, variabel atau fungsi.
    Data ini dapat dimasukkan ke dalam kode program sehingga meringkas beberapa fungsi dan memperkecil ukuran file. -->
    <?php
        class Car {
            public $color;
            public $model;
            public function __construct($color, $model) {
              $this->color = $color;
              $this->model = $model;
            }
            public function message() {
              return "Mobil saya adalah " . $this->color . " " . $this->model . "!";
            }
          }
          
        $myCar = new Car("blue", "Alpard");
        var_dump($myCar);
    ?>
    <h2>Boolean</h2>
    <!-- boolean adalah tipe data paling sederhana dalam PHP dan juga dalam bahasa pemograman lainnya. 
    Tipe data ini hanya memiliki 2 nilai, yaitu true (benar) dan false (salah). 
    Tipe data boolean biasanya digunakan dalam operasi logika seperti kondisi if, dan perulangan (looping) -->
    <?php 
        $x = true;
        var_dump($x);
    ?>
    <h2>Float</h2>
    <!-- Pengertian Tipe Data Float dalam PHP Tipe data float (disebut juga tipe data floating point, atau real number) adalah tipe data angka yang memiliki bagian desimal di akhir angka, atau memiliki floating point 
    (floating point adalah istilah dalam bahasa inggris untuk menyebut tanda " titik " yang menandakan bilangan desimal). -->
    <?php  
        $x = 10.365;
        var_dump($x);
    ?>  
    <h2>String</h2>
    <!-- String PHP adalah urutan karakter yaitu, digunakan untuk menyimpan dan memanipulasi teks.
    PHP hanya mendukung set 256 karakter sehingga tidak menawarkan dukungan Unicode asli.  -->
    <?php
        $x = "Hallo dunia!";
        $y = 'Hallo semua!';

        echo $x;
        echo "<br>";
        echo $y;
        echo "<br>";
        echo "Hallo";
        echo 'Hallo';
    ?>
</body>
</html>