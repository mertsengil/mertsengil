<?php

require 'baglan.php';


?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>MERTFIT/UYEOL</title>
<link rel="stylesheet" href="anasayfa.css">    
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Creepster&family=Gloria+Hallelujah&family=Oxygen:wght@300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
</head>
<body>
    <div id="menu">
        <font><i class="fas fa-dumbbell"></i> MERTFIT <span>| Hayat Sporla Güzel...</span></font>
        
        <ul class="menu">
            <li><a href="anasayfa.html">ANASAYFA</a></li>
            <li><a href="galeri.html">GALERİ</a></li>
            <li><a href="hakkimizda.html">HAKKIMIZDA</a></li>
            <li><a href="kayit.php">ÜYE OL</a></li>
        </ul>
        <i class="fas fa-search"></i>
        <i class="fab fa-instagram"></i>
        <i class="fab fa-twitter"></i>
        <i class="fas fa-phone-volume"></i>
    </div>
        <div id="container"> 
        <section id="registersec">
           <form id="regform" action="islem.php" method="post"> 
            <h1>ÜYE OL</h1> 
            <div class="register">
                <label for="isim">İSİM<br></label>
                <input placeholder="->" name="isim" type="text" required autofocus>
            </div>
            <div class="register">
                <label for="soyisim">SOYİSİM<br></label>
                <input placeholder="->" name="soyisim" type="text" required autofocus>
            </div>
            <div class="register">
                <label for="e-posta">E-POSTA<br></label>
                <input id="eposta" placeholder="abc@xyzmail.com" name="eposta" type="text" required>
            </div>
            <div class="register">
                <label>DOĞUM TARİHİ<br></label>
                <input id="dgko" placeholder="Doğum Tarihi" name="dg" type="date" required>
            </div>
            <div class="register">
                <label for="paket">ÜYELİK PAKETİNİZİ SEÇİNİZ<br></label>
                <select id="paket" name="paket" required >
                    <option>seçiniz</option>
                    <option value="ogrenci">Öğrenci(1 ay): 150TL</option>
                    <option value="tek">1 kişi(1 ay): 350TL</option>
                    <option value="aile">4 kişilik aile(1 ay): 900TL</option>
                    <option value="ogrenci2">Öğrenci(1 YIL): 1000TL</option>
                    <option value="tek2">1 kişi(1 YIL): 3000TL</option>
                    <option value="aile2">4 kişilik aile(1 YIL): 8500TL</option>
                  </select>
            </div>
            <div class="register">
                <button href="kayit.php" id="submit" name="kayit" value="UYE OL">UYE OL</button>
            </div>
           </form>
           
        </section>
    </div>


    <div id="footer">
        <font id="footerlogo"><i class="fas fa-dumbbell"></i> MERTFIT</font>
        <h4 id="tumhaklar">Tüm Hakları Saklıdır &copy; | 2021</h4>
        <h3 id="adres">Adres: Küçükyalı, İnönü Cd. No:4, 34854, 34854 Maltepe/İstanbul</h3>
    </div>
   <script src="scriptweb.js"></script>
</body>
</html>