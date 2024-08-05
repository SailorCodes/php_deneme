<?php
    include("ayar.php")

    //Dışarıdan veri alacaksak;
    //$id=@_GET["id"];


    //Query metodu sayfa kendi içerisinde veri alıcaksa kullanıyoruz
    $query=$baglan->query("select * from kategoriler");
    //$row=query->fetch(PDO::FETCH_BOTH);

    while($row=$query->fetch(PDO::FETCH_BOTH)) {
        echo $row[1].'<br/>';
    }
    /*
    echo '<pre>';
    print_r($row);
    echo '</pre>';
    */
?>
<hr/>
<h2>fetchAll</h2>
<?php
    $query=$baglan->query("select * from kategoriler");
    $rows=$query->fetchAll();
    
    foreach($rows as $row) {
        echo $row["kategoriler_adi"]."<br/>";
    }
?>
<hr/>
<h2>fetchColumn</h2>

<?php
    $query=$baglan->query("select * from kategoriler");

    while($row=$query->fetchColumn(1)) {
        echo $row."<br/>";
    }
?>
<hr/>
<h2>fetchObject</h2>
<?php
    $query=$baglan->query("select * from kategoriler");
    while($row=$query->fetchObject()) {
        echo $row->kategoriler_adi."<br/>";
    }
?>
