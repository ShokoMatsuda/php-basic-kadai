<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <p>
        <?php
        // 連想配列
        $onion_price = ['名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'];

        // $onion_priceのキーと値を１つずつ出力する
        foreach ($onion_price as $key => $value) {
            echo "{$key}：{$value}" . '<br>';
        }
        ?>
    </p>
</body>
</html>