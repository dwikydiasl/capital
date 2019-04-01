<?php
include "header.php";
?>
<?php
include "header2.php";
?>

<div class="slider">
	<div id="myDIV">
		<div class="row search-box">
			<div class="col-7 col-sm-8 col-md-8">
				<input type="text" class="form-control" id="" aria-describedby="" placeholder="MASUKKAN KATA KUNCI">
			</div>
			<div class="col-3 col-sm-3 col-md-3" align="right">
				<button type="button" class="btn ">Cari</button>
			</div>
			<div class="col-2 col-sm-1 col-md-1" align="right">
				<i class="fas fa-window-close" onclick="myFunction()"></i>
			</div>
		</div>
	</div>
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators" style="padding-bottom: 20px;">				
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img class="d-block w-100 responsive-img" src="assets/img/slide1.jpeg"  width="100%">
				<div class="carousel-caption">
					<h5>“PERUSAHAAN KEUANGAN TERINTEGRASI YANG SOLID DAN TERPERCAYA”</h5>        
				</div>
			</div>
			<div class="carousel-item">
				<img class="d-block w-100 responsive-img" src="assets/img/slide2.jpeg" width="100%">
				<div class="carousel-caption">
					<h5>“PERUSAHAAN KEUANGAN TERINTEGRASI YANG SOLID DAN TERPERCAYA”</h5>        
				</div>
			</div>
			<div class="carousel-item">
				<img class="d-block w-100 responsive-img" src="assets/img/slide3.jpeg" width="100%">
				<div class="carousel-caption">
					<h5>“PERUSAHAAN KEUANGAN TERINTEGRASI YANG SOLID DAN TERPERCAYA”</h5>        
				</div>
			</div>
		</div>
		<a class="carousel-control-prev" href="#myCarousel"  data-slide="prev">
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#myCarousel"  data-slide="next">
			<span class="sr-only">Next</span>
		</a>
	</div>
</div>

<div class="list-white">
	<center>
		<div class="box-white"></div>
	</center>		
</div>

<div class="header-info">
	<center>
		<div class="box-header" ></div>
	</center>	
</div>

<!-- Info -->

<div class="info">
	<div class="list-info">
		<div class="container" >
			<div class="row konten-info">
				<div class="col-12 col-sm-12 col-md-4 col-lg-4 konten-info-left">
					<div class="row">
						<div class="col-3 col-sm-2 col-md-4 col-lg-3">
							<img src="assets/img/icon/laporan.png" >
						</div>
						<div class="col-9 col-sm-10 col-md-8 col-lg-9">
							<h6>LAPORAN KEUANGAN</h6>
							<p>
								Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut...

							</p>
							<a href="">LEARN MORE <i class="fas fa-caret-right"></i></a>
						</div>
					</div>					
				</div>
				<div class="col-12 col-sm-12 col-md-4 col-lg-4 konten-info-center">
					<div class="row">
						<div class="col-3 col-sm-2 col-md-4 col-lg-3">
							<img src="assets/img/icon/laporan-tahunan.png" >
						</div>
						<div class="col-9 col-sm-10 col-md-8 col-lg-9">
							<h6>LAPORAN TAHUNAN</h6>
							<p>
								Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut...

							</p>
							<a href="">LEARN MORE <i class="fas fa-caret-right"></i></a>
						</div>
					</div>	
				</div>
				<div class="col-12 col-sm-12 col-md-4 col-lg-4 konten-info-right">
					<div class="row">
						<div class="col-3 col-sm-2 col-md-4 col-lg-3">
							<img src="assets/img/icon/nab.png" >
						</div>
						<div class="col-9 col-sm-10 col-md-8 col-lg-9">
							<h6>NAB</h6>
							<p>
								Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut...

							</p>
							<a href="">LEARN MORE <i class="fas fa-caret-right"></i></a>
						</div>
					</div>	
				</div>
			</div>
		</div>
	</div>		
</div>

<!-- Berita -->

<div id="berita">
	<div class="title-berita" align="center">
		<p>BERITA CAPITAL</p>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-12 col-sm-12 col-md-6 konten-berita-left">
				<a href="">
					<div>
						<img src="assets/img/capital.jpeg" class="responsive-img" height="600px" width="100%" >
						<div class="title-info">
							<p align="center">
								CAPITAL FINANCIAL INDONESIA (CASA) BENTUK DUA ANAK USAHA BARU
							</p>
						</div>
					</div>
				</a>
			</div>
			<div class="col-12 col-sm-12 col-md-6 konten-berita-right">
				<div class="all-berita">
					<a href="">
						<div class="row">
							<div class="col-4 col-sm-3 col-md-4 col-lg-4">
								<img src="assets/img/capital.jpeg" class="responsive-img" h width="100%" >
							</div>
							<div class="col-8 col-sm-9 col-md-8 col-lg-8">
								<h6>Rab, Jan 2 2019</h6>
								<p>
									DADIPISCING ELIT, SED DIAM NONUMMY NIBH EUISMOD TINCIDUNT UT LAOREET DOLORE MAGNA ALIQUAM ERAT VOLUTPAT
								</p>
							</div>
						</div>						
					</a>
				</div>
				<div class="all-berita">
					<a href="">
						<div class="row">
							<div class="col-4 col-sm-3 col-md-4 col-lg-4">
								<img src="assets/img/capital.jpeg" class="responsive-img" width="100%" >
							</div>
							<div class="col-8 col-sm-9 col-md-8 col-lg-8">
								<h6>Rab, Jan 2 2019</h6>
								<p>
									VELIT ESSE MOLESTIE CONSEQUAT, VEL ILLUM DOLORE EU 
								</p>
							</div>
						</div>						
					</a>
				</div>
				<div class="all-berita">
					<a href="">
						<div class="row">
							<div class="col-4 col-sm-3 col-md-4 col-lg-4">
								<img src="assets/img/capital.jpeg" class="responsive-img" width="100%" >
							</div>
							<div class="col-8 col-sm-9 col-md-8 col-lg-8">
								<h6>Rab, Jan 2 2019</h6>
								<p>
									QUIS NOSTRUD EXERCI TATION ULLAMCORPER SUSCIPIT LOBORTIS NISL UT ALIQUIP EX EA COMMODO CONSEQUAT
								</p>
							</div>
						</div>						
					</a>
				</div>
			</div>
		</div>

	</div>
</div>

<!-- Partner -->

<div id="partner">
	<div class="container">
		<div class="title-partner">
			<p align="center">PILAR USAHA</p>
		</div>


		<div class="owl-carousel owl-theme ">
			<div class="konten-partner">
				<div class="circle">
					<div class="row">
						<div class="col-6 col-sm-6 col-md-6 circle-left" align="left">
							<i class="fas fa-circle fa-3x"></i>
						</div>
						<div class="col-6 col-sm-6 col-md-6 circle-right"  align="right">
							<i class="fas fa-circle fa-3x"></i>
						</div>
					</div>
				</div>
				<div class="box-partner item">
					<div class="info-partner">
						<img src="assets/img/icon/capital-life.png">
						<p>
							Perlindungan kesehatan yang memberi jaminan uang kembali kepada anda, tanpa ribet!
						</p>
					</div>
				</div>
			</div>

			<div class="konten-partner">
				<div class="circle">
					<div class="row">
						<div class="col-6 col-sm-6 col-md-6 circle-left" align="left">
							<i class="fas fa-circle fa-3x"></i>
						</div>
						<div class="col-6 col-sm-6 col-md-6 circle-right"  align="right">
							<i class="fas fa-circle fa-3x"></i>
						</div>
					</div>
				</div>
				<div class="box-partner item">
					<div class="info-partner">
						<img src="assets/img/icon/capital-syariah.png">
						<p>
							Satu premi untuk sekeluarga dengan harga terjangkau
						</p>
					</div>
				</div>
			</div>

			<div class="konten-partner">
				<div class="circle">
					<div class="row">
						<div class="col-6 col-sm-6 col-md-6 circle-left" align="left">
							<i class="fas fa-circle fa-3x"></i>
						</div>
						<div class="col-6 col-sm-6 col-md-6 circle-right"  align="right">
							<i class="fas fa-circle fa-3x"></i>
						</div>
					</div>
				</div>
				<div class="box-partner item">
					<div class="info-partner">
						<img src="assets/img/icon/toko-modal.png">
						<p>
							Perlindungan kesehatan yang memberi jaminan uang kembali kepada anda, tanpa ribet!
						</p>
					</div>
				</div>
			</div>

			<div class="konten-partner">
				<div class="circle">
					<div class="row">
						<div class="col-6 col-sm-6 col-md-6 circle-left" align="left">
							<i class="fas fa-circle fa-3x"></i>
						</div>
						<div class="col-6 col-sm-6 col-md-6 circle-right"  align="right">
							<i class="fas fa-circle fa-3x"></i>
						</div>
					</div>
				</div>
				<div class="box-partner item">
					<div class="info-partner">
						<img src="assets/img/logo.png">
						<p>
							Perlindungan kesehatan yang memberi jaminan uang kembali kepada anda, tanpa ribet!
						</p>
					</div>
				</div>
			</div>

			<div class="konten-partner">
				<div class="circle">
					<div class="row">
						<div class="col-6 col-sm-6 col-md-6 circle-left" align="left">
							<i class="fas fa-circle fa-3x"></i>
						</div>
						<div class="col-6 col-sm-6 col-md-6 circle-right"  align="right">
							<i class="fas fa-circle fa-3x"></i>
						</div>
					</div>
				</div>
				<div class="box-partner item">
					<div class="info-partner">
						<img src="assets/img/logo.png">
						<p>
							Perlindungan kesehatan yang memberi jaminan uang kembali kepada anda, tanpa ribet!
						</p>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>

<?php
include "footer.php";
?>