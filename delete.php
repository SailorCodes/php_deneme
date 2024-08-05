<?php
    include("ayar.php");
    
    try{
        $delete=$baglan->prepare("delete from kategoriler where kat_id=?");
        $delete->execute(array(
            27
        ));
        if($delete->rowCount()>0){
            echo 'satir silindi'
        }
    }catch(PDOException $ex) {
        echo $ex->getMessage();
    }
?>