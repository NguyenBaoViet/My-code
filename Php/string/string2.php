<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chuẩn hóa chuỗi</title>
    <link rel="stylesheet" href="style_string2.css"/>
</head>
<body>
    <?php
        $str = "";
        $type = "";
        $flag = false;
        function formatstring($str,$type){
            //đưa về chuỗi thường.
            $str1 = strtolower($str);
            //bỏ khoảng trắng trái-phải của chuỗi.
            $str1 = trim($str1);
            //bỏ khoảng trắng ở giữa.
                //chuyển chuỗi thành mảng.
                $array = explode(' ',$str1);
                //bỏ các phần tử trắng trong mảng
                foreach($array as $key => $value){
                    if(trim($value)==null){
                        unset($array[$key]);
                        continue;
                    }
                    if($type == 'danh tu rieng' || $type == 'ten rieng'){
                        $array[$key] = ucfirst($value);
                    }
                }
            //chuyển mảng thành chuỗi 
            $result = implode(' ',$array);
            //chuyển ký tự đầu tiên của chuỗi thành in hoa.
            return $result = ucfirst($result);
        }
        if(isset($_POST['str'])){
            $str = $_POST['str'];
            $type = $_POST['type'];
            $flag = true;
            $result = formatstring($str,$type);
        }else {
            $flag = false;
        }
    ?>
    <div class="container">
        <h1>Chuẩn hóa chuỗi</h1>
        <form action="#" method = "POST" name = "main-form">
            <div class = "row">
                <p>Chuỗi nhập vào</p>
                <input type="text" name = "str" value = "<?php echo $str; ?>"/>    
            </div><div class = "row">
                <p>Loại từ</p>
                <input type="text" name = "type" value = "<?php echo $type; ?>"/>    
            </div>
            <div class = "row">
                <input type="submit" value = "Format" name = "TypeSubmit"/>
            </div>
            <div class = "row">
                <?php
                    if($flag){
                        echo "<span>Chuỗi sau chuẩn hóa: $result</span>";
                    }
                ?>
            </div>
        </form>
    </div>
</body>
</html>