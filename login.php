<?php
$kullanici_adi = $_POST['kullanici_adi'];
$kullanici_parola = $_POST['kullanici_parola'];
$ilk_harf = substr($kullanici_adi, 0, 1);
$ilk_10_harf = substr($kullanici_adi, 0, 10);

if ($ilk_harf != 'b' && $ilk_harf != 'g') {
    echo '<script>alert("Wrong UserName");</script>';
    echo '<meta http-equiv="refresh" content="1;url=Web_Projesi.html">';
    exit;
}

if ($kullanici_parola != $ilk_10_harf) {
    echo '<script>alert("Wrong Password");</script>';
    echo '<meta http-equiv="refresh" content="1;url=Web_Projesi.html">';
    exit;
}

echo "Hoşgeldin " . $ilk_10_harf;
echo '<meta http-equiv="refresh" content="2;url=Ana_Sayfa.html">';
exit;
?>

