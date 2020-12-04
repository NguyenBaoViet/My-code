<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trắc nghiệm tính cách</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        include_once 'option/function_option.php';
        include_once 'question/function_question.php';

        $newArr = array();
        foreach ($arr_Question as $key => $value) {
            $newArr[$key]['question'] = $value;
            $newArr[$key]['sentences'] = $arr_Option[$key];
        }
    ?>
    <div class="content">
        <h1>Trắc nghiệm tính cách</h1>
        <form action="result.php" method="POST" name="mainForm">
            <?php
                $i = 1;
                foreach ($newArr as $key => $value) {
                    echo '<div class="question">';
                    echo '<p><span>Câu hỏi '.$i.':</span>'.$value['question'].'</p>';
                    foreach ($value['sentences'] as $keyC => $valueC) {
                        echo '<li><label><input 
                            type="radio" 
                            name="'.$key.'" 
                            value="'.$valueC["point"].'"                            
                            >'.$valueC['option'].'</label></li>';
                    }
                    $i++;
                    echo '</div>';
                }
            ?>
            <div class="row">
                <input type="submit" name="submit" value="Kiểm tra">
            </div>
        </form>
    </div>
</body>
</html> 