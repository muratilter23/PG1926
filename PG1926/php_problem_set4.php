<html >
<head>
    <title>Para Üstü</title>
</head>
<div >
<form method="post">
    <label for="para2">Para Miktarını Giriniz: </label>
    <input type="text" name="para1" id="para">
    <input name="gonder" type="submit" value="Para Üstünü Hesapla"/>
</form></div>
<body>
<?php
if($_POST){
$para = $_POST['para1'] * 100;
$artanpara = $para;

$a100 = 0;
$a50 = 0;
$a25 = 0;
$a10 = 0;
$a5 = 0;
$a1 = 0;


//1 Tl den kaç tane verilecek
if ($para >= 100) {  //Girilen para değerinin 100 den büyük mü
    $a100 = $para / 100;// 100 ile bölümünden bölüm değeri hesaplanacak
    $tartanpara = $para % 100;// Modu alınarak artanpara değişkenine atanacak
    $para = intval($artanpara);
}

//50 Kuruştan kaç tane verilecek
if ($para >= 50) {
    $a50 = $para / 50;
    $artanpara = $para % 50;
    $para = intval($artanpara);
}

//25 Kuruştan kaç tane verilecek
if ($para >= 25) {
    $a25 = $para / 25;
    $artanpara = $para % 25;
    $para = intval($artanpara);
}

//10 Kuruştan kaç tane verilecek
if ($para >= 10) {
    $a10 = $para / 10;
    $artanpara = $para % 10;
    $para = intval($artanpara);
}

//5 Kuruştan kaç tane verilecek
if ($para >= 5) {
    $a5 = $para / 5;
    $artanpara = $para % 5;
    $para = intval($artanpara);
}

//1 Kuruştan kaç tane verilecek
if ($para >= 1) {
    $a1 = $para / 1;
    $artanpara = $para % 1;
    $para = intval($artanpara);
}

echo intval($a100) . " adet 1 TL <br>";     //1
echo intval($a50) . " adet 50 Kuruş <br>";  //0,50
echo intval($a25) . " adet 25 Kuruş <br>";  //0,25
echo intval($a10) . " adet 10 Kuruş <br>";  //0,10
echo intval($a5) . " adet 5 Kuruş <br>";    //0,05 
echo intval($a1) . " adet 1 Kuruş <br>";    //0,01
}
?>


</body>
</html>
