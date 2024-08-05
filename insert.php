<?php
    include("ayar.php");

    try {
/*
        $query=$baglan->query("select * from kategoriler limit 0");
        if($query->rowCount()>0) {
            while($row=$query->fetch()) {
                echo $row["kategori_adi"]."<br/>";
            }
        }else {
            echo "henüz kayıt eklenmedi";
        }
*/
/*
        $id=@_GET["id"];
        $query=$baglan->query("select * from kategoriler where kat_id=?");
        $query->execute();
        while($row=$query->fetch()) {
            echo $row["kategori_adi"]."<br/>";
        }
*/
/*
        $insert=$baglan->prepare("insert into kategoriler set 
            kategori_adi=:etiket1,
            kategori_desc=:kategori_desc
            ");
            $insert->execute(array(
                ":etiket1"=>"deneme yazi",
                ":kategori_desc"=>"deneme"
            ));
            if($insert->rowCount()>0){
                echo 'kaydedildi';
            }
*/
    $query=$baglan->query("select * from kategoriler limit 0");
    
    $query->bindValue(1,1,PDO::PARAM_N);
    $query->bindValue(2,1,PDO::PARAM_INT);

    $query->execute();
    while($row=$query->fetch()){
        echo $row["kategori_adi"]."<br/>";
    }





        catch(PDOException $ex) {
            echo $ex->getMessage();
        }
    }
?>