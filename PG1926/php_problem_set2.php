<html lang="tr">
<head>
    <title>Mükemmel Sayı </title>
</head>
<body>

<form method="post">
    <label for="num">Sayınızı Giriniz </label>
    <input id="num" type="text" name="sayi"/>
    <button type="submit" name="butonAdi">KONTROL</button>
</form>
</body>

</html>
<?php
if ($_POST) {
//POST değerini formdan al
    $num = $_POST['sayi'];
    $i = 1;
    $sum = 0; //toplam değişkenini tanımlandı.
    while ($i < $num) { //birer birer artırılan i değişkeni girdiğimiz sayıya göre kontrolu yapılıyor
        if ($num % $i == 0) { // i değişkenin sayımıza tam bölünüp bölünmediği kontrolediliyor
            $sum = $sum + $i;//Koşul sağlanıyorsa Sum diye tanımladığımız toplam değerimize ekleniyor
        }
        $i++;
    }
    if (isset(($_POST["butonAdi"]))) {     
          if ($num == $sum) {//Sayımızın tam bölenlerinin toplamı sayımıza eşit mi kontrolu yapılıyor.
        echo "<script type='text/javascript' >alert('Girdiğiniz sayı Mükemmel Sayıdır!!');</script>";
        
        } 
    else {
        echo "<script type='text/javascript' >alert('Girdiğiniz sayı Mükemmel Sayı değildir!!');</script>";
         }
    
    }
    
}
?>