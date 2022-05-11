<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    table {
      border-collapse: collapse;
      border-spacing: 0;
      width: 100%;
      border: 1px solid #ddd;
    }

    th, td {
      text-align: left;
      padding: 16px;
    }

    tr:nth-child(even) {
      background-color: #f2f2f2;
    }
  </style>
</head>
<body>



  <table>
    <tr>
      <th>Ad Soyad</th>
      <th>Telefon</th>
      <th>Email</th>
      <th>Konu</th>
      <th>Mesaj</th>
    </tr>





    <?php
     include("baglanti.php");

     $sec="Select* From iletisim";
     $sonuc=$baglan->query($sec);

     if($sonuc->num_rows>0)
     {
       while($cek=$sonuc->fetch_assoc())
       {
        echo"
        <tr>
         <td>".$cek['adsoyad']."</td>
         <td>".$cek['telefon']."</td>
         <td>".$cek['email']."</td>
         <td>".$cek['konu']."</td>
         <td>".$cek['mesaj']."</td>
       </tr>


       ";
     }



   }



   else
   {
    echo "<script>alert('Veritabanında Kayıtlı Hiçbir Veri Bulunamadı')</script>";



      }  


?>
</table>

</body>
</html>

