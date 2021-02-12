<form method="post" >
    <label for="num">Sayınızı Giriniz: </label>
    <input type="text" name="sayigirisi" id="num"><br>
    <input type="submit" name="kontrol" value="KONTROL">
</form>

<?php
if($_POST)
{
    $sayi=$_POST['sayigirisi'];/*Formumuzudan aldığımız değeri sayi değişkenine atadık*/
    for ($i = 2; $i <= $sayi-1; $i++) {
        if ($sayi % $i == 0) {
            $deger= True;
        }
    }
    if (isset($deger) && $deger) {
        echo 'Girdiğiniz  ' . $sayi . '  sayısı asal değildir.';
    }  else {
        
        echo 'Girdiğiniz  ' . $sayi . '  sayısı asaldır.';
    }
}
?>