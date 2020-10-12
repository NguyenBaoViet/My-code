<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $ReadFull = false;
        $arrayNumber = array(
            0 => 'không',
            1 => 'một',
            2 => 'hai',
            3 => 'ba',
            4 => 'bốn',
            5 => 'năm',
            6 => 'sáu',
            7 => 'bảy',
            8 => 'tám',
            9 => 'chín',
        );

        $number = 11;
        echo $number . '<br>';

        function readNumber($number,$dictionaryNumber,$readFull = true){
            $number = strval($number);
            $number = str_pad($number,3,0,STR_PAD_LEFT);
            
            //lấy chữ số hàng đơn vị, chục, trăm
            $digit_0 = substr($number,2,1);
            $digit_00 = substr($number,1,1);
            $digit_000 = substr($number,0,1);

            //đọc số hàng trăm
            if($digit_000 == null){
                $digit_000 = 0;
            }
            $str_000 = $dictionaryNumber[$digit_000].' trăm ';

            //đọc số hàng chục
            if($digit_00 == null){
                $digit_00 = 0;
            }
            $str_00 = $dictionaryNumber[$digit_00].' mươi ';
            if($digit_00 == 0) {$str_00 = 'linh ';}
            if($digit_00 == 1) {$str_00 = 'mười ';}

            //đọc số hàng đơn vị
            $str_0 = $dictionaryNumber[$digit_0].'.';
            if($digit_00 > 1 && $digit_0 ==1) {$str_0 = 'mốt.';}
            if($digit_00 >= 1 && $digit_0 ==5) {$str_0 = 'lăm.';}
            if($digit_00 >=1 && $digit_0 == 0) {$str_0 = '.';}
            if($digit_00 == 0 && $digit_0 ==0) {
                $str_0 = '.';
                $str_00 = '';
            }
            if($readFull == false){
                if($digit_000 == 0) {$str_000 = '';}
                if($digit_000 == 0 && $digit_00 == 0) {$str_00 = '';}
            }
            return $result = $str_000.$str_00.$str_0;
        }       
        echo readNumber($number,$arrayNumber,false);
    ?>
</body>
</html>