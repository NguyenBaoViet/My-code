<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bạn thuộc chòm sao gì?</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
    <?php
        $ngaysinh ="";
        $thangsinh ="";
        $flag = false;
        $image = "";
        $name = "";
        $time = "";

        if(isset($_POST['ngaysinh'])&& isset($_POST['thangsinh']))
        {
            $ngaysinh = $_POST['ngaysinh'];
            $thangsinh = $_POST['thangsinh'];

            if(is_numeric($ngaysinh)&& is_numeric($thangsinh))
            {
                /*
                1.Bạch Dương (Aries): 21/03 – 20/04
                2.Kim Ngưu (Taurus): 21/04 – 20/05
                3.Song Tử (Gemini): 21/05 – 21/06
                4.Cự Giải (Cancer): 22/06 – 22/07
                5.Sư Tử (Leo): 23/07 – 22/08
                6.Xử Nữ (Virgo): 23/08 – ngày 22/09
                7.Thiên Bình (Libra): 23/09 tới ngày 23/10
                8.Bò Cạp (Scorpion): 24/10 – 22/11
                9.Nhân Mã (Sagittarius): 23/11 – 21/12
                10.Ma Kết (Capricorn): 22/12 – 19/01
                11.Bảo Bình (Aquarius): 20/01 – 18/02
                12.Song Ngư (Pisces): 19/02 – 20/03
                */ 
                if($thangsinh <= 12 && $thangsinh >= 1 )
                {
                    $flag = true;
                    switch($thangsinh)
                    {
                        case 1:
                            if($ngaysinh < 20 && $ngaysinh > 0){
                                $image = "Capricorn";
                                $name = "Ma kết";
                                $time = "22/12 – 19/01";
                            }else if ($ngaysinh >= 20 && $ngaysinh <= 31){
                                $image = "Aquarius";
                                $name = "Bảo Bình";
                                $time = "20/01 – 18/02";
                            }else{
                                $flag = false;
                            }
                        break;
                        case 2:
                            if($ngaysinh < 19 && $ngaysinh > 0){
                                $image = "Aquarius";
                                $name = "Bảo Bình";
                                $time = "20/01 – 18/02";
                            }else if ($ngaysinh >= 19 && $ngaysinh <= 28){
                                $image = "Pisces";
                                $name = "Song Ngư";
                                $time = "19/02 – 20/03";
                            }else{
                                $flag = false;
                            }
                        break;
                        case 3:
                            if($ngaysinh < 21 && $ngaysinh > 0){
                                $image = "Pisces";
                                $name = "Song Ngư";
                                $time = "19/02 – 20/03";
                            }else if ($ngaysinh >= 20 && $ngaysinh <= 31){
                                $image = "Aries";
                                $name = "Bạch Dương";
                                $time = "21/03 – 20/04";
                            }else{
                                $flag = false;
                            }
                        break;
                        case 4:
                            if($ngaysinh < 21 && $ngaysinh > 0){
                                $image = "Aries";
                                $name = "Bạch Dương";
                                $time = "21/03 – 20/04";
                            }else if ($ngaysinh >= 21 && $ngaysinh <= 30){
                                $image = "Taurus";
                                $name = "Kim Ngưu";
                                $time = "21/04 – 20/05";
                            }else{
                                $flag = false;
                            }
                        break;
                        case 5:
                            if($ngaysinh < 21 && $ngaysinh > 0){
                                $image = "Taurus";
                                $name = "Kim Ngưu";
                                $time = "21/04 – 20/05";
                            }else if ($ngaysinh >= 21 && $ngaysinh <= 31){
                                $image = "Gemini";
                                $name = "Song Tử";
                                $time = "21/05 – 21/06";
                            }else{
                                $flag = false;
                            }
                        break;
                        case 6: 
                            if($ngaysinh < 22 && $ngaysinh > 0){
                                $image = "Gemini";
                                $name = "Song Tử";
                                $time = "21/05 – 21/06";
                            }else if ($ngaysinh >= 22 && $ngaysinh <= 30){
                                $image = "Cancer";
                                $name = "Cự Giải";
                                $time = "22/06 – 22/07";
                            }else{
                                $flag = false;
                            }
                        break;
                        case 7:
                            if($ngaysinh < 23 && $ngaysinh > 0){
                                $image = "Cancer";
                                $name = "Cự Giải";
                                $time = "22/06 – 22/07";
                            }else if ($ngaysinh >= 23 && $ngaysinh <= 31){
                                $image = "Leo";
                                $name = "Sư Tử";
                                $time = "23/07 – 22/08";
                            }else{
                                $flag = false;
                            }
                        break;
                        case 8:
                            if($ngaysinh < 23 && $ngaysinh > 0){
                                $image = "Leo";
                                $name = "Sư Tử";
                                $time = "23/07 – 22/08";
                            }else if ($ngaysinh >= 23 && $ngaysinh <= 31){
                                $image = "Virgo";
                                $name = "Xử Nữ";
                                $time = "23/08 – 22/09";
                            }else{
                                $flag = false;
                            }
                        break;
                        case 9:
                            if($ngaysinh < 23 && $ngaysinh > 0){
                                $image = "Virgo";
                                $name = "Xử Nữ";
                                $time = "23/08 – 22/09";
                            }else if ($ngaysinh >= 23 && $ngaysinh <= 30){
                                $image = "Libra";
                                $name = "Thiên Bình";
                                $time = "23/09 - 23/10";
                            }else{
                                $flag = false;
                            }
                        break;
                        case 10:
                            if($ngaysinh < 24 && $ngaysinh > 0){
                                $image = "Libra";
                                $name = "Thiên Bình";
                                $time = "23/09 - 23/10";
                            }else if ($ngaysinh >= 24 && $ngaysinh <= 31){
                                $image = "Scorpion";
                                $name = "Bò Cạp";
                                $time = "24/10 – 22/11";
                            }else{
                                $flag = false;
                            }
                        break;
                        case 11:
                            if($ngaysinh < 23 && $ngaysinh > 0){
                                $image = "Scorpion";
                                $name = "Bò Cạp";
                                $time = "24/10 – 22/11";
                            }else if ($ngaysinh >= 23 && $ngaysinh <= 30){
                                $image = "Sagittarius";
                                $name = "Nhân Mã";
                                $time = "23/11 – 21/12";
                            }else{
                                $flag = false;
                            }
                        break;
                        case 12://10.Ma Kết (Capricorn): 22/12 – 19/01
                            if($ngaysinh < 22 && $ngaysinh > 0){
                                $image = "Sagittarius";
                                $name = "Nhân Mã";
                                $time = "23/11 – 21/12";
                            }else if ($ngaysinh >= 22 && $ngaysinh <= 30){
                                $image = "Capricorn";
                                $name = "Ma Kết";
                                $time = "22/12 – 19/01";
                            }else{
                                $flag = false;
                            }
                        break;
                    }
                }else{
                    $flag = false;
                }
            }
        }
    ?>
    <div class = "container">   
        <h1>Bạn thuộc chòm sao nào?</h1>
        <form action="#" method="POST" name="main-form">
            <div class = "row">
                <span>Ngày sinh</span>
                <input type="text" name="ngaysinh" value=""/>
            </div>
            <div class = "row">
                <span>Tháng sinh</span>
                <input type="text" name="thangsinh" value = ""/>
            </div>
            <div class = "row">
                <input type="submit" value="Lấy chòm sao" name = "typeSubmit"/>
            </div>           
        </form>
        <?php
            $result = '<div class = "result">
            <img src ="image/'.$image.'.jpg" alt = "'.$image.'"/>
            <p>'.$name.'<span> ('.$image.' '.$time.')</span></p>
            </div>';
            if(isset($_POST['ngaysinh'])&& isset($_POST['thangsinh'])){
                if($flag){
                    echo $result;
                }else{
                    echo "<p>Tháng hoặc ngày không phù hợp vui lòng thử lại!</p>";
                }
            }
        ?>
    </div>
</body>
</html>