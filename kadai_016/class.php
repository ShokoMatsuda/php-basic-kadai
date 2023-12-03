<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    class Food {
        // プロパティを定義する
        private $name;
        private $price;

        // コンストラクタを定義する
        public function __construct(string $name, int $price) {
        $this->price = $price;
        $this->name = $name;
        }

        // メソッドを定義する
        public function show_price() {
            echo $this->price . '<br>';
        }
    }

    class Animal {

        // プロパティを定義する
        private $name;
        private $height;
        private $weight;

        // コンストラクタを定義する
        public function __construct(string $name, int $height, int $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
        }

        // メソッドを定義する
        public function show_height() {
            echo $this->height . '<br>';
        }

    }

    // インスタンス化する
    $food = new Food('potato', 250);
    // インスタンス$foodの各プロパティの値を出力する
    print_r($food);
    echo '<br>';
    // priceプロパティの値を出力する
    $food->show_price();

    // インスタンス化する
    $animal = new Animal('dog', 60, 5000);
    // インスタンス$animalの各プロパティの値を出力する
    print_r($animal);
    echo '<br>';
    // heightプロパティの値を出力する
    $animal->show_height();
    ?>
</body>
</html>