<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
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
        $arrayUnits = array(
            0 => 'nghìn',
            1 => 'triệu',
            2 => 'tỉ',
        );

        $number = 123456789012;
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
            $str_0 = $dictionaryNumber[$digit_0].'';
            if($digit_00 > 1 && $digit_0 == 1) {$str_0 = 'mốt';}
            if($digit_00 >= 1 && $digit_0 == 5) {$str_0 = 'lăm';}
            if($digit_00 >=1 && $digit_0 == 0) {$str_0 = '';}
            if($digit_00 == 0 && $digit_0 ==0) {
                $str_0 = '';
                $str_00 = '';
            }
            if($readFull == false){
                if($digit_000 == 0) {$str_000 = '';}
                if($digit_000 == 0 && $digit_00 == 0) {$str_00 = '';}
            }
            return $result = $str_000.$str_00.$str_0;
        }

        function readNumber12digit($number,$dictionaryNumber,$dictionaryUnits){
            $number = strval($number);
            $number = str_pad($number,12,0,STR_PAD_LEFT);
            echo $number.'<br>';
            //lấy chữ số hàng nghìn, triệu, tỉ
            $digit_000 = substr($number,9,3);
            echo $digit_000 . '<br>';
            $digit_thousand = substr($number,6,3);
            echo $digit_thousand . '<br>';
            $digit_milion = substr($number,3,3);
            echo $digit_milion . '<br>';
            $digit_bilion = substr($number,0,3);
            echo $digit_bilion . '<br>';

            $str_000 = readNumber($digit_000,$dictionaryNumber,true);

            //đọc số hàng tỉ 
            if($digit_bilion == null){
                $digit_bilion =0;
            }
            $str_bilion = readNumber($digit_bilion,$dictionaryNumber,true).' tỉ ';

            //đọc số hàng triệu
            if($digit_milion==null){
                $digit_milion = 0;
            }
            $str_milion = readNumber($digit_milion,$dictionaryNumber,true).' triệu ';

            //đọc số hàng nghìn
            if($digit_thousand == null){
                $digit_thousand = 0;
            }
            $str_thousand = readNumber($digit_thousand,$dictionaryNumber,true).' nghìn ';

            return $result = $str_bilion.$str_milion.$str_thousand.$str_000;
        }
        echo "Number = $number <br>";
        echo readNumber12digit($number,$arrayNumber,$arrayUnits);
    ?>
</body>
</html>