<?php
    include("ayar.php");
/*
    $query=$baglan->query("select * from kategoriler");
    if($query) {
        while($row=$query->fetch()) {
            echo $row["kategori_adi"]."<br/>";
        }
    }else {
        $hata=$baglan->errorInfo();
        echo $hata[2];
    }
*/
/*
    $insert=$baglan->prepare("insert into kategoriler set
    kategori_adi=:kategori_adi,
    kategori_desc=:kategori_desc
    ");
    $insert->execute(array(
        ":kategori_adi"=>"deneme katadi",
        ":kategori_desc"=>"deneme katdesc"
    ));
*/
    $insert=$baglan->prepare("insert into kategoriler set
    kategori_adi=:kategori_adi,
    kategori_desc=:kategori_desc
    ");
    $insert->execute(array(
        ":kategori_adi"=>"deneme katadi",
        ":kategori_desc"=>"deneme katdesc"
    ));
    if($insert->rowCount()>0) {
        echo 'kayıt eklendi';

    }else {
        $hata=$insert->errorInfo();
        echo $hata[2];
    }


?>