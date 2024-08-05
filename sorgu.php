<?php
    include("ayar.php");

    try{
        $konu=$baglan->prepare("select * from konular where konu_id=9");
        $konu->execute();
        $kategori=explode(',',$konu->fetch()["konu_kategori"]);
        print_r($kategori); echo "<br/>";

        $tutucu=implode(',',array_fill(0,count($kategori),'?'));
        echo $tutucu."<br/>";

        $query=$baglan->prepare("select * from kategoriler where kat_id IN ($tutucu)");
        $query->execute($kategori);
        while($row=$query->fetch()) {
            echo $row["kategori_adi"]."<br/>";
        }
    }catch (PDOException $ex) {
        echo $ex->getMessage();
    }
?>