<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PHP基礎編<</title>
</head>
<body>
    <p>
        <?php

        function sort_2way($array, string $order) {
            if ($order === '昇順') {
                echo '昇順にソートします<br>';
                sort($array);
                foreach ($array as $arrays) {
                    echo $arrays . '<br>';
                }
            } else {
                echo '降順にソートします<br>';
                rsort($array);
                foreach ($array as $arrays) {
                    echo $arrays . '<br>';
                }
            }

        }

        // 配列
        $array = [15, 4, 18, 23, 10];

        sort_2way($array, '昇順');

        sort_2way($array, '降順');
        ?>
    </p>
</body>
</html>