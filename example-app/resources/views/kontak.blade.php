<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title>Kontak | PT. Randmu Indonesia Consulta</title>
	
	<meta content="" name="description">
	<meta content="" name="keywords">

	<!-- Favicons -->
	<link rel="icon" href="img/favicon_randmu.png" type="image">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

	<!-- Vendor CSS Files -->
	<link href="vendor/aos/aos.css" rel="stylesheet">
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
	<link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
	<link href="vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
	<link href="vendor/remixicon/remixicon.css" rel="stylesheet">
	<link href="vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

	<!-- Template Main CSS File -->
	<link href="css/style.css" rel="stylesheet">

	<!-- =======================================================
	* Template Name: Arsha - v4.8.0
	* Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
	* Author: BootstrapMade.com
	* License: https://bootstrapmade.com/license/
	======================================================== -->
</head>
<body>
    <!--====================HEADER SECTION====================-->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">
            <!--<h1 class="logo me-auto"><a href="home.html">Randmu</a></h1>-->
            <!-- Uncomment below if you prefer to use an image logo -->
			<a href="beranda" class="logo me-auto"><img src="img/logo_randmu.jpg" alt="Randmu" class="img-fluid"></a>

            <nav id="navbar" class="navbar">
				<ul>
                    <!--pindahkan tag active ke li yang sedang dikerjakan-->
					<!--kalau sedang ngerjain about, pindah active ke about-->
					<!--kalau sedang ngerjain team, pindah active ke team-->
					<!--kalau sedang ngerjain contact, pindah active ke contact, dan seterusnya-->
					<li><a class="nav-link" href="beranda">Beranda</a></li>
					<li><a class="nav-link" href="beranda#news">Berita</a></li>
					<li><a class="nav-link" href="layanan">Layanan</a></li>
					<li><a class="nav-link" href="portofolio">Portofolio</a></li>
					<li class="dropdown"><a href="#"><span>Bahasa</span> <i class="bi bi-chevron-down"></i></a>
						<ul>
							<li><a href="contact">English</a></li>
							<li><a href="kontak">Bahasa Indonesia</a></li>
						</ul>
					</li>
					<li><a class="nav-link active" href="kontak">Kontak</a></li>
					<li><a class="nav-link" href="login-id"><button type="button" class="btn-get-started">Login</button></a></li>
				</ul>
				<i class="bi bi-list mobile-nav-toggle"></i>
			</nav>
        </div>
    </header><!--end of header-->

    <!-- ======= Hero Section ======= -->
	<section id="hero_nonhome" class="d-flex align-items-center">

		<div class="container"></div>

	</section><!-- End Hero -->

    <!-- ======= Contact Section ======= -->
	<section id="contact" class="contact">
		<div class="container">

			<div class="section-title">
				<h2>Kontak Kami</h2>
			</div>

			<div class="row">
				<div class="col-lg-6 mt-5 mt-lg-0 d-flex align-items-stretch">
					<form action="contact.php" method="post" role="form" class="php-email-form">
						<div class="form-group">
							<label for="name">Nama Anda</label>
							<input type="text" class="form-control" name="txtName" id="txtName" required>
						</div>
						<div class="form-group">
							<label for="name">Email Valid</label>
							<input type="email" class="form-control" name="txtEmail" id="txtEmail" required>
						</div>
						<div class="form-group">
							<label for="name">Subjek Pertanyaan</label>
							<input type="text" class="form-control" name="txtSubject" id="txtSubject" required>
						</div>
						<div class="form-group">
							<label for="name">Pesan</label>
							<textarea class="form-control" name="txtMessage" id="txtMessage" rows="10" required></textarea>
						</div>
						<div class="my-3">
							<div class="loading">Memuat</div>
							<div class="error-message"></div>
							<div class="sent-message">Pesan Anda telah dikirim. Terima kasih!</div>
						</div>
						<div class="text-center"><button type="submit">Kirim Pesan</button></div>
					</form>
				</div>

				<div class="col-lg-6 d-flex align-items-stretch">
					<div class="info">
						<div class="address">
							<i class="bi bi-geo-alt"></i>
							<h4>Lokasi:</h4>
							<p>
								Wisma Kodel 8th Floor <br> 
								Jalan H.R Rasuna Said Kav.B.4 <br>
								Setiabudi, Jakarta Selatan
							</p>
						</div>

						<div class="phone">
							<i class="bi bi-phone"></i>
							<h4>Telp:</h4>
							<p>+62 21 3030 5885</p>
						</div>

						<div class="phone">
							<i class="bi bi-whatsapp"></i>
							<h4>WhatsApp:</h4>
							<p>+62 21 3030 5885</p>
						</div>

						<div class="email">
							<i class="bi bi-envelope"></i>
							<h4>Email:</h4>
							<p>randmu@outlook.com</p>
						</div>

						<img src="img/mapsrandmu.jpg" alt="Lokasi Randmu" class="img-fluid">
					</div>

				</div>				

			</div>

		</div>
	</section><!-- End Contact Section -->

	<!--FOOTER SECTION-->
	<footer id="footer">
		<div class="footer-top">
			<div class="container">
				<div class="row">

					<div class="col-lg-3 col-md-6 footer-contact">
						<h3>Randmu</h3>
						<p>
							Wisma Kodel 8th Floor<br>
							Jalan H.R Rasuna Said Kav.B.4<br>
							Setiabudi, Jakarta Selatan<br><br>
							<strong>Telp:</strong> +62 21 3030 5885 <br>
							<strong>WhatsApp:</strong> +62 8151 152 9555 <br>
							<strong>Email:</strong> randmu@outlook.com<br>
						</p>
					</div>

					<div class="col-lg-3 col-md-6 footer-links">
						<h4>Layanan Kami</h4>
						<ul>
							<li><i class="bx bx-chevron-right"></i> <a href="layanan-konsult_manage">Konsultasi Manajemen</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="layanan-penasihat_investasi">Penasihat Investasi & Studi Kelayakan</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="layanan-audit_jaminan">Audit & Jaminan</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="layanan-akuntansi_keuangan">Akuntansi Keuangan</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="layanan-pajak">Perencanaan & Konsultasi Pajak</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="layanan-sdm">Solusi SDM</a></li>
						</ul>
					</div>

					<div class="col-lg-3 col-md-6 footer-links">
						<h4>Portofolio Kami</h4>
						<ul>
							<li><i class="bx bx-chevron-right"></i> <a href="beranda#portfolio">Ritel & Manufaktur</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="beranda#portfolio">Layanan, Perhotelan & Konstruksi</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="beranda#portfolio">Teknologi</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="beranda#portfolio">Transportasi</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="beranda#portfolio">Kerja sama</a></li>
						</ul>
					</div>

					<div class="col-lg-3 col-md-6 footer-links">
						<h4>Sosial Media Kami</h4>
						<p>Terhubung dengan kami</p>
						<div class="social-links mt-3">
							<a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
							<a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
							<a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
							<a href="whatsapp://send?text=Hello&phone=+6281511529555" class="whatsapp"><i class="bx bxl-whatsapp"></i></a>
							<a href="https://www.linkedin.com/company/randmu/about/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
						</div>
					</div>

				</div>
			</div>
		</div>

		<div class="container footer-bottom clearfix">
			<div class="copyright">
				&copy; Copyright <strong><span>Arsha</span></strong>. All Rights Reserved
			</div>
			<div class="credits">
				<!-- All the links in the footer should remain intact. -->
				<!-- You can delete the links only if you purchased the pro version. -->
				<!-- Licensing information: https://bootstrapmade.com/license/ -->
				<!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
				Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
			</div>
		</div>
	</footer>
	<!-- End of Footer Section-->

	<div id="preloader"></div>
	<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

	<!-- Vendor JS Files -->
	<script src="vendor/aos/aos.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="vendor/glightbox/js/glightbox.min.js"></script>
	<script src="vendor/isotope-layout/isotope.pkgd.min.js"></script>
	<script src="vendor/swiper/swiper-bundle.min.js"></script>
	<script src="vendor/waypoints/noframework.waypoints.js"></script>
	<script src="vendor/php-email-form/validate.js"></script>

	<!-- Template Main JS File -->
	<script src="js/main.js"></script>
</body>
</html>

<!--
	<div style="width: 100%"><iframe scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Wisma%20Kodel,%20Jl.%20H.%20R.%20Rasuna%20Said%20No.10,%20RT.10/RW.7,%20Kuningan,%20Setia%20Budi,%20Kecamatan%20Setiabudi,%20Kota%20Jakarta%20Selatan,%20Daerah%20Khusus%20Ibukota%20Jakarta%2012910+(Randmu%20Indonesia%20Consulta)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" width="100%" height="600" frameborder="0"><a href="https://www.maps.ie/distance-area-calculator.html">measure acres/hectares on map</a></iframe></div>
-->