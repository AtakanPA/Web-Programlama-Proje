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

			<a href="index.php" class="navbar-brand">Atakan Paşalı</a>
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
						<a href="şehrim.php" aria-current="page" class="nav-link active">Şehrim</a>
					</li>

					<li class="nav-item">
						<a href="iletişim.php" class="nav-link " >İletişim</a>
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
		<div class="container-fluid p-0">
			<div class="row w-100" >
				<div class="col-lg-2 col-md-3 col-sm-4">

					<div class="accordion" id="accordionExample">
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingOne">
								<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
									Genel Bilgiler
								</button>
							</h2>
							<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
								<div class="accordion-body">
									<div class="flex-column" id="list-tab" role="tablist">

										<a href="şehrim.php" class="btn border justify-content-center p-2 w-100" >Genel Bilgiler</a>
									</div>
								</div>
							</div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingTwo">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
									Yöresel Lezzetler
								</button>
							</h2>
							<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
								<div class="accordion-body">
									<div class="list-group flex-column" id="list-tab" role="tablist">
										<a class="list-group-item list-group-item-action " id="list-mmk-list" data-bs-toggle="list" href="#list-mmk" role="tab" aria-controls="list-mmk">Muğla Mutfal Kültürü</a>
										<a class="list-group-item list-group-item-action" id="list-mç-list" data-bs-toggle="list" href="#list-mç" role="tab" aria-controls="list-mç">Milas Çaykaması</a>
										<a class="list-group-item list-group-item-action" id="list-söndürme-list" data-bs-toggle="list" href="#list-söndürme" role="tab" aria-controls="list-söndürme" >Börülce Ekşilemesi</a>
										<a class="list-group-item list-group-item-action" id="list-çök-list" data-bs-toggle="list" href="#list-çök" role="tab" aria-controls="list-çök">Çökertme Kebabı</a>
										<a class="list-group-item list-group-item-action" id="list-bm-list" data-bs-toggle="list" href="#list-bm" role="tab" aria-controls="list-bm">Bodrum Mantısı</a>
										<a class="list-group-item list-group-item-action" id="list-mk-list" data-bs-toggle="list" href="#list-mk" role="tab" aria-controls="list-mk" >Milas Köfte</a>

									</div>
								</div>
							</div>
						</div>

						<div class="accordion-item">
							<h2 class="accordion-header" id="headingFour">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
									Gezilecek Yerler
								</button>
							</h2>
							<div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
								<div class="accordion-body">
									<div class="list-group flex-column" id="list-tab" role="tablist">
										<a class="list-group-item list-group-item-action " id="list-Bodrum-list" data-bs-toggle="list" href="#list-Bodrum" role="tab" aria-controls="list-Bodrum">Bodrum</a>
										<a class="list-group-item list-group-item-action" id="list-Marmaris-list" data-bs-toggle="list" href="#list-Marmaris" role="tab" aria-controls="list-Marmaris">Marmaris</a>
										<a class="list-group-item list-group-item-action" id="list-Fethiye-list" data-bs-toggle="list" href="#list-Fethiye" role="tab" aria-controls="list-Fethiye" >Fethiye</a>
										<a class="list-group-item list-group-item-action" id="list-Datça-list" data-bs-toggle="list" href="#list-Datça" role="tab" aria-controls="list-Datça">Datça</a>
										
										<a class="list-group-item list-group-item-action" id="list-Dalyan-list" data-bs-toggle="list" href="#list-Dalyan" role="tab" aria-controls="list-Dalyan" >Dalyan</a>

									</div>
								</div>
							</div>
						</div>  

						<div class="accordion-item">
							<h2 class="accordion-header" id="headingFive">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
									Tarihimiz
								</button>
							</h2>
							<div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
								<div class="accordion-body">
									<div class="list-group flex-column" id="list-tab" role="tablist">
										<a class="list-group-item list-group-item-action " id="list-Muğlat-list" data-bs-toggle="list" href="#list-Muğlat" role="tab" aria-controls="list-Muğlat">Muğlanın Tarihi</a>							



									</div>
								</div>
							</div>
						</div>  
					</div>
				</div>

				<div class="col-lg-10 col-md-9 col-sm-8 kaydırma">
					<div class="tab-content container yukseklik  mt-sm-5 px-5" id="nav-tabContent">
						<div class="tab-pane fade show active" id="list-Genel" role="tabpanel" aria-labelledby="list-Genel-list">

							<div class="row h-50">
								<div class="col-12 ">
									<h1 class="pb-4 text-center mycolor" >
										Muğla Hakkında Genel Bilgiler. 
									</h1>
									<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
										<div class="carousel-indicators">
											<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
											<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
											<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
											<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
										</div>


										<div class="carousel-inner "  style="max-height:500px !important;">
											<div class="carousel-item active">
												<a href="https://www.gezipedia.net/340-fethiyede-gezilecek-yerler.html">
													<img src="images/slider0.jpg" class="d-block  img-fluid " alt="...">
												</a>
											</div>
											<div class="carousel-item">
												<a href="https://seyyahdefteri.com/dalaman-cayi-nerede-nasil-gidilir-rafting-ucretleri-mugla/">
													<img src="images/slider1.jpg" class=" d-block  img-fluid" alt="...">
												</a>
											</div>
											<div class="carousel-item">
												<a href="https://blog.biletbayi.com/bodrumda-gezilecek-yerler.html/">
													<img src="images/slider2.jpg" class="d-block  img-fluid" alt="...">
												</a>
											</div>
											<div class="carousel-item">
												<a href="https://marmaristown.com/tr/marmaris-hakkinda/">
													<img src="images/slider3.jpg" class="d-block  img-fluid" alt="...">
												</a>
											</div>
										</div>
										<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
											<span class="carousel-control-prev-icon" aria-hidden="true"></span>
											<span class="visually-hidden">Previous</span>
										</button>
										<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
											<span class="carousel-control-next-icon" aria-hidden="true"></span>
											<span class="visually-hidden">Next</span>
										</button>
									</div>
								</div>
							</div>
							
							<div class="row ">
								<div class="col-lg-9">
									<h2 class="mt-3">

										Muğla	
									</h2>
									<p class="fs-6">
										Muğla ili, Türkiye Cumhuriyeti'nin Ege Bölgesi'ne dahil olan, topraklarının küçük bir kısmı Akdeniz Bölgesi içine giren Ortaca, Dalaman, Fethiye, Marmaris, Datça ve Bodrum gibi tatil bölgeleri ile ünlü ildir.
									</p>
									<h2>Coğrafyamız</h2>
									<p class="fs-6">
										Türkiye'nin güneybatı ucunda yer alan Muğla, kuzeyinde Aydın, kuzeydoğusunda Denizli ve Burdur, doğusundaAntalya ile komşu olup, güneyinde Akdeniz, batısında  Ege Denizi ile çevrilidir.
										<br>
										<br>
										Toplam uzunluğu 1100 km'yi biraz aşan deniz kıyıları ile Muğla, Ülkemizin en uzun sahil şeridine sahip ilidir. En büyük ilçesi Fethiye’dir. Muğla ilinde ayrıca iki büyük göl bulunmaktadır. Bunlar, Milas ile Aydın ilinin Söke ilçesi sınırlarının içine de giren  Bafa Gölü ile Köyceğiz ilçesindeki Köyceğiz Gölü'dür. Önemli üç akarsuyu ise Çine Çayı(Yatağan'dan geçerken Yatağan Çayı), Esen Çayı (Seki beldesinden geçerken Seki Çayı) ve Ortaca-Dalaman arasında yer alan ve bu iki ilçe arasında sınır olarak kabul edilen Dalaman Çayı'dır.

									</p>

									<h2>Muğlanın Nüfusu</h2>
									<p class="fs-6">

										Muğla,Türkiye'nin en kalabalık yirmi dördüncü şehridir ve 2020 itibarıyla 1.021.773 nüfusa sahiptir.
										<br>						
										Muğla nüfusu bir önceki yıla göre 20.368 artmıştır.			
										<br>				
										Bu nüfus, 517.961 erkek ve 503.180 kadından oluşmaktadır.
										<br>
										Yüzde olarak ise: %50,72 erkek, %49,28 kadındır.

									</p>						

									<h2>Kültür Ve Sanat</h2>
									<p class="fs-6">
										Karya’nın en önemli mimari yapısı Halikarnassos’taki Mausoleum ya da Halikarnassos Mezar Anıtı’dır. Karya satrabı 2. Mausolos döneminde (MÖ 377-353) krallığın başkenti Mylasa’dan Halikarnassos’a taşınmış, bu durum kentin daha da gelişmesini sağlamıştır. Dünyanın Yedi Harikası’ndan biri sayılan Mausoleum, MÖ 350’de Mausolos’un eşi ve kızkardeşi II. Artemisia tarafından yaptırılmıştır. Bu anıtın yüksek bir kaide üzerinde yer alması Lykia sanatının etkilerini, üzerindeki mezar anıtı ise, İon düzeninde galerinin etkilerini yansıtır. 

										Müsgebi (Ortakent-Bodrum), Knidos ve Stratonikeia’da yapılan kazılarda MÖ 15-13. yüzyıllara dayanan Miken çanak çömleklerinin bulunması, bölgenin o tarihlerde Rodos ve Kıbrıs üzerinden Suriye’ye kadar yayılan Miken kültürüyle olan ilişkisine  işaret eder.

										Batı Anadolu’yu MÖ 4. yüzyıldan itibaren etkisi altına alan Helen ve Roma uygarlıkları,  Karya kentlerinde büyük ve önemli izler bırakmışlardır. Menteşe Beyliği’nin bıraktığı  izlere ise, bugün Milas yakınlarındaki Beçin kalesinde rastlanabilmektedir.

										Muğla; oyun, müzik ve türkü folkloru bakımından çok zengindir. Zeybek havaları, teke  ve kaşık oyunları yaygındır. Teke oyunları Fethiye’de; Zeybek oyunları ise Bodrum, Milas, Köyceğiz ve Muğla’da yaygındır. Kına gecelerinde “Temel devren” adıyla söylenen türküler çok ve meşhurdur. Türkülerde gurbet havaları, Avşar beyleri, uzun yol havaları, semahlar, gemici türküleri, gelin ağlatma ağıtları ve zortlatmalar ağır basar. Bölgenin meşhur oyunları Bilalin Zeybeği, Satı Zeybeği, Ferayi, Bıçak Oyunu, Kalkan Oyunu, Kuruoğlu, Zapbak, Buhurcular Zeybeği, Çıktım Tepe, Gidene Bak Gidene, Demirciler, Eydim Kavak Zeybekleridir.


									</p>
								</div>
								<div class="col-lg-3">
									<div class="card mt-5" style="width: 18rem;">
										<a href="https://www.bodrumfinder.com/halikarnas-mozolesi/" target="_blank">
											<img class="card-img-top" src="images/halikarnasart.jpg" alt="">
											<div class="card-body">
												<p class="card-text">Dünyanın 7 Harikasından Biri Olan Halikarnas Hakkında Bilgi Edinmek İçin Tıklayın</p>
											</div>
										</a>
									</div>
									<div class="card mt-5" style="width: 18rem;">
										<a href="https://mugla.ktb.gov.tr/TR-159713/kaunos-antik-kenti.html" target="_blank">
											<img class="card-img-top" src="images/kaunos.jpg" alt="">
											<div class="card-body">
												<p class="card-text">Kaunos Kral Mezarları Hakkında Bilgi Almak İçin Tıklayın</p>
											</div>
										</a>
									</div>
									<div class="card mt-5" style="width: 18rem;">
										<a href="https://www.kulturportali.gov.tr/turkiye/mugla/gezilecekyer/stratonikeia-antik-kenti" target="_blank">
											<img class="card-img-top" src="images/straton.jpg" alt="">
											<div class="card-body">
												<p class="card-text">Stratonikeia Antik Kendi Hakkında Bilgi Almak İçin Tıklayınız</p>
											</div>
										</a>
									</div>

								</div>
							</div>						
						</div>
						<div class="tab-pane fade" id="list-mmk" role="tabpanel" aria-labelledby="list-mmk-list">
							<div class="container-fluid">
								<h1 class="text-center mycolor m-5">
									Muğla'nın Yemek Kültürü	
								</h1>
								<div class="row">
									<div class="col-lg-6 p-2">							
										<p class="fs-6  p-1">
											Türkiye’nin zengin coğrafyasında her bölgenin kendine has bir mutfağı var. Bunlardan biri de Ege mutfağı. Ülkenin en ünlü tatil beldelerinden birisi olan Muğla da Ege mutfağının tüm özelliklerini yansıtan leziz bir mutfak. Fethiye, Marmaris, Bodrum gibi popüler tatil beldelerini de kapsayan Muğla sadece doğası ve denizi ile değil zengin mutfağıyla da göz dolduruyor. Muğla’nın bitki örtüsünün zengin ve katmanlı oluşu yemeklerine de yansıyor. Bölgeye has bitki, sebze ve otlar sayesinde yemekler daha da lezzetleniyor ve damakta iz bırakıyor.

										</p>
									</div>
									<div class="col-lg-6 p-2">
										<img src="images/yemekkultur.jpg" class="img-fluid rounded">


									</div>
									<div class="row">
										<div class="col-lg-6">
											<h3 class=" text-dark">
												Muğla'nın Yöresel Yemekleri

											</h3>
											<ul>
												<li>Milas Çaykaması</li>
												<li>Söndürme</li>
												<li>Çökertme Kebabı</li>
												<li>Bodrum Mantısı</li>
												<li>Milas Köfte</li>
												<li>Zeytinyağlı Bamya</li>
												<li>Keşkek</li>
												<li>Deniz Börülcesi</li>
												<li>Yeşil Zeytinli Tarator</li>
												<li>Şambali Tatlısı</li>
											</ul>
										</div>

									</div>
								</div>

							</div>
						</div>
						<div class="tab-pane fade" id="list-mç" role="tabpanel" aria-labelledby="list-mç-list">
							<div class="container-fluid">
								<h1 class="text-center mycolor">
									Milas Çaykaması
								</h1>
								<div class="row mt-sm-3">
									<div class="col-lg-4">
										Çaykama böreği Muğla Milas yöresine ait bir lezzet. Pişerken biraz dikkatli olmak gerekiyor. Böreğin içine giren otlardan dolayı sulanması, pişme süresini etkiliyor. Diğer böreklere göre daha uzun sürede pişen çaykama böreği çok lezzetli bir börek. Yöresel lezzetleri seviyorsanız çaykamaya bayılacaksınız.

									</div>
									
									<div class="col-lg-5"><img src="images/milascaykama.jpg" class="img-fluid rounded mb-5"></div>
									<div class="col-lg-3">
										<div class="card mt-3" style="width: 13rem;">
											<img class="card-img-top" src="images/caykam2.jpg" alt="Card image cap" style="max-height: 150px;">
											<div class="card-body">
												<h5 class="card-title">Bi'gaşık Kahvaltı ve Ev Yemekleri</h5>
												<p class="card-text">Milasta Çaykama yiyebileceğiniz müthiş bir restaurant</p>
											</div>

											<div class="card-body">
												<a href="https://iyifirma.com/bi-gasik-kahvalti-ve-ev-yemekleri/" class="card-link">İletişim İçin Tıklayınız</a>

											</div>
										</div>




									</div>
								</div>

								<div class="row">
									<div class="col-lg-4">
										<h3 class="text-center">Milas Çaykaması Tarifi</h3>
										<h5>Malzemeler</h5>
										<ul>
											<li>300 Gr Ispanak</li>
											<li>1 Bağ Pazı</li>
											<li>1/2 demet taze soğan</li>
											<li>100gr Isırgan otu</li>
											<li>100 gr Gelincik otu</li>
											<li>1/2 Demet arap saçı veya dereotu</li>
											<li>3 su bardağı un</li>
											<li>1/2 su bardağı zeytinyağı</li>
											<li>2 3 yemek kaşığı yogurt</li>
											
										</ul>
										
									</div>
									<div class="col-lg-5 mt-sm-3">
										<h5>Nasıl Yapılır ?</h5>
										<p>Karıştırma kabına unu ve suyu alalım. İçine tuz ekleyerek boza kıvamında akışkan bir hamur elde edelim. Bütün yeşil sebzeleri iyice yıkayalım ve ince ince kıyalım. Sebzelerin içine lor peyniri, kekik, karabiber, toz kırmızı biber ve tuz ekleyip karıştıralım. Fırın tepsisini terayağı ile yağlayalım. Elimizi korkak alıştırmayalım, bolca tereyağı sürelim. Yağladığımız tepsiye hamurun 2/3’ünü dökelim. Hamuru yayalım ve üzerine sebzelerden hazırladığımız karışımı dökelim. Elimizle bastırarak sebzelerin yerleşmesini sağlayalım. Kalan hamurun içine yoğurt, sıvı yağ ve yumurtayı ekleyip iyice çırpalım ve hazırladığımız hamuru sebzelerin üzerine döküp yayalım. Hamurun üzerine küp küp tereyağı koyalım. Önceden ısıtmış olduğumuz 200 derece fırında 1 saat pişirelim. Daha sonra sadece alt pişirmeyi açarak tepsiyi en alt rafa alalım ve bu şekilde yarım saat daha pişirelim. Yoğurtla birlikte servis yapalım.	</p>
										
									</div>
									<div class="col-lg-3">


										<div class="card mt-3" style="width: 13rem;">
											<img class="card-img-top" src="images/caykam1.jpg" alt="Card image cap">
											<div class="card-body">
												<h5 class="card-title">Bizim Fatoş'un Ev Börekleri</h5>
												<p class="card-text">Milasta Çaykama yiyebileceğiniz müthiş bir restaurant</p>
											</div>

											<div class="card-body">
												<a href="https://www.instagram.com/bizim_fatosun_ev_borekleri/" class="card-link">İletişim İçin Tıklayınız</a>
												
											</div>
										</div>




									</div>


								</div>

							</div>
						</div>
						<div class="tab-pane fade" id="list-söndürme" role="tabpanel" aria-labelledby="list-söndürme-list">
							<div class="container-fluid">
								<h1 class="text-center mycolor">
									Börülce Ekşilemesi
								</h1>
								<div class="row mt-sm-3">
									<div class="col-lg-4">
										Yeşil fasulye yemeğine benzeyen börülce ekşilemesi sadece Muğla yöresel lezzetleri arasında değil birçok Ege şehrinde farklı tariflerle yapılıyor. Yani bu yemeğe Ege lezzeti denebilir. Hem zeytinyağlı olması hem de sarımsak kullanılması sebebiyle sulu yemekler arasında ilk tercih edilenlerden biri olan börülce ekşilemesi sıcak olarak tüketilebildiği gibi soğuk olarak da sofralara konulabiliyor.

									</div>
									
									<div class="col-lg-5"><img src="images/borulce-eksilemesi.jpg" class="img-fluid rounded mb-5"></div>
									<div class="col-lg-3">
										<div class="card" style="width: 13rem;">
											<img class="card-img-top" src="images/börülcecard2.jpg" alt="Card image cap" style="max-height: 150px;">
											<div class="card-body">
												<h5 class="card-title">Bi'gaşık Kahvaltı ve Ev Yemekleri</h5>
												<p class="card-text">Börülce Ekşilemesi Yiyebileceğiniz Harika bir restautant</p>
											</div>

											<div class="card-body">
												<a href="https://iyifirma.com/bi-gasik-kahvalti-ve-ev-yemekleri/" class="card-link">İletişim İçin Tıklayınız</a>

											</div>
										</div>




									</div>
								</div>

								<div class="row">
									<div class="col-lg-4">
										<h3 class="text-center">Börülce EkşilemesiTarifi</h3>
										<h5>Malzemeler</h5>
										<ul>
											<li>Yarım Kilo Taze Börülce</li>
											<li>3-4 Diş Sarımsak</li>
											<li>Yarım çay bardağı zeytinyağı</li>
											<li>Bir su bardağı su</li>
											<li>1 adet limon</li>

										</ul>
										
									</div>
									<div class="col-lg-5 mt-sm-3">
										<h5>Nasıl Yapılır ?</h5>
										<p>Börülceyi düdüklüde 15 dakika haşlıyoruz ve suyunu süzüyoruz.
											Dövülmüş sarımsakları tuz ve zeytinyağıyla özleştirip, limonu sıkıp suyunu da ekleyip börülceyle güzelce harmanlıyoruz.
										Buzdolabında soğutup yemeklerin yanında salata olarak soğuk servis ediniz. Afiyet olsun.	</p>
										
									</div>
									<div class="col-lg-3">


										<div class="card" style="width: 13rem;">
											<img class="card-img-top" src="images/börülcecard1.jpg" alt="Card image cap">
											<div class="card-body">
												<h5 class="card-title">Ayşe Ana’nın Yeri</h5>
												<p class="card-text">Sıcak veya soğuk servis edilen Börülce Ekşilemesi’nin tadına, Muğla’nın Ula ilçesine bağlı Akyaka beldesinde hizmet veren Ayşe Ana’nın Yeri’nde bakabilirsiniz.</p>
											</div>

											<div class="card-body">
												<a href="https://ayseananinyeri.com" class="card-link">İletişim İçin Tıklayınız</a>
												
											</div>
										</div>




									</div>


								</div>

							</div>
						</div>
						<div class="tab-pane fade" id="list-çök" role="tabpanel" aria-labelledby="list-çök-list">
							<div class="container-fluid">
								<h1 class="text-center mycolor">
									Çökertme Kebabı
								</h1>
								<div class="row mt-sm-3">
									<div class="col-lg-4">
										Muğla’nın meşhur yemekleri arasında öne çıkan Çökertme Kebabı, Türkiye çapında en çok bilinen yöresel lezzetler arasında yer almaktadır. İnce doğranmış patates kızartmasının üzerine tereyağı sosu dökülerek servis edilen Çökertme Kebabı, genellikle dana etiyle yapılmaktadır. Ancak tercihen tavuk etiyle de yapılabilen kebap, Muğla yöresinde özel günlerde yapılıp tüketilmektedir.

									</div>
									
									<div class="col-lg-5"><img src="images/çökertme.jpg" class="img-fluid rounded mb-5"></div>
									<div class="col-lg-3">
										<div class="card" style="width: 13rem;">
											<img class="card-img-top" src="images/eyvankebab.jpg" alt="Card image cap" style="max-height: 150px;">
											<div class="card-body">
												<h5 class="card-title">Eyvan Kebap</h5>
												<p class="card-text">Çökertme Kebabı’nı Muğla’da en lezzetli şekilde Eyvan Kebap’ta yiyebilirsiniz.</p>
											</div>

											<div class="card-body">
												<a href="https://menuburada.com/eyvan-kebap-seyh-mugla/" class="card-link">İletişim İçin Tıklayınız</a>

											</div>
										</div>




									</div>
								</div>

								<div class="row">
									<div class="col-lg-4">
										<h3 class="text-center">Çökertme Kebabı Tarifi</h3>
										<h5>Malzemeler</h5>
										<ul>
											<li>300 gr jülyen kesilmiş et</li>
											<li>2 yemek kaşığı sıvı yağ</li>
											<li>2 diş sarımsak</li>
											<li>1 çay kaşığı tuz</li>
											<li>4 dolu yemek kaşığı yoğurt</li>
											<li>2 diş sarımsak</li>
											<li>1 fiske tuz (yoğurt için)</li>
											<li>4 adet orta boy patates</li>
											<li>1 çay kaşığı tuz (patatesler için)</li>
											<li>Sıvı yağ (kızartmak İçin)</li>
											<li>1 kaşık domates biber sosu ya da salça</li>
											<li>1 kaşık sıvı yağ</li>




										</ul>
										
									</div>
									<div class="col-lg-5 mt-sm-3">
										<h5>Nasıl Yapılır ?</h5>
										<p>Etler düdüklüye alınır harlı ateşte suyunu salıp çekene kadar kavrulur.
											Suyunu çekince sıvı yağ ve ezilmiş 2 diş sarımsak eklenip 1-2 tur çevrilip su eklenir ve kapatılır.
											Etler yumuşayıp suyunu çekene kadar pişirilir.
											Bu sırada patatesler ince halka kesilip kibrit çöpü şeklinde doğranıp hazır edilir tuz serpilip kızgın yağda kızartılır ve büyük servis tabağına alınır.
											Yoğurt, ezilmiş sarımsak ve bir fiske tuz bir kapta çırpılır patatesler üzerine gezdirilir.
											Bir cezvede salça ve yağ kızdırılıp yoğurt üzerine gezdirilir.
											Ben yazdan hazırladığım domates sosu kızdırdım, isteğe bağlı domates rendesi pişirilip ya da domates püresi aynı şekilde kavrulup dökülebilir.
											Suyunu çeken etler kızarmaya başlayınca birkaç tur kavrulup altı kapatılır ve domates sosunun üzerine pişmiş etler konulur.
										İsteğe bağlı kekik veya kıyılmış maydanoz serpilip servis edilir 	</p>
										
									</div>
									<div class="col-lg-3">


										<div class="card" style="width: 13rem;">
											<img class="card-img-top" src="images/nazar.jpg" alt="Card image cap">
											<div class="card-body">
												<h5 class="card-title">Nazar Unlu Mamülleri</h5>
												<p class="card-text">Çökertme kebabı yiyebileceğiniz güzel bir yer</p>
											</div>

											<div class="card-body">
												<a href="https://www.nazar.com.tr/hakkimizda/" class="card-link">İletişim İçin Tıklayınız</a>
												
											</div>
										</div>




									</div>


								</div>

							</div>
						</div>
						<div class="tab-pane fade" id="list-bm" role="tabpanel" aria-labelledby="list-bm-list">
							<div class="container-fluid">
								<h1 class="text-center mycolor">
									Bodrum Mantısı
								</h1>
								<div class="row mt-sm-3">
									<div class="col-lg-4">
										Muğla’nın Bodrum yöresine ait meşhur lezzetlerden olan Bodrum Mantısı, bilinen haşlama tarifinin yanı sıra kızartılarak pişirilmektedir. Bükülme tarzıyla da klasik mantıdan ayrılan Bodrum Mantısı, salçalı sos ve tereyağı eklenerek servis edilmektedir.

									</div>
									
									<div class="col-lg-5"><img src="images/bodrummantı.jpg" class="img-fluid rounded mb-5"></div>
									<div class="col-lg-3">
										<div class="card" style="width: 13rem;">
											<img class="card-img-top" src="images/manticard0.jpg" alt="Card image cap" style="max-height: 150px;">
											<div class="card-body">
												<h5 class="card-title">Bodrum Mantı Cafe</h5>
												<p class="card-text">Bodrum mantısı yiyebileceğin muthiş bir yer</p>
											</div>

											<div class="card-body">
												<a href="https://bodrummanti.com.tr" class="card-link">İletişim İçin Tıklayınız</a>

											</div>
										</div>




									</div>
								</div>

								<div class="row">
									<div class="col-lg-4">
										<h3 class="text-center">Bodrum Mantısı Tarifi</h3>
										<h5>Malzemeler</h5>
										<ul>
											<li>2 Adet Yumurta</li>
											<li>1 Kg Un</li>
											<li>Tuz ve Su</li>
											<li>Yarım kg orta yağlı kıyma</li>
											<li>2 Adet orta boy soğan</li>
											<li>2 Su bardağı Yoğurt</li>
											<li>3 Diş Sarımsak</li>
											<li>2 Yemek Kaşığı Tereyağı</li>
											<li>1 Tatlı Kaşığı Kırmızı Biber</li>
											<li>1 Su bardağı Sıvı Yağ</li>
										</ul>
										
									</div>
									<div class="col-lg-5 mt-sm-5">
										<h5>Nasıl Yapılır ?</h5>
										<p>Yoğurma kabımıza unu ekleyerek unun ortasını havuz şeklinde açarak ortasına yumurtayı kıralım.
											Daha sonra tuz ve yeteri kadar su ilavesiyle sert kıvamda bir hamur yoğuralım.
											10 dakika kadar dinlendirelim.
											Mantımızın iç harcını hazırlamak için soğanları ince ince kıyarak kıymaya ilave edelim.
											Üzerine baharatları, tuz ve 1 tutam maydanozu kıyarak ilave edelim.
											Dinlenen hamurdan açabileceğimiz büyüklükte bezeler yapalım.
											Un serpilmiş tezgahın üzerinde ince bir şekilde açalım.
											Küçük kareler şeklinde kestikten sonra karelerin ortasına kıymalı harçtan koyalım.
											Dört kenarını karşılıklı getirerek bohça şeklinde katlayalım.
											Hamurlar bitene kadar bu işleme devam edelim.
											Bir tencereye 1 su bardağı sıvı yağı ekleyerek kızdıralım.
											Tüketeceğiniz kadar mantıyı kızgın yağın içinde pembeleştirerek kızartıp bir kabın içine alalım.
										Mantıları servis tabaklarına yayarak üzerine sarımsaklı yoğurt ve kırmızı pul biber serpiştirerek servise sunalım.	</p>
										
									</div>
									<div class="col-lg-3">


										<div class="card" style="width: 13rem;">
											<img class="card-img-top" src="images/manticard1.jpg" alt="Card image cap">
											<div class="card-body">
												<h5 class="card-title">Meryem Ana Mantı Ve Gözleme Evi</h5>
												<p class="card-text">Bodrum mantısı yiyebileceğin muthiş bir yer</p>
											</div>

											<div class="card-body">
												<a href="https://menuburada.com/meryem-ana-manti-ve-gozleme-evi-tepe-mugla/" class="card-link">İletişim İçin Tıklayınız</a>
												
											</div>
										</div>




									</div>


								</div>

							</div>
						</div>
						<div class="tab-pane fade" id="list-mk" role="tabpanel" aria-labelledby="list-mk-list">
							<div class="container-fluid">
								<h1 class="text-center mycolor">
									Milas Köfte
								</h1>
								<div class="row mt-sm-3">
									<div class="col-lg-4">
										Milas Köftesi, Muğla mutfağının önemli tarifleri arasında yer almaktadır. Muğla Köftesi olarak da bilinen yemek, Muğla’daki bütün lokanta ve restoranlarda servis edilmektedir. Dana kıymasıyla yapılan Milas Köftesi, tırnaklı pide ve tereyağlı sosuyla servis edilmektedir. Muğla halkı tarafından evlerde sıklıkla yapılan Milas Köftesi, klasik köfteden çok daha farklı ve daha hafif bir yemek olarak öne çıkmaktadır.

									</div>
									
									<div class="col-lg-5"><img src="images/milasköfte.jpg" class="img-fluid rounded mb-5"></div>
									<div class="col-lg-3">
										<div class="card" style="width: 13rem;">
											<img class="card-img-top" src="images/milascard0.jpg" alt="Card image cap" style="max-height: 150px;">
											<div class="card-body">
												<h5 class="card-title">Bi'gaşık Kahvaltı ve Ev Yemekleri</h5>
												<p class="card-text">Milasta Köfte yiyebileceğiniz müthiş bir restaurant</p>
											</div>

											<div class="card-body">
												<a href="https://iyifirma.com/bi-gasik-kahvalti-ve-ev-yemekleri/" class="card-link">İletişim İçin Tıklayınız</a>

											</div>
										</div>




									</div>
								</div>

								<div class="row">
									<div class="col-lg-4">
										<h3 class="text-center">Milas Köftesi Tarifi</h3>
										<h5>Malzemeler</h5>
										<ul>
											<li>1 kg köftelik kıyma</li>
											<li>1 adet iri boy kuru soğan</li>
											<li>2,5 su bardağı un</li>
											<li>2 çay kaşığı karabiber</li>
											<li>1 tatlı kaşığı tuz</li>
											<li>6-7 diş sarımsak</li>
											<li>1 su bardağı haşlanmış nohut</li>
											<li>2 yemek kaşığı domates salçası</li>
											<li>1 yemek kaşığı biber salçası</li>
											<li>2 adet limon suyu</li>
											<li>2 yemek kaşığı tereyağı</li>
											<li>1 su bardağı sıvı yağ ( kızartmak için )</li>
											<li>1 miktar su
											</li>
										</ul>
										
									</div>
									<div class="col-lg-5 mt-sm-3">
										<h5>Nasıl Yapılır ?</h5>
										<p>Karıştırma kabımıza 1 adet kuru soğanın kabuklarını soyarak rendeleyelim.
											Üzerine 1 kg köftelik kıyma,2,5 su bardağı un, 1 adet yumurta, 2 çay kaşığı karabiber ve tuz ilave ederek harcımızı iyice yoğuralım.
											Yoğurduğumuz köftelik harcımızı yumurta iriliğinde parçalara ayırarak un serpilmiş tezgah üzerinde her parçayı yuvarlayarak uzun silindir şekline getirelim.
											Hazırladığımız ince şeritlerden fındık iriliğinde parçalar kopartarak avucumuzun içinde yuvarlayarak misket şekline getirelim.
											Bir tepsiyi hafifçe unlayarak hazırladığımız misket köfteleri tepsiye alalım.
											Kızartma tavamıza sıva yağı alarak kızdırıp köfteleri çevirerek kızartıp bir kenara alalım.
											Çukur bir tencereye 2 yemek kaşığı tereyağını alarak eritip içine bir miktar sıvı yağ ekleyelim.
											Üzerine 2 yemek kaşığı domates salçası, 1 yemek kaşığı biber salçası, eklenip kavrularak içine kızartılmış köfteler ve önceden haşlanmış 1 su bardağı nohut ilave edilerek bir iki kez çevrilerek harcımızın üzerini 2 parmak aşacak kadar sıcak su ilave ederek kısık ateşte köfteler ve nohut yumuşayıncaya kadar pişmeye bırakalım.
											Bir kabın içine kabukları soyularak iyice dövülmüş 6-7 diş sarımsağı ve 2 adet sıkılmış limon suyunu karıştırarak pişmekte olan Milas köftemizin içine ilave edip karıştırarak 6-7 dakika kadar daha pişirerek köftemizi ocaktan alalım.
										Servis esnasında kıyılmış maydanoz serpiştirerek servise sunalım.	</p>
										
									</div>
									<div class="col-lg-3">


										<div class="card" style="width: 13rem;">
											<img class="card-img-top" src="images/milascard1.jpg" alt="Card image cap">
											<div class="card-body">
												<h5 class="card-title">Bizim Fatoş'un Ev Börekleri</h5>
												<p class="card-text">Milasta Köfte yiyebileceğiniz müthiş bir restaurant</p>
											</div>

											<div class="card-body">
												<a href="https://www.instagram.com/bizim_fatosun_ev_borekleri/" class="card-link">İletişim İçin Tıklayınız</a>
												
											</div>
										</div>




									</div>


								</div>

							</div>
						</div>
						<div class="tab-pane fade" id="list-Bodrum" role="tabpanel" aria-labelledby="list-Bodrum-list">
							<div class="container-fluid">
								
								<h1 class="m-5 mycolor text-center">Bodrum Gezilecek Yerler</h1>
								<div class="row">
									<div class="col-lg-1"></div>
									<div class="col-lg-10 text-center ">
										<img src="images/bodrum.jpg" class="img-fluid rounded" style="max-height:400px;">
									</div>
									<div class="col-lg-1"></div>
								</div>

								<div class="row mt-5">
									<div class="col-lg-1">

									</div>
									<div class="col-lg-10">
										<h5>Bodrum Hakkında</h5>
										<p>
											Muğla’nın en popüler ve en turistik ilçelerinden biri olan Bodrum, güzel plajları, tarihi kalıntıları, rengarenk gece hayatı ve tatil köyleri ile Ege’nin bir mücevheridir. Yazlıkçıların, turistlerin ve ünlülerin en çok tercih ettiği yerlerden biridir Bodrum. Çiçeklerle süslenmiş, beyaz ve turkuaz rengi duvarlarıyla boyalı sokaklarında dolaşırken, kendinizi bambaşka bir yerdeymiş gibi hissedeceksiniz. Arnavut kaldırımları, muhteşem restoranları, yemyeşil doğası ve harika manzarasıyla Bodrum, herkesin bir kez olsun gitmek isteyeceği yerlerden biri…
										</p>

										<h5>Gezilebilecek Yerler</h5>
										<p>
											Bodrum, her mevsim ziyaret etmek için uygundur. Ancak kalabalıktan çok hoşlanmıyorsanız, ilkbahar ya da sonbahar aylarında gelmeyi tercih edebilirsiniz.Bodrum’u 4-5 günde gezebilmeniz mümkün.
										</p>

										<div class="accordion accordion-flush" id="accordionFlushExample0">
											<div class="accordion-item">
												<h2 class="accordion-header" id="flush-headingOne0">
													<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne0" aria-expanded="false" aria-controls="flush-collapseOne0">
														Yalıkavak
													</button>
												</h2>
												<div id="flush-collapseOne0" class="accordion-collapse collapse" aria-labelledby="flush-headingOne0" data-bs-parent="#accordionFlushExample0">
													<div class="accordion-body container-fluid">
														<div class="row">
															<div class="col-md-5">
																<p>
																	Yalıkavak, Bodrum yarımadasının kuzeybatı ucunda bulunmakta ve Bodrum merkeze yaklaşık 18 km. uzaklıkta yer almakta. Popüler bir tatil merkezi olan Yalıkavak, yel değirmenleri, balı, süngeri ve narenciyesiyle ünlü.
																</p>
																<a href="https://goo.gl/maps/G7ivvfLPtMSeV1MJ8">Yol Tarifi</a>
															</div>
															<div class="col-md-5">
																<img src="images/yalıkavak.jpg" class="img-fluid rounded"style="max-height:200px">
															</div>
														</div>

														

													</div>
												</div>
											</div>
											<div class="accordion-item">
												<h2 class="accordion-header" id="flush-headingTwo0">
													<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo0" aria-expanded="false" aria-controls="flush-collapseTwo0">
														Gümbet
													</button>
												</h2>
												<div id="flush-collapseTwo0" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo0" data-bs-parent="#accordionFlushExample0">
													<div class="accordion-body container-fluid">
														<div class="row">
															<div class="col-md-5">
																<p>
																	Gümbet, Bodrum’un güney batısında Bodrum merkeze yaklaşık 4,7 km. uzaklıkta yer almakta ve Bodrum yarımadasının en popüler tatil beldelerinden birisi konumunda. Daha çok genç tatilciler ve yabancı turistler tarafından tercih edilen bir tatil beldesi.
																</p>
																<a href="https://goo.gl/maps/zRsFhq5EY2gGXaZNA">Yol Tarifi</a>
															</div>
															<div class="col-md-5">
																<img src="images/gümbet.jpg" class="img-fluid rounded"style="max-height:200px">
															</div>
														</div>

														

													</div>
												</div>
											</div>
											<div class="accordion-item">
												<h2 class="accordion-header" id="flush-headingThree0">
													<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree0" aria-expanded="false" aria-controls="flush-collapseThree0">
														Bitez
													</button>
												</h2>
												<div id="flush-collapseThree0" class="accordion-collapse collapse" aria-labelledby="flush-headingThree0" data-bs-parent="#accordionFlushExample0">
													<div class="accordion-body container-fluid">
														<div class="row">
															<div class="col-md-5">
																<p>
																	Bitez, Bodrum’un güney batısında Bodrum merkeze yaklaşık 10 km. uzaklıkta yer almakta ve Bodrum yarımadasının en popüler tatil beldelerinden birisi konumunda. Bodrum‘un en güzel koylarından birisine ev sahipliği yapan Bitez, güzel koyu ve plajı ile ünlü olup özellikle deniz sörfü için çok ideal bir belde.
																</p>
																<a href="https://goo.gl/maps/Ur5cHiG5u6qkcJ1u9">Yol Tarifi</a>
															</div>
															<div class="col-md-5">
																<img src="images/bitez.jpg" class="img-fluid rounded"style="max-height:200px">
															</div>
														</div>

														

													</div>
												</div>
											</div>
											<div class="accordion-item">
												<h2 class="accordion-header" id="flush-headingFour0">
													<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour0" aria-expanded="false" aria-controls="flush-collapseFour0">
														Göltürkbükü
													</button>
												</h2>
												<div id="flush-collapseFour0" class="accordion-collapse collapse" aria-labelledby="flush-headingFour0" data-bs-parent="#accordionFlushExample0">
													<div class="accordion-body container-fluid">
														<div class="row">
															<div class="col-md-5">
																<p>
																	Göltürkbükü, eski adıyla Gölköy, Bodrum yarımadasının kuzey doğusunda yer almakta ve Bodrum merkeze yaklaşık 23 km. uzaklıkta. Aslında Gölköy ve Türkbükü köylerinin aynı belde altında birleştirilmesinden sonra Göktürkbükü ismini almış. Bodrum yarımadasının en popüler tatil beldelerinden biri olan belde, kendine has doğası, gece hayatı, gölü ve mandalina bahçeleriyle meşhur.
																</p>
																<a href="">Yol Tarifi</a>
															</div>
															<div class="col-md-5">
																<img src="images/göltürkbükü.jpg" class="img-fluid rounded"style="max-height:200px">
															</div>
														</div>

														

													</div>
												</div>
											</div>
											<div class="accordion-item">
												<h2 class="accordion-header" id="flush-headingFive0">
													<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive0" aria-expanded="false" aria-controls="flush-collapseFive0">
														Gümüşlük
													</button>
												</h2>
												<div id="flush-collapseFive0" class="accordion-collapse collapse" aria-labelledby="flush-headingFive0" data-bs-parent="#accordionFlushExample0">
													<div class="accordion-body container-fluid">
														<div class="row">
															<div class="col-md-5">
																<p>
																	Sakin yapısı ile bilinen Gümüşlük tam bir balıkçı kasabası. 2012 yılına kadar Bodrum’a bağlı bir köy olan Gümüşlük bugün mahalle statüsünde Muğla’ya bağlı. Uzun yıllardır dokusu bozulmadan korunan bu beldede fazlasıyla otantik ve huzurlu günler geçirmek mümkün.
																</p>
																<a href="https://goo.gl/maps/zN76rheKZAEQsHFZ9">Yol Tarifi</a>
															</div>
															<div class="col-md-5">
																<img src="images/gümüşlük.jpg" class="img-fluid rounded"style="max-height:200px">
															</div>
														</div>

														

													</div>
												</div>
											</div>
											<div class="accordion-item">
												<h2 class="accordion-header" id="flush-headingSix0">
													<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix0" aria-expanded="false" aria-controls="flush-collapseSix0">
														Akyarlar
													</button>
												</h2>
												<div id="flush-collapseSix0" class="accordion-collapse collapse" aria-labelledby="flush-headingSix0" data-bs-parent="#accordionFlushExample0">
													<div class="accordion-body container-fluid">
														<div class="row">
															<div class="col-md-5">
																<p>
																	Kos adasının tam karşısında yer alan ve antik adı Arhialla olan Akyarlar, eskiden bir balıkçı köyü iken son yıllarda Bodrum yarımadasının en önemli turizm merkezlerinden birisi konumuna gelmiş durumda. Akyarlar’ın tepelerinde bulunan evlerden Yunan adalarını ve muhteşem deniz ve doğayı seyretmek büyük zevk.
																</p>
																<a href="https://goo.gl/maps/CHTZwuqZri3xhCBa7">Yol Tarifi</a>
															</div>
															<div class="col-md-5">
																<img src="images/akyarlar.jpg" class="img-fluid rounded"style="max-height:200px">
															</div>
														</div>

														

													</div>
												</div>
											</div>
										</div>

									</div>
									<div class="col-lg-1">

									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="list-Marmaris" role="tabpanel" aria-labelledby="list-Marmaris-list">
							<div class="container-fluid">

								<h1 class="m-5 mycolor text-center">Marmaris Gezilecek Yerler</h1>
								<div class="row">
									<div class="col-lg-1"></div>
									<div class="col-lg-10 text-center ">
										<img src="images/marmaris.jpg" class="img-fluid rounded" style="max-height:400px;">
									</div>
									<div class="col-lg-1"></div>
								</div>

								<div class="row mt-5">
									<div class="col-lg-1"></div>
									<div class="col-lg-10">
										<h5>Marmaris Hakkında</h5>
										<p>
											Zengin tarihi ve muhteşem doğası ile Marmaris Yarımadası, bu coğrafi konumuyla tarih boyunca sayısız uygarlıkların yerleşim yeri olmuş, çok sayıda limana ve kente ev sahipliği yapmış. Doğal güzellikleri, uzun sahil şeridi, çam ormanlarıyla kaplı tepelerinden muhteşem manzarası, bakir koyları, eşsiz plajları, antik kentleri, yat marinaları ve her türlü aktiviteyi sunmasıyla beraber Marmaris her yıl yüz binlerce turist ağırlamakta.Marmaris merkezinin Marmaris Kalesi, Marmaris Rıhtımı ve Marmaris Marina ile çevrilmiş bölümü “Tarihi Kent Merkezi” olarak adlandırılmakta. Marmaris Kalesi’nin de bulunduğu tepelik alanda Osmanlı döneminde ait 16’ncı yüzyıldan kalma tarihi yapılar mevcut.
										</p>

										<h5>Gezilebilecek Yerler</h5>
										<p>
											Yazları sıcak kışları ise ılık geçen Marmaris yılın her ayında ziyaret edilmeye elverişlidir. Ancak yaz tatili yapmak için Nisan-Ekim ayları tercih edilebilir.
										</p>

										<div class="accordion accordion-flush" id="accordionFlushExample1">
											<div class="accordion-item">
												<h2 class="accordion-header" id="flush-headingOne1">
													<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne1" aria-expanded="false" aria-controls="flush-collapseOne1">
														Marmaris Kalesi
													</button>
												</h2>
												<div id="flush-collapseOne1" class="accordion-collapse collapse" aria-labelledby="flush-headingOne1" data-bs-parent="#accordionFlushExample1">
													<div class="accordion-body container-fluid">
														<div class="row">
															<div class="col-md-5">
																<p>
																	M.Ö. 1044 senesinde İyonlar tarafından inşa edildiğine ve daha sonrasında Büyük İskender tarafından yenilendiğine dair bir inanış öyküsü bulunmaktadır. 1522 yılında Kanuni Sultan Süleyman dönemi içerisinde Rodos seferlerinden önce yenilenerek genişletilmiştir. 
																</p>
																<a href="https://goo.gl/maps/CqzP8SQNVCArXzA48">Yol Tarifi</a>
															</div>
															<div class="col-md-5">
																<img src="images/marmariskalesi.jpg" class="img-fluid rounded"style="max-height:200px">
															</div>
														</div>



													</div>
												</div>
											</div>
											<div class="accordion-item">
												<h2 class="accordion-header" id="flush-headingTwo1">
													<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo1" aria-expanded="false" aria-controls="flush-collapseTwo1">
														Halıcı Ahmet Urkay Müzesi
													</button>
												</h2>
												<div id="flush-collapseTwo1" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo1" data-bs-parent="#accordionFlushExample1">
													<div class="accordion-body container-fluid">
														<div class="row">
															<div class="col-md-5">
																<p>
																	Sahibi ve kurucusu Ahmet Urkay’dan adını alıp 2005 yılında açılan müzede, M.Ö 3000 tarihinden itibaren çeşitli dönem eserleri sergileniyor. Arkeoloji ve etnografya bölümü olarak ikiye ayrılıyor olup özellikle etnografya kısmı oldukça zengin eserler içermektedir.
																</p>
																<a href="https://goo.gl/maps/57ygkuzQkd1u93pK6">Yol Tarifi</a>
															</div>
															<div class="col-md-5">
																<img src="images/ahmeturkaymüze.jpg" class="img-fluid rounded"style="max-height:200px">
															</div>
														</div>



													</div>
												</div>
											</div>
											<div class="accordion-item">
												<h2 class="accordion-header" id="flush-headingThree1">
													<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree1" aria-expanded="false" aria-controls="flush-collapseThree1">
														İçmeler Plajı
													</button>
												</h2>
												<div id="flush-collapseThree1" class="accordion-collapse collapse" aria-labelledby="flush-headingThree1" data-bs-parent="#accordionFlushExample1">
													<div class="accordion-body container-fluid">
														<div class="row">
															<div class="col-md-5">
																<p>
																	Merkeze yakınlığı sebebiyle çok fazla tercih edilen İçmeler Plajı Marmaris merkeze sadece 8 km uzaklıkta. Denizin berraklığı ve dinginliğiyle birlikte güzel bir deniz keyfi yapabilirsiniz. Plajın içindeki tesislerde yeme-içme durumunuz olduğunda şezlong ve şemsiyelere para ödemiyorsunuz. 
																</p>
																<a href="https://goo.gl/maps/qkpKmsiif7xZ4aFT9">Yol Tarifi</a>
															</div>
															<div class="col-md-5">
																<img src="images/içmeler.jpg" class="img-fluid rounded"style="max-height:200px">
															</div>
														</div>



													</div>
												</div>
											</div>
											<div class="accordion-item">
												<h2 class="accordion-header" id="flush-headingFour1">
													<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour1" aria-expanded="false" aria-controls="flush-collapseFour1">
														Kızkumu Plajı
													</button>
												</h2>
												<div id="flush-collapseFour1" class="accordion-collapse collapse" aria-labelledby="flush-headingFour1" data-bs-parent="#accordionFlushExample1">
													<div class="accordion-body container-fluid">
														<div class="row">
															<div class="col-md-5">
																<p>
																	Hikayeye göre, korsanlardan kaçan kralın kızı güzel prenses denize doğru gider. Yüzme bilmeyen kız ceplerine aldığı kumları denize dökerek karşı kıyı şeridine geçmek ister ancak he kumu bitince hemde karanlık bastırınca oracıkta can verir. Bundan sonrada buranın ismi Kızkumu olarak adlandırılır.
																</p>
																<a href="https://goo.gl/maps/YiGh5YPP9Ls6nAUT6">Yol Tarifi</a>
															</div>
															<div class="col-md-5">
																<img src="images/kızkumu.jpg" class="img-fluid rounded"style="max-height:200px">
															</div>
														</div>



													</div>
												</div>
											</div>
											<div class="accordion-item">
												<h2 class="accordion-header" id="flush-headingFive1">
													<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive1" aria-expanded="false" aria-controls="flush-collapseFive1">
														Marmaris Dolphinarium
													</button>
												</h2>
												<div id="flush-collapseFive1" class="accordion-collapse collapse" aria-labelledby="flush-headingFive1" data-bs-parent="#accordionFlushExample1">
													<div class="accordion-body container-fluid">
														<div class="row">
															<div class="col-md-5">
																<p>
																	2012 yılında açılan Marmaris Dolphinarium, İçmeler ile Marmaris’i birbirine bağlayan deniz kıyısında yer alır. Avrupa‘nın en büyük Dolphinarium’larından biri olup, yunusların denizde yüzmek özgürce yüzmesi için müthiş bir yerdir.
																</p>
																<a href="https://goo.gl/maps/jSKpLAsLtJxQNpas9">Yol Tarifi</a>
															</div>
															<div class="col-md-5">
																<img src="images/marmarisyunus.jpg" class="img-fluid rounded"style="max-height:200px">
															</div>
														</div>



													</div>
												</div>
											</div>
											<div class="accordion-item">
												<h2 class="accordion-header" id="flush-headingSix1">
													<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix1" aria-expanded="false" aria-controls="flush-collapseSix1">
														Atlantis Water Park
													</button>
												</h2>
												<div id="flush-collapseSix1" class="accordion-collapse collapse" aria-labelledby="flush-headingSix1" data-bs-parent="#accordionFlushExample1">
													<div class="accordion-body container-fluid">
														<div class="row">
															<div class="col-md-5">
																<p>
																	Marmaris’in en büyük aquaparkı olan Atlantis, ailelerin birlikte vakit geçirebileceği eğlenceli bir cazibe merkezidir. Deniz kıyısının yanı başında konumlanan park, özel plajı ile hizmet vermektedir ve gün boyu ücretsiz şezlong ve şemsiyeler sunmaktadır.
																</p>
																<a href="https://goo.gl/maps/RBWygnBrdGZEkSwQ8">Yol Tarifi</a>
															</div>
															<div class="col-md-5">
																<img src="images/atlantiswater.jpg" class="img-fluid rounded"style="max-height:200px">
															</div>
														</div>



													</div>
												</div>
											</div>
										</div>

									</div>
									<div class="col-lg-1">

									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="list-Fethiye" role="tabpanel" aria-labelledby="list-Fethiye-list">
							<div class="container-fluid">

								<h1 class="m-5 mycolor text-center">Fethiye Gezilecek Yerler</h1>
								<div class="row">
									<div class="col-lg-1"></div>
									<div class="col-lg-10 text-center ">
										<img src="images/fethiye.jpg" class="img-fluid rounded" style="max-height:400px;">
									</div>
									<div class="col-lg-1"></div>
								</div>

								<div class="row mt-5">
									<div class="col-lg-1">

									</div>
									<div class="col-lg-10">
										<h5>Fethiye Hakkında</h5>
										<p>
											Fethiye, Muğla'nın tanınmış ilçelerinden biridir. Dalaman havaalanına 50 Km mesafede, Türkiye'nin Akdeniz ile Ege kıyılarının birleştiği turkuaz koylarında yer almaktadır. Fethiye, kent içinde kalıntılarını ve tiyatrosunu görebileceğiniz eski "Telmessos" şehrinin üzerinde yer almaktadır. Fethiye turizmi ve şaşırtıcı doğası ile popülerdir. Fethiye'nin nüfusu 115.000 civarındadır ve yaz sezonunda çok fazla ziyaretçi alır.Günümüzde Fethiye, uluslararası atmosferi ile turistik bir şehirdir. Kasabada, uluslararası ve yerel ziyaretçilere ve yolcu gemilerine hizmet veren 3 marina vardır. Kasabada turistlerin ihtiyacı olan her şey vardır. Lezzetli restoranlar, harika gece hayatı, tarih ve doğa, inanılmaz koylar, geleneksel pazarlar, dükkanlar, günlük geziler, etkinlikler ve muhtemelen dünyada sokaklarında lahitler, tapınaklar ve harabeler bulabileceğiniz tek şehirdir.
										</p>

										<h5>Gezilebilecek Yerler</h5>
										<p>
											Fethiye’yi ziyaret etmek için en iyi zaman yaz aylarıdır.Fethiye’yi 2 – 3 günde gezebilmeniz mümkündür.
										</p>

										<div class="accordion accordion-flush" id="accordionFlushExample2">
											<div class="accordion-item">
												<h2 class="accordion-header" id="flush-headingOne2">
													<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne2" aria-expanded="false" aria-controls="flush-collapseOne2">
														Ölüdeniz
													</button>
												</h2>
												<div id="flush-collapseOne2" class="accordion-collapse collapse" aria-labelledby="flush-headingOne2" data-bs-parent="#accordionFlushExample2">
													<div class="accordion-body container-fluid">
														<div class="row">
															<div class="col-md-5">
																<p>
																	2006 yılında Dünya’nın en güzel kumsalı seçilmiş ve böylece Fethiye’nin en özel yerlerinden biri konumuna gelmiştir.Çam ormanlarıyla çevrili yemyeşil doğasıyla, olağanüstü manzarasıyla, kumlu plajı ve turkuaz rengi ılık deniziyle muhteşem bir doğal güzelliktir. Doğal güzellik olmasının yanı sıra, içerisinde birçok farklı aktivite yapma imkanı sunması da sizi fazlasıyla cezbedecek.
																</p>
																<a href="https://goo.gl/maps/FkReYEAVmvzXZYDs5">Yol Tarifi</a>
															</div>
															<div class="col-md-5">
																<img src="images/ölüdeniz.jpg" class="img-fluid rounded"style="max-height:200px">
															</div>
														</div>



													</div>
												</div>
											</div>
											<div class="accordion-item">
												<h2 class="accordion-header" id="flush-headingTwo2">
													<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo2" aria-expanded="false" aria-controls="flush-collapseTwo2">
														Fethiye Müzesi
													</button>
												</h2>
												<div id="flush-collapseTwo2" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo2" data-bs-parent="#accordionFlushExample2">
													<div class="accordion-body container-fluid">
														<div class="row">
															<div class="col-md-5">
																<p>
																	Fethiye Müzesi, dönemin kaymakamı Recep Ceylan’ın katkılarıyla 1987 yılında faaliye geçmiştir. Müzede; Fethiye ve çevresindeki kazı çalışmalarından elde edilen eserler, kronolojik bir sırayla sergileniyor. Arkeolojik ve Etnografya olmak üzere iki bölümden oluşan müze, Roma, Helenistik, Bizans, Tunç ve Arkaik gibi dönemlere ait kalıntıları içerisinde barındırıyor.
																</p>
																<a href="https://goo.gl/maps/jmqM8mosFfnJvLddA">Yol Tarifi</a>
															</div>
															<div class="col-md-5">
																<img src="images/fethiyemuze.jpg" class="img-fluid rounded"style="max-height:200px">
															</div>
														</div>



													</div>
												</div>
											</div>
											<div class="accordion-item">
												<h2 class="accordion-header" id="flush-headingThree2">
													<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree2" aria-expanded="false" aria-controls="flush-collapseThree2">
														Saklıkent Kanyonu Milli Parkı
													</button>
												</h2>
												<div id="flush-collapseThree2" class="accordion-collapse collapse" aria-labelledby="flush-headingThree2" data-bs-parent="#accordionFlushExample2">
													<div class="accordion-body container-fluid">
														<div class="row">
															<div class="col-md-5">
																<p>
																	Fethiye’ye 45 km uzaklıkta yer alan Saklıkent Kanyonu Milli Parkı, olağanüstü bir doğa güzelliğe sahip. Büyük kayaların arasında yürüyüş yapmak, size oldukça farklı bir deneyim kazandıracak.Tahta köprüden yürüyerek başlayacağınız bu maceraya, buz gibi akan suyuyla bir vadi katılacak. Yalnız, köprüde yürümek sizi korkutmasın, kayalıklara demir çubuklarla tutturulduğu için gerçekten sağlam bir yapıdadır. Biraz daha yürüdükten sonra, vadinin peşine minik bir ada sizleri karşılıyor.
																</p>
																<a href="https://g.page/saklikentkanyonu?share">Yol Tarifi</a>
															</div>
															<div class="col-md-5">
																<img src="images/saklıkent.jpg" class="img-fluid rounded"style="max-height:200px">
															</div>
														</div>



													</div>
												</div>
											</div>
											<div class="accordion-item">
												<h2 class="accordion-header" id="flush-headingFour2">
													<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour2" aria-expanded="false" aria-controls="flush-collapseFour2">
														Kelebekler Vadisi
													</button>
												</h2>
												<div id="flush-collapseFour2" class="accordion-collapse collapse" aria-labelledby="flush-headingFour2" data-bs-parent="#accordionFlushExample2">
													<div class="accordion-body container-fluid">
														<div class="row">
															<div class="col-md-5">
																<p>
																	Fethiye denilince akla ilk gelen yerlerden biri de kuşkusuz Kelebekler Vadisi’dir. Masmavi denizi ve yemyeşil doğasının yanı sıra 80’den fazla kelebek türünü himayesinde barındırmasıyla, adeta cennet gibi bir yerdir. Etrafındaki bitki çeşitliliği ile harika manzarasıyla herkesi büyüleyen Kelebekler Vadisi, tatilcilerin eve dönmeden mutlaka uğradığı bir noktadır.
																</p>
																<a href="https://goo.gl/maps/5dJ7CeuW7cuWLauX7">Yol Tarifi</a>
															</div>
															<div class="col-md-5">
																<img src="images/kelebekler.jpg" class="img-fluid rounded"style="max-height:200px">
															</div>
														</div>



													</div>
												</div>
											</div>
											<div class="accordion-item">
												<h2 class="accordion-header" id="flush-headingFive2">
													<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive2" aria-expanded="false" aria-controls="flush-collapseFive2">
														Gemiler Adası (Gemile Adası)
													</button>
												</h2>
												<div id="flush-collapseFive2" class="accordion-collapse collapse" aria-labelledby="flush-headingFive2" data-bs-parent="#accordionFlushExample2">
													<div class="accordion-body container-fluid">
														<div class="row">
															<div class="col-md-5">
																<p>
																	Gemiler Adası, bir diğer adıyla da bilinen Gemile Adası, tekne turlarının vazgeçilmez adreslerindendir. Adaya da zaten sadece teknelerle ulaşım sağlayabiliyorsunuz.
																</p>
																<a href="https://goo.gl/maps/WysM7kvyHvnTjW2K8">Yol Tarifi</a>
															</div>
															<div class="col-md-5">
																<img src="images/gemileradası.jpg" class="img-fluid rounded"style="max-height:200px">
															</div>
														</div>



													</div>
												</div>
											</div>
											<div class="accordion-item">
												<h2 class="accordion-header" id="flush-headingSix2">
													<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix2" aria-expanded="false" aria-controls="flush-collapseSix2">
														Şövalye Adası (Fethiye Adası)
													</button>
												</h2>
												<div id="flush-collapseSix2" class="accordion-collapse collapse" aria-labelledby="flush-headingSix2" data-bs-parent="#accordionFlushExample2">
													<div class="accordion-body container-fluid">
														<div class="row">
															<div class="col-md-5">
																<p>
																	Zamanında, Rodos Şövalyeleri yerleşim yeri olarak bu adayı kullanmış ve adanın ismini bu şövalyelerden aldığı bilinmektedir. Rodos Şövalyeleri’nin yaptırdığı kalenin kalıntılarına, günümüzde hala rastlayabilmeniz mümkün. Ayrıca ada, farklı birçok medeniyete ev sahipliği yapmış ve bunun izlerini de hala içerisinde taşır.
																</p>
																<a href="https://goo.gl/maps/Cx4Wb71R59vLvTmBA">Yol Tarifi</a>
															</div>
															<div class="col-md-5">
																<img src="images/şövalyeadası.jpg" class="img-fluid rounded"style="max-height:200px">
															</div>
														</div>



													</div>
												</div>
											</div>
										</div>

									</div>
									<div class="col-lg-1">

									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="list-Datça" role="tabpanel" aria-labelledby="list-Datça-list">
							<div class="container-fluid">

								<h1 class="m-5 mycolor text-center">Datça Gezilecek Yerler</h1>
								<div class="row">
									<div class="col-lg-1"></div>
									<div class="col-lg-10 text-center ">
										<img src="images/datça.jpg" class="img-fluid rounded" style="max-height:400px;">
									</div>
									<div class="col-lg-1"></div>
								</div>

								<div class="row mt-5">
									<div class="col-lg-1">

									</div>
									<div class="col-lg-10">
										<h5>Datça Hakkında</h5>
										<p>
											Ege Bölgesi’nin en güzel yerlerinden biri olan Datça Yarımadası, mavi ile yeşilin bütünleştiği birbirinden güzel koyları ile ilgi çekiyor. Mavi bayraklı plajları ve yemyeşil çam ormanları görenleri büyülüyor. Hem doğası hem havası ile tatilcilerin gözde tatil yerlerinden biri olan yarımadanın güneyinde Hisarönü Körfezi, kuzeyinde Gökova Körfezi bulunuyor ve toplamda 52 koy ve bük yer alıyor. Daha çok büklerle anılan Datça’nın girintili yerleri koy, yanında akarsu olan kısımları ise bük olarak adlandırılıyor. Bu kadar çok koy ve büke sahip olması, gerek mavi yolculuk tutkunlarına gerekse gezginlere birbirinden farklı seçenekler sunuyor.
										</p>

										<h5>Gezilebilecek Yerler</h5>
										<p>
											Datça'yı Haziran ve Ağustos aylarında ziyaret edebilirsiniz ancak daha sessiz ve sakin bir tatil istiyorsanız Eylül ve Ekim ayları tercih edilebilir.
										</p>

										<div class="accordion accordion-flush" id="accordionFlushExample3">
											<div class="accordion-item">
												<h2 class="accordion-header" id="flush-headingOne3">
													<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne3" aria-expanded="false" aria-controls="flush-collapseOne3">
														Datça Merkez
													</button>
												</h2>
												<div id="flush-collapseOne3" class="accordion-collapse collapse" aria-labelledby="flush-headingOne3" data-bs-parent="#accordionFlushExample3">
													<div class="accordion-body container-fluid">
														<div class="row">
															<div class="col-md-5">
																<p>
																	Datça merkez Reşadiye, Eski Datça ve İskele olmak üzere üç mahalleden meydana gelmektedir. Özellikle Reşadiye ve Eski Datça Mahalleleri büyük ölçüde günümüze kadar en az hasarla gelmiş yerleşim yerlerdir. Dar sokakları, taş evleri, badem ve zeytin ağaçlarıyla tam bir tipik Ege yaşantısını resmetmektedir.
																</p>
																<a href="https://goo.gl/maps/PfZcfurv9HWNbtCt6">Yol Tarifi</a>
															</div>
															<div class="col-md-5">
																<img src="images/datçamerkez.jpg" class="img-fluid rounded"style="max-height:200px">
															</div>
														</div>



													</div>
												</div>
											</div>
											<div class="accordion-item">
												<h2 class="accordion-header" id="flush-headingTwo3">
													<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo3" aria-expanded="false" aria-controls="flush-collapseTwo3">
														Karia Yolu
													</button>
												</h2>
												<div id="flush-collapseTwo3" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo3" data-bs-parent="#accordionFlushExample3">
													<div class="accordion-body container-fluid">
														<div class="row">
															<div class="col-md-5">
																<p>
																	Karia Yolu’nun öyle bir özelliği var ki oda; Türkiye’nin en uzun antik yürüyüş yolu olmasıdır. 850 kilometrelik bir yola sahip Karia; Bozburun Yarımadası, Datça Yarımadası, Gökova Körfezi ve İç Karia olmak üzere dört bölümü kapsarken birde artı olarak Muğla’yı içermektedir.

																	Yolun adı, üç bin yıllık bir geçmişe sahip olan antik kentten almış olup başlangıç noktası, Aydın’ın Çine ilçesinden başlamaktadır. Binlerce yerli yabancı turistin ilgisini çeken antik yol, doğa severlerin bir numaralı gözdesi.
																</p>
																
															</div>
															<div class="col-md-5">
																<img src="images/karia.jpg" class="img-fluid rounded"style="max-height:200px">
															</div>
														</div>



													</div>
												</div>
											</div>
											<div class="accordion-item">
												<h2 class="accordion-header" id="flush-headingThree3">
													<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree3" aria-expanded="false" aria-controls="flush-collapseThree3">
														Palamutbükü
													</button>
												</h2>
												<div id="flush-collapseThree3" class="accordion-collapse collapse" aria-labelledby="flush-headingThree3" data-bs-parent="#accordionFlushExample3">
													<div class="accordion-body container-fluid">
														<div class="row">
															<div class="col-md-5">
																<p>
																	Datça’nın en uzun kumsalına sahip Palamutbükü, ziyaretçi sayısıyla son yıllarda kendinden epey söz ettirmektedir. Bunu sebeplerinden biri de hem rüzgar almayışı hem de berrak denizinden kaynaklanıyor. Kumsal boyu yan yana sıralanmış birçok işletme görmeniz mümkün.
																</p>
																<a href="https://goo.gl/maps/pAYuoWqfFXBX9ghi7">Yol Tarifi</a>
															</div>
															<div class="col-md-5">
																<img src="images/palamutbükü.jpg" class="img-fluid rounded"style="max-height:200px">
															</div>
														</div>



													</div>
												</div>
											</div>
											<div class="accordion-item">
												<h2 class="accordion-header" id="flush-headingFour3">
													<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour3" aria-expanded="false" aria-controls="flush-collapseFour3">
														Ilıca Gölü
													</button>
												</h2>
												<div id="flush-collapseFour3" class="accordion-collapse collapse" aria-labelledby="flush-headingFour3" data-bs-parent="#accordionFlushExample3">
													<div class="accordion-body container-fluid">
														<div class="row">
															<div class="col-md-5">
																<p>
																	 aşlık Plajı’nın güneyi kıyısında yer alan Ilıca Gölü, şifalı su olarak bilinmektedir. Antik Roma’dan bu yana sodalı ve şifalı olduğu düşünülen bu göl, tam deniz ile karanın kavuştuğu noktada dağın yamacından dökülen su ile beslenmektedir. Özellikle sedef ve mantar hastalıklarına iyi geldiği söylenmektedir.
																</p>
																<a href="https://goo.gl/maps/VWgmCCUKnKcwYLuz7">Yol Tarifi</a>
															</div>
															<div class="col-md-5">
																<img src="images/ılıca.jpg" class="img-fluid rounded"style="max-height:200px">
															</div>
														</div>



													</div>
												</div>
											</div>
											<div class="accordion-item">
												<h2 class="accordion-header" id="flush-headingFive3">
													<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive3" aria-expanded="false" aria-controls="flush-collapseFive3">
														Kızlan Köyü
													</button>
												</h2>
												<div id="flush-collapseFive3" class="accordion-collapse collapse" aria-labelledby="flush-headingFive3" data-bs-parent="#accordionFlushExample3">
													<div class="accordion-body container-fluid">
														<div class="row">
															<div class="col-md-5">
																<p>
																	1200 kişilik nüfusu ile Datça merkeze 10 kilometre uzaklıkta yer alan tatlı bir Ege köyü olan Kızlan, bulunduğu yarımada üzerinde en fazla rüzgar alan bölgedir. Yeşille çevrelenmiş Ege Deniz’i manzarasına sahip olup adeta insana huzur ve dinginlik veren bir özelliğe sahip. Yaz aylarında var olan nüfus artış göstererek bölgeye hareketlilik kazandırmaktadır.
																</p>
																<a href="https://goo.gl/maps/3NNFfhrsio5i38ob9">Yol Tarifi</a>
															</div>
															<div class="col-md-5">
																<img src="images/kızlan.jpg" class="img-fluid rounded"style="max-height:200px">
															</div>
														</div>



													</div>
												</div>
											</div>
											<div class="accordion-item">
												<h2 class="accordion-header" id="flush-headingSix3">
													<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix3" aria-expanded="false" aria-controls="flush-collapseSix3">
														Yakaköy
													</button>
												</h2>
												<div id="flush-collapseSix3" class="accordion-collapse collapse" aria-labelledby="flush-headingSix3" data-bs-parent="#accordionFlushExample3">
													<div class="accordion-body container-fluid">
														<div class="row">
															<div class="col-md-5">
																<p>
																	 Datça merkeze 22 kilometre uzaklıkta bulunan Yakaköy’ün nüfusu toplamda 763 kişidir. Köyün ilk kurulduğu yer Kocadağ yamacında yer alıyor olup, son zaman turizmin yaygınlaşmasıyla kıyı kesimine doğru genişlemeye başlamıştır. Bu köyde yer alan Uluslararası Knidos Kültür ve Sanat Akademisi sayesinde yıl içerisinde düzenlenen etkinlikler ile bölge hareketlilik kazanmıştır.
																</p>
																<a href="https://goo.gl/maps/FpjLasirKbAVYUsF8">Yol Tarifi</a>
															</div>
															<div class="col-md-5">
																<img src="images/yakaköy.jpg" class="img-fluid rounded"style="max-height:200px">
															</div>
														</div>



													</div>
												</div>
											</div>
										</div>

									</div>
									<div class="col-lg-1">

									</div>
								</div>
							</div>
						</div>
						

						<div class="tab-pane fade" id="list-Dalyan" role="tabpanel" aria-labelledby="list-Dalyan-list">
							<div class="container-fluid">

								<h1 class="m-5 mycolor text-center">Dalyan Gezilecek Yerler</h1>
								<div class="row">
									<div class="col-lg-1"></div>
									<div class="col-lg-10 text-center ">
										<img src="images/dalyan.jpg" class="img-fluid rounded" style="max-height:400px;">
									</div>
									<div class="col-lg-1"></div>
								</div>

								<div class="row mt-5">
									<div class="col-lg-1">

									</div>
									<div class="col-lg-10">
										<h5>Dalyan Hakkında</h5>
										<p>
											Muğla’nın Ortaca ilçesine bağlı olan Dalyan, Köyceğiz Gölü ile Akdeniz’i birleştiren bir kanal üzerinde yer alıyor. Fethiye ve Marmaris arasında kalan Dalyan, yemyeşil ormanları, tertemiz ve masmavi denizi, el değmemiş doğası ve tarihi yapılarıyla her zaman farklı bir atmosfere sahiptir. Kış aylarında 5 bin nüfusa sahip bir kasaba olan Dalyan, yaz aylarında nüfusu bir hayli artıyor ancak yine de sakinliğini korumayı başarıyor.
										</p>

										<h5>Gezilebilecek Yerler</h5>
										<p>
											 Her mevsim ziyarete uygun bir yer olan Dalyan’ın deniz sezonu, Nisan ayından Kasım ayına kadardır. Ayrıca Caretta Caretta Kaplumbağaların yumurtalamasına denk gelmek isterseniz, Haziran-Temmuz ayları arasında gelebilirsiniz.
										</p>

										<div class="accordion accordion-flush" id="accordionFlushExample5">
											<div class="accordion-item">
												<h2 class="accordion-header" id="flush-headingOne5">
													<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne5" aria-expanded="false" aria-controls="flush-collapseOne5">
														İztuzu Plajı
													</button>
												</h2>
												<div id="flush-collapseOne5" class="accordion-collapse collapse" aria-labelledby="flush-headingOne5" data-bs-parent="#accordionFlushExample5">
													<div class="accordion-body container-fluid">
														<div class="row">
															<div class="col-md-5">
																<p>
																	İztuzu Plajı, 4,5 km uzunluğuna sahip ve o kadar iyi korunmuş ki, sahil boyunca ne bir otel ne de bir ev inşa edilmiş. Deniz suyu ile tatlı su arasında nadir bulunan plajlardan birisidir. Plaja Caretta Caretta kaplumbağalarının yumurtalarını bırakmasından dolayı, plajın ismi ‘’Kaplumbağa Plajı’’ olarak da adlandırılmakta.
																</p>
																<a href="https://goo.gl/maps/BG89tzyt4NdsJZU47">Yol Tarifi</a>
															</div>
															<div class="col-md-5">
																<img src="images/iztuzu.jpg" class="img-fluid rounded"style="max-height:200px">
															</div>
														</div>



													</div>
												</div>
											</div>
											<div class="accordion-item">
												<h2 class="accordion-header" id="flush-headingTwo5">
													<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo5" aria-expanded="false" aria-controls="flush-collapseTwo5">
														Sultaniye Kaplıcaları
													</button>
												</h2>
												<div id="flush-collapseTwo5" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo5" data-bs-parent="#accordionFlushExample5">
													<div class="accordion-body container-fluid">
														<div class="row">
															<div class="col-md-5">
																<p>
																	Köyceğiz’de yer alan Sultaniye Kaplıcaları, her yıl yerli ve yabancı birçok turist tarafından ziyaret ediliyor.Mineral değerleri yüksek ve ideal sıcaklığa sahip olan suları ile, Türkiye’de bulunan en nadir kaplıcalardan biridir. Aynı zamanda Türkiye’nin en yüksek radyoaktivitesine sahip olan kaplıcaya, özel araç dışında, Köyceğiz’den, Dalyan’dan, Ekincik’ten günübirlik dolmuş motorlarıyla ulaşım sağlayabilirsiniz.
																</p>
																<a href="https://goo.gl/maps/pyNCq7KSLnAknZp87">Yol Tarifi</a>
															</div>
															<div class="col-md-5">
																<img src="images/kaplıca.jpg" class="img-fluid rounded"style="max-height:200px">
															</div>
														</div>



													</div>
												</div>
											</div>
											<div class="accordion-item">
												<h2 class="accordion-header" id="flush-headingThree5">
													<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree5" aria-expanded="false" aria-controls="flush-collapseThree5">
														Yuvarlakçay
													</button>
												</h2>
												<div id="flush-collapseThree5" class="accordion-collapse collapse" aria-labelledby="flush-headingThree5" data-bs-parent="#accordionFlushExample5">
													<div class="accordion-body container-fluid">
														<div class="row">
															<div class="col-md-5">
																<p>
																	Türkiye’nin yeryüzü cenneti, Muğla’nın ise soğuk cenneti olarak anılan Yuvarlakçay, Dalyan merkeze yarım saatlik bir mesafede yer alıyor. Suyunun yuvarlanarak akmasından dolayı bu ismi alan Yuvarlakçay, ferah bir havaya ve buz gibi sulara sahiptir. Çayın üzerinde yer alan salıncakla oldukça popüler olan yere, yaz aylarında sırf fotoğraf çekmek için bile gelenlerin olduğunu söyleyebiliriz. Ayrıca sıcaklardan kaçıp, serinlemek için de sıklıkla ziyaret edildiği bir gerçektir.
																</p>
																<a href="https://goo.gl/maps/38Eqh6Rq6xSGTSk17">Yol Tarifi</a>
															</div>
															<div class="col-md-5">
																<img src="images/yuvarlakçay.jpg" class="img-fluid rounded"style="max-height:200px">
															</div>
														</div>



													</div>
												</div>
											</div>
											<div class="accordion-item">
												<h2 class="accordion-header" id="flush-headingFour5">
													<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour5" aria-expanded="false" aria-controls="flush-collapseFour5">
														Kaunos Kral Mezarları
													</button>
												</h2>
												<div id="flush-collapseFour5" class="accordion-collapse collapse" aria-labelledby="flush-headingFour5" data-bs-parent="#accordionFlushExample5">
													<div class="accordion-body container-fluid">
														<div class="row">
															<div class="col-md-5">
																<p>
																	Muğla’nın Ortaca ilçesi sınırları içerisinde yer alan Kaunos Antik Kenti dahilindeki kral mezarları fazlasıyla dikkat çekmektedir. Bu antik kente ve içerdiği kral mezarlarına ulaşmak için Dalyan Mahallesi’nden yola çıkarak deniz motorlarıyla ulaşım faaliyetini gerçekleştirmek gerekmektedir. 
																</p>
																<a href="https://goo.gl/maps/BTtiW5Zs1Q5DGjsq7">Yol Tarifi</a>
															</div>
															<div class="col-md-5">
																<img src="images/kaunos.jpg" class="img-fluid rounded"style="max-height:200px">
															</div>
														</div>



													</div>
												</div>
											</div>
											
											
										</div>

									</div>
									<div class="col-lg-1">

									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="list-Muğlat" role="tabpanel" aria-labelledby="list-Muğlat-list">

							<div class="container-fluid">
								<h1 class="mycolor">Tarihçe</h1>
								<p class="fs-4 ">
									Karia bölgesinin en eski şehirlerinden biri olan Muğla şehir merkezinin eski kayıtlarda adı "Mobolia" olarak geçmektedir. M.Ö. 3400 yıllarında, başında "Kar" isimli bir liderin bulunduğu bir kavim yerleşmiştir. M.Ö.1000 yıllarında Dor'ların hâkimiyetine giren bölge, M.Ö.228'den sonra Bergama Roma birliğine katılmış ve M.Ö.133 yılında bir Roma eyaleti olmuştur.
								</p>
								<br>
								<hr>
								<p class="fs-4">
									Muğla’nın Türklerin eline geçmesi, Uç Beylerden Menteşe Bey tarafından 1284 de gerçekleştirilmiştir. Bu tarihten sonra bölge "Menteşe" adıyla anılmaya başlanmıştır. Osmanlı topraklarına 1391 yılında Yıldırım Beyazıt tarafından katılan bölge, 1402’de Timur’un hakimiyetine girmiş ve Timur tarafından Menteşe Beyliği’ne verilmiş, II. Murat döneminde ise tekrar Osmanlı İmparatorluğu’nun bir parçası olmuştur. 1811 tarihinde Saruhan, İzmir ve Menteşe Sancakları Kütahya’dan alınarak Aydın Eyaleti’ne bağlanmıştır. 1884 yılında 5 ilçe, 3 bucak ve 329 köyden meydana gelen Menteşe Sancağı 30 Ekim 1913’te Aydın eyaletinden ayrılarak il olmuş ve Muğla adını almıştır. Muğla adının Selçuklu Sultanı Kılıçarslan’ın komutanlarından “Muğlu” Bey’den gelmekte olduğu söylenmektedir.
								</p>



							</div>
						</div>					
					</div>
				</div>





			</div>
		</div>

	</div>

</main>









<footer  class="py-md-4 bg-dark text-red border-top border-danger mt-auto">

	<div class="container text-center">



		<a title="Instagram" class="icons m-1" target="_blank" href="https://www.instagram.com/atakanpasali_/"><i class="fa-brands fa-instagram"></i> </a>

		<a title="Twitter" class="icons m-1" target="_blank" href="#"><i class="fa-brands fa-twitter"></i></a>

		<a title="Github" class="icons m-1" target="_blank" href="https://github.com/AtakanPA"><i class="fa-brands fa-github"></i></a>

		<a title="Discord" class="icons m-1" target="_blank" href="https://discord.gg/YTrEq7AN"><i class="fa-brands fa-discord"></i></a>
	</div>


</footer>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>