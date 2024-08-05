<?php

    header("content-type:text/html;charset=utf8");

    try {
        $baglan=new PDO("mysql:hostname=localhost;dbname=cms;charset=utf8","root","");
        $baglan->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $baglan->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
    }
    catch(PDOException $ex) {
        //die("bağlantı hatası");
        echo $ex->getMessage();
    }
    $query=$baglan->query("select * from kategoriler");


?>