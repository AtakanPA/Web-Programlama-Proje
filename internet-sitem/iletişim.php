<!DOCTYPE html>
<html class="h-100">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://kit.fontawesome.com/b6d6eea9d5.js" crossorigin="anonymous"></script>

	<title></title>
</head>
<body class="h-100  d-flex flex-column">


	<nav class="navbar navbar-expand-md navbar-light bg-light  py-3 mb-0">
		<div class="container-fluid logo">

			<a href="index.php>" class="navbar-brand">Atakan Paşalı</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>



			<div class="collapse navbar-collapse" id="navbarNav">

				<ul class="navbar-nav">

					<li class="nav-item">
						<a href="index.php" class="nav-link">AnaSayfa</a>
					</li>


					<li class="nav-item">
						<a href="ozgecmis.php" class="nav-link">ÖzGeçmişim</a>
					</li>

					<li class="nav-item">
						<a href="ilgialan.php" class="nav-link">İlgi Alanlarım</a>
					</li>

					<li class="nav-item">
						<a href="şehrim.php" class="nav-link">Şehrim</a>
					</li>

					<li class="nav-item">
						<a href="iletişim.php" class="nav-link active" aria-current="page">İletişim</a>
					</li>
					<li class="nav-item">
						<a href="miras.php" class="nav-link">Mirasımız</a>
					</li>
				</ul>

			</div>

			<div>
				<ul class="navbar-nav">
					<li class="nav-item justify-content-end">
						<a class="btn btn-success" href="giris.html">Giriş Yap</a>

					</li>
				</ul>
			</div>

		</div>
	</nav>


	<main>
		<div class="container-fluid m-0 pt-5 pb-5 ps-sm-5 pe-sm-5 iletbackground">

			<div class="row  m-md-5 p-md-5  rounded justify-content-center text-black iletrow bg-white">
				
				<div class="col-md-6  ms-lg-0 ">
					<script>
						function validateForm()
						{
							var mail=document.forms["myform"]["email"].value;
							var adsoyad=document.forms["myform"]["adsoyad"].value;
							var numara=document.forms["myform"]["numara"].value;
							var konu=document.forms["myform"]["konu"].value;
							var mesaj=document.forms["myform"]["mesaj"].value;
							if(mail=="")
							{
								alert("Lüffen Bilgilerinizi Tam Giriniz")

							}
							
							else if(adsoyad=="")
							{
								alert("Lüffen Bilgilerinizi Tam Giriniz")

							}
							
							else if(numara=="")
							{
								alert("Lüffen Bilgilerinizi Tam Giriniz")

							}
							
							else if(konu=="")
							{
								alert("Lüffen Bilgilerinizi Tam Giriniz")

							}
							
							else if(mesaj=="")
							{
								alert("Lüffen Bilgilerinizi Tam Giriniz")

							}

						}


					</script>


					<form name="myform" onsubmit="return validateForm()" action="iletişim.php" method="post">
						<div class="mb-1">
							<label for="email" class="form-label">E-Mail Adresiniz</label>
							<input type="email" name="email" id="email" class="form-control" aria-decribedby="emailaciklama">
							<div id="emailaciklama" class="form-text">E-Mailiniz bizde saklı kalacaktır.</div>
						</div>

						<div class="row">

							<div class="col-sm-6">
								<div class="mb-1 me-0">
									<label for="adsoyad" class="form-label ">Ad Ve Soyad</label>
									<input type="text" name="adsoyad" id="adsoyad" class="form-control">						

								</div>
							</div> 
							<div class="col-sm-6">
								<div class="mb-1  me-0">

									<label for="numara" class="form-label ">Telefon Numaranız</label>
									<input type="text" name="numara" id="numara" class="form-control">
								</div>
							</div>
						</div>

						<div class="mb-1">
							<label for="konu" class="form-label">Konu Başlığı</label>
							<input type="text" name="konu" id="konu" class="form-control">
							
						</div>

						<div class="mb-1">
							<label for="mesaj" class="form-label">Mesajınız</label>
							<textarea name="mesaj" id="mesaj" class="form-control"></textarea>
							
						</div>
						<input type="submit" name="Gönder" class="rounded btn border m-2" >
					</form>
				</div>


				<div class="col-md-6 border-start ">

					



					<div class="container-fluid p-0">
						<p>E Posta:</p>
						<p>Atakan.Pa@outlook.com</p>
						<p>atakan.pasali@ogr.sakarya.edu.tr</p>

						
						<p>Cep Telefonu:</p>
						<p>+90 538 205 91 52</p>
					</div>





					


				</div>
			</div>

		</div>
	</div>
</main>











<footer  class="py-md-4  bg-dark text-red border-top mt-auto border-danger">

	<div class="container  m-0 text-center">



		<a title="Instagram" class="icons m-1" target="_blank" href="https://www.instagram.com/atakanpasali_/"><i class="fa-brands fa-instagram"></i> </a>

		<a title="Twitter" class="icons m-1" target="_blank" href="#"><i class="fa-brands fa-twitter"></i></a>

		<a title="Github" class="icons m-1" target="_blank" href="https://github.com/AtakanPA"><i class="fa-brands fa-github"></i></a>

		<a title="Discord" class="icons m-1" target="_blank" href="https://discord.gg/YTrEq7AN"><i class="fa-brands fa-discord"></i></a>
	</div>


</footer>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>

<?php 	

include("baglanti.php");


if(isset($_POST["adsoyad"],$_POST["numara"],$_POST["konu"],$_POST["mesaj"],$_POST["email"])&&$_POST["adsoyad"]!==""&&$_POST["numara"]!==""&&$_POST["konu"]!==""&&$_POST["mesaj"]!==""&&$_POST["email"]!=="")
{

	$adsoyad=$_POST["adsoyad"];
	$telefon=$_POST["numara"];
	$email=$_POST["email"];
	$konu=$_POST["konu"];
	$mesaj=$_POST["mesaj"];


	$ekle="INSERT INTO iletisim ( adsoyad, telefon, email, konu, mesaj) VALUES ('".$adsoyad."','".$telefon."','".$email."','".$konu."','".$mesaj."')";


		if($baglan->query($ekle)===TRUE)
		{
			echo "<script>alert('Mesajınız Başarı İle Gönderilmiştir')</script>";




		}
		else
		{

			echo "<script>alert('Mesajınız Gönderilirken Bir Hata Oluştu')</script>";

		}


	}










?>