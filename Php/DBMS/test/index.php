<?php
    $db = new SQLite3('demo.db');

    $db->exec("insert into ThanhVienNhom(MSSV,Hoten) values('1710302','Nguyen Bao Viet')");