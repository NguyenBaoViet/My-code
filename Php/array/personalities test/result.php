<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $filename = 'question/question.txt';
        $data = file($filename) or die('Cannot read file');

        $point = 0;
        array_shift($data);

        foreach ($data as $value) {
            $tmpArr = explode("|",$value);
            $id = $tmpArr[0];
            $point += (int)$_POST[$id];

        }

        $filename = 'result.txt';
        $data = file($filename) or die('Cannot read file');
        array_shift($data);

        foreach ($data as $value) {
            $tmpArr = explode('|', $value);
            $min = $tmpArr[0];
            $max = $tmpArr[1];
            $content = $tmpArr[2];
            if ($point >= $min && $point <= $max) {
                $result = $content;
                break;
            }
        }
    ?>
    <div class="content">
        <h1>Kết quả trắc nghiệm</h1>
        <p><b>Tổng số điểm của bạn là: </b><?php echo $point; ?></p>
        <p style="margin-top: 10px; text-align: justify;"><b>Kết quả trắc nghiệm của bạn là: </b><?php  echo $result; ?></p>
    </div>
</body>
</html>