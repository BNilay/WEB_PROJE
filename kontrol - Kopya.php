<?php
if(isset($_POST['kullanici'],$_POST['sifre']) && ($_POST['kullanici']!='') && ($_POST['sifre']!='')){
    echo "Giriş başarılı";
} else {
    echo "Bilgilerinizi kontrol edin ve tekrar girin";
}
echo "<p><a href='giris.html'>&lt;GERİ DÖN;</a></p> ";
?>