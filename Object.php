<h5>NAMA : SELIA NUR <br>
    KELAS: XI RPL
<h5>    
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Object</title>
    </head>
    <body>
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
                return "My car is a " . $this->color . " " . $this->model . "!";
                }
            }
            
            $myCar = new Car("red", "Volvo");
            var_dump($myCar);
        ?>
    </body>
    </html>