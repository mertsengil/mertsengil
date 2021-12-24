<?php

require 'baglan.php';

if(isset($_POST['kayit'])){
    $isim = $_POST['isim'];
    $soyisim = $_POST['soyisim'];
    $eposta = $_POST['eposta'];
    $dg = $_POST['dg'];
    $paket = $_POST['paket']; 



    if($dg<18){
        echo "18 yaşından küçükler kayıt olamaz";
    }
    else{
        //veri tabanı kayıt işlemi yapıcam burada
        $sorgu = $db->prepare('INSERT INTO hesaplar SET isim = ?, soyisim =?, eposta=?, dg=?, paket=?');
        $ekle = $sorgu -> execute([
            $isim, $soyisim, $eposta, $dg, $paket
        ]);
        if($ekle){
            echo "Kayıt başarıyla gerçekleşti yönlendiriliyorsunuz";
            header('Refresh:2; registered.php');
        }
        else{
            echo "bir hata oluştu";
        }


    }


}

?>