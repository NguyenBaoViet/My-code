<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $URL = 'http://210.245.126.171/Music/NhacTre/TinhYeu_LyMaiTrang/wma32/06_BienTham_TinhYeu_LyMaiTrang.wma';
        $id = "";
        $name = "";
        $album = "";
        $singer = "";
        $type = "";

        echo "URL = $URL";
        //Ex1:
        function getinfo01($str){
            $array = explode("/",$str);
            $result = $array[count($array)-1];
            return $result;
        }

        //Ex2:
        function getinfo02($str){
            $array = parse_url($str,PHP_URL_PATH);
            $info = explode('/',$array);
            return $result = $info[count($info)-1];
        }
        //Ex3:
        function getinfo03($str){
            $index = strripos($str,'/');
            return $result = substr($str,$index+1);
        }

        //lấy các thành phần cần thiết.
        $mang = getinfo02($URL);
        $arrayInfo = explode('_',$mang);
        //ID 
        $id = $arrayInfo[0];
        //Name
        $name = $arrayInfo[1];
        //Album
        $album = $arrayInfo[2];
        //Singer, Type
        $arraytype = explode('.',$arrayInfo[3]);
        $type = $arraytype[1];
        $singer = $arraytype[0];
        //format
        function format($str){
            $result = $str[0];
            for ($i = 1; $i < strlen($str); $i++) {
                if(ctype_upper($str[$i])){
                    $result.= ' '.$str[$i];
                }else{
                    $result.= $str[$i];
                }
            }
            return $result;
        }
        $name = format($arrayInfo[1]);
        $album = format($arrayInfo[2]);
        $singer = format($arraytype[0]);
        //Xuât.
        echo "<br>";
        echo "ID: $id.<br>";
        echo "Name of song: $name.<br>";
        echo "Album: $album.<br>";
        echo "Singer: $singer.<br>";
        echo "Type: $type.";

    ?>
</body>
</html>