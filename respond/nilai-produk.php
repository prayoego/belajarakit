<!DOCTYPE html>
<html>
<head>
	<?php include '../belajar/_meta.php' ?>
	<title>Bisa Rakit</title>
	<?php include '../belajar/_register-css.php' ?>
</head>
<body>
	<!-- header -->
	<section class="materi-header">
		<nav class="navbar navbar-expand-lg navbar-weblearning fixed-top">
			<div class="container">
				<ul class="left-info">
				<li>
					<a href="../index.php">
						BISA RAKIT
					</a>
				</li>
			</ul>
			<ul class="right-info">
				<li>
					<a href="nilai-produk.php">NILAI</a>
				</li>
			</ul>
			</div>
		</nav>
	</section>
	<!-- end header -->

	<section class="responden main-content-first">
		<div class="tentang-pembelajaran">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-12 col-sm-12">
						<h1 class="mobile-display justify-content-center">
							Bagaimana belajarnya?
						</h1>
						<div class="tentang-pembelajaran-item">
							<div class="item-left">
								<h1 class="desktop-display">
									Bagaimana belajarnya?
								</h1>
								<p>
									Bagaimana pengalaman belajar kalian setelah menggunakan media belajar berbasis website ini, berikan tanggapan dan masukannya ya...
								</p>
								<div class="btn-group" role="group" aria-label="Basic example">
								  <a href="#penilaian1" class="btn btn-secondary" data-toggle="collapse" aria-expanded="false" aria-controls="penilaian1">
								  	Ahli Materi
								  </a>
								  <a href="#penilaian2" class="btn btn-secondary" data-toggle="collapse" aria-expanded="false" aria-controls="penilaian2">
								  	Ahli Media
								  </a>
								  <a href="#penilaian3" class="btn btn-secondary" data-toggle="collapse" aria-expanded="false" aria-controls="penilaian3">
								  	Siswa
								  </a>
								</div>
							</div>
							<div class="item-right">
								<img class="img-fluid" src="../images/review.png" alt=""/>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>



		<div class="collapse hide-scrollbar" id="penilaian1">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-sm-12">
						<iframe src="https://docs.google.com/forms/d/e/1FAIpQLSdUd4eHaAAIvMgTkIefSyyuAKoIez7heuo_P5m3ZrtSxak2_A/viewform?embedded=true" width="100%" height="600" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
					</div>
				</div>
			</div>
		</div>
		<div class="collapse hide-scrollbar" id="penilaian2">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-sm-12">
						<iframe src="https://docs.google.com/forms/d/e/1FAIpQLSf5GOX5GT858QdrB2os6uI2z9GevFzKZ1bmioPx-38FUec4uw/viewform?embedded=true" width="100%" height="442" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
					</div>
				</div>
			</div>
		</div>
		<div class="collapse hide-scrollbar" id="penilaian3">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-sm-12">
						<iframe src="https://docs.google.com/forms/d/e/1FAIpQLSfof9j9jxoMIvP0NT2S1qGFcKg__i8jSVtpSbt2vRvxmGWahA/viewform?embedded=true" width="100%" height="4110" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
					</div>
				</div>
			</div>
		</div>

	</section>

	<?php include '../footer.php' ?>
	<?php include '../belajar/_register-js.php' ?>
	<script type="text/javascript">
		$('#penilaian1').on('shown.bs.collapse', function () {
		  this.scrollIntoView();
		});
	</script>
	<script type="text/javascript">
		$('#penilaian2').on('shown.bs.collapse', function () {
		  this.scrollIntoView();
		});
	</script>
	<script type="text/javascript">
		$('#penilaian3').on('shown.bs.collapse', function () {
		  this.scrollIntoView();
		});
	</script>


</body>
</html>

