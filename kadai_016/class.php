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
        public function show_price($price) {
            echo $price;
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
        public function show_height($height) {
            echo $this->height = $height;
        }

    }

    // インスタンス化する
    $food = new Food('potato', 250);

    // インスタンス$foodの各プロパティの値を出力する
    print_r($food) . '<br>';

    // インスタンス化する
    $animal = new Animal('dog', 60, 5000);

    // インスタンス$animalの各プロパティの値を出力する
    print_r($animal) . '<br>';
    ?>
</body>
</html>