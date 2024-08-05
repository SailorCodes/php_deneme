<?php
    include("ayar.php");
    
    try{
        $update=$baglan->prepare("update kategoriler set
        kategori_adi=:kategori_adi,
        kategori_desc=:kategori_desc,
        kategori_keyw=:kategori_keyw
        where kat_id:kat_id
        ");
        $update->execute(array(
            ":kategori_adi"=>"Front End",
            ":kategori_desc"=>"Front End Desc",
            ":kategori_keyw"=>"Front End Keyw",
            ":kat_id"=>23
        ));
        if($update->rowCount()>0) {
            echo 'guncellendi';
        }

    }catch(PDOException $ex) {
        echo $ex->getMessage();
    }
?>