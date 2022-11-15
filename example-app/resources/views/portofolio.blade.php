<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title>Portofolio | PT. Randmu Indonesia Consulta</title>
	
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
			<a href="/" class="logo me-auto"><img src="img/logo_randmu.jpg" alt="Randmu" class="img-fluid"></a>

            <nav id="navbar" class="navbar">
				<ul>
                    <!--pindahkan tag active ke li yang sedang dikerjakan-->
					<!--kalau sedang ngerjain about, pindah active ke about-->
					<!--kalau sedang ngerjain team, pindah active ke team-->
					<!--kalau sedang ngerjain contact, pindah active ke contact, dan seterusnya-->
					<li><a class="nav-link" href="beranda">Beranda</a></li>
					<li><a class="nav-link" href="beranda#news">News</a></li>
					<li><a class="nav-link" href="layanan">Layanan</a></li>
					<li><a class="nav-link active" href="portofolio">Portofolio</a></li>
					<li class="dropdown"><a href="#"><span>Bahasa</span> <i class="bi bi-chevron-down"></i></a>
						<ul>
							<li><a href="portfolio">English</a></li>
							<li><a href="portofolio">Bahasa Indonesia</a></li>
						</ul>
					</li>
					<li><a class="nav-link" href="kontak">Kontak</a></li>
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

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Klien Kami</h2>
            </div>

            <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
                <li data-filter="*" class="filter-active">Semua</li>
                <li data-filter=".filter-retman">Retail & Manufaktur</li>
                <li data-filter=".filter-shc">Layanan, Ramah-tamah & Konstruksi</li>
                <li data-filter=".filter-tech">Teknologi</li>
                <li data-filter=".filter-transport">Transportasi</li>
            </ul>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                <div class="col-lg-4 col-md-6 portfolio-item filter-retman">
                    <div class="portfolio-img"><img src="img/portfolio/tamron.jpg" class="img-fluid" alt="PT. Tamron Akuatik Produk Industri"></div>
                    <div class="portfolio-info">
                        <h4>PT. Tamron Akuatik Produk Industri</h4>
                        <p>Zhanjiang Tenglong China Group</p>
                        <a href="img/portfolio/tamron.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Retman 1"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-tech">
                    <div class="portfolio-img"><img src="img/portfolio/langenburg.webp" class="img-fluid" alt="Langenburg Technologies USA"></div>
                    <div class="portfolio-info">
                        <h4>Langenburg Technologies USA</h4>
                        <a href="img/portfolio/langenburg.webp" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-retman">
                    <div class="portfolio-img"><img src="img/portfolio/pkf_large.jpeg" class="img-fluid" alt="PT. Plastik Karawang Flexindo"></div>
                    <div class="portfolio-info">
                        <h4>PT. Plastik Karawang Flexindo</h4>
                        <a href="img/portfolio/pkf_large.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-shc">
                    <div class="portfolio-img"><img src="img/portfolio/grandpalacebali.jpg" class="img-fluid" alt="Grand Palace Hotel, Bali"></div>
                    <div class="portfolio-info">
                        <h4>Grand Palace Hotel</h4>
                        <p>Bali</p>
                        <a href="img/portfolio/grandpalacebali.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-tech">
                    <div class="portfolio-img"><img src="
                    img/portfolio/northmarinespot.jpg" class="img-fluid" alt="PT. North Marine Spot"></div>
                    <div class="portfolio-info">
                        <h4>PT. North Marine Spot</h4>
                        <p>Suzuki Marine Japan Group</p>
                        <a href="
                        img/portfolio/northmarinespot.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        <!-- pic src: https://www.instagram.com/p/CNjmGsPJZRn/?utm_source=ig_web_copy_link -->
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-retman">
                    <div class="portfolio-img"><img src="
                    img/portfolio/berlindo.jpg" class="img-fluid" alt="PT. Berlindo Mitra Utama"></div>
                    <div class="portfolio-info">
                        <h4>PT. Berlindo Mitra Utama</h4>
                        <a href="
                        img/portfolio/berlindo.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-shc">
                    <div class="portfolio-img"><img src="img/portfolio/nasgorkambonsir.jpg" class="img-fluid" alt="Nasi Goreng Kebon Sirih Restaurant"></div>
                    <div class="portfolio-info">
                        <h4>Nasi Goreng Kebon Sirih Restaurant</h4>
                        <a href="img/portfolio/nasgorkambonsir.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-shc">
                    <div class="portfolio-img"><img src="img/portfolio/aljazeerah.jpg" class="img-fluid" alt="Al Jazeerah Restaurant"></div>
                    <div class="portfolio-info">
                        <h4>Al Jazeerah Restaurant</h4>
                        <a href="img/portfolio/aljazeerah.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        <!-- pic source: https://www.instagram.com/p/ChTwdYaLhBT/?utm_source=ig_web_copy_link-->
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-transport">
                    <div class="portfolio-img"><img src="img/portfolio/andhikagroup.jpg" class="img-fluid" alt="Andhika Group"></div>
                    <div class="portfolio-info">
                        <h4>Andhika Group</h4>
                        <a href="img/portfolio/andhikagroup.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        <!-- pic src: https://www.instagram.com/p/CEvT7PqnbI0/?utm_source=ig_web_copy_link -->
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Footer ======= -->
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
							<li><i class="bx bx-chevron-right"></i> <a href="portofolio">Ritel & Manufaktur</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="portofolio">Layanan, Perhotelan & Konstruksi</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="portofolio">Teknologi</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="portofolio">Transportasi</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="portofolio">Kerja sama</a></li>
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
	</footer><!-- End Footer -->

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