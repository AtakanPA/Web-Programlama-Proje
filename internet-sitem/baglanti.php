<?php 	


$vt_sunucu="localhost";
$vt_kullanici="root";
$rt_sifre="";
$vt_adi="atakan-pasali";





$baglan=mysqli_connect($vt_sunucu,$vt_kullanici,$rt_sifre,$vt_adi);



if(!$baglan)
{

die("Veritabanı Bağlantı işlemi başarısız".mysqli_connect_error());

}



 ?>