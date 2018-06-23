<!DOCTYPE html>
<html lang="en">
<head>
<title>Laporkan Kehilangan Barang</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="OneTech shop project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="plugins/slick-1.8.0/slick.css">
<link rel="stylesheet" type="text/css" href="styles/register_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">

</head>

<body>

<div class="super_container">
	
	<!-- Header -->
	
	<header class="header">

		<!-- Top Bar -->

		<div class="top_bar">
			<div class="container">
				<div class="row">
					<div class="col d-flex flex-row">
						<div class="top_bar_contact_item"><div class="logo"><a href="index.php">Lost & Found IPB</a></div></div>
						<div class="top_bar_search">
							<div class="top_bar_search_form_container">
								<form action="#" class="top_bar_search_form clearfix">
									<input type="search" required="required" class="top_bar_search_input" placeholder="Cari Lost & Found IPB...">
									<button type="submit" class="top_bar_search_button trans_300" value="Submit"><img src="images/search.png" alt=""></button>
								</form>
							</div>
						</div>
						<div class="top_bar_content ml-auto">
							<div class="top_bar_user">
								<div class="user_icon"></div>
								<div><a href="signin.html">Sign in</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>		
		</div>

		<!-- Header Main -->
	<br>
	<!-- Adverts -->
	<div class="register_form_container">
	<p><h2><b>Laporkan kehilangan barang</b></h2></p>
		<div class="registerform">
			<form action="/action_page.php">
			  <div class="form-group">
			    <label for="name">Nama Barang:</label>
			    <input type="text" class="form-control" id="name" placeholder="Contoh : Samsung Galaxy A6">
			  </div>
			  <div class="form-group">
			    <label for="itemtype">Jenis Barang: (pilih salah satu)</label>
			    <select class="form-control" id="itemtype">
					<option>Gadget</option>
					<option>Dompet</option>
					<option>Alat Tulis</option>
					<option>Jam Tangan</option>
				</select>   
			  </div>
			  <div class="form-group">
			    <label for="desc">Deskripsi Barang:</label>
			    <textarea class="form-control" rows="5" id="desc"></textarea>
			  </div>
			  <div class="form-group">
				<label for="date">Tanggal Penemuan Barang:</label>
				<input type="date" id="date" max="3000-12-31" min="1000-01-01" class="form-control">
			  </div>
			  <div class="form-group">
			    <label for="foundplace">Tempat Penemuan Barang: (pilih salah satu)</label>
			    <select class="form-control" id="foundplace">
					<option>Pojok MIPA</option>
					<option>Graha Widya Wisuda</option>
					<option>Masjid Al-Hurriyah</option>
					<option>Perpustakaan LSI</option>
				</select>   
			  </div>
			  <div class="form-group">
			  	<label for="file"> Upload Gambar Barang: </label>
			  	<br />
				<input type="file" name="gambar" id="gambar" />
			  </div>

			  <?php 
				if(isset($_POST['upload'])) {
				    date_default_timezone_set('Asia/Jakarta');
				    $name        = $_POST['gambar'];
				    $time        = time();
				    $nama_gambar = $_FILES['gambar'] ['name']; // Nama Gambar
				    $size        = $_FILES['gambar'] ['size'];// Size Gambar
				    $error       = $_FILES['gambar'] ['error'];
				    $tipe_video  = $_FILES['gambar'] ['type']; //tipe gambar untuk filter
				    $folder      = "uploads/"; //folder tujuan upload
				    $valid       = array('jpg','png','gif','jpeg'); //Format File yang di ijinkan Masuk ke server
				    
				    if(strlen($nama_gambar))

				       {   

				         // Perintah untuk mengecek format gambar

				         list($txt, $ext) = explode(".", $nama_gambar);

				         if(in_array($ext,$valid))

				         {   

				           // Perintah untuk mengecek size file gambar

				           if($size<500000)

				           {   

				             // Perintah untuk mengupload gambar dan memberi nama baru

				             $gambarnya = time().substr(str_replace(" ", "_", $txt), 5).".".$ext;
				             $gmbr  = $folder.$gambarnya;
				             
				             $tmp = $_FILES['gambar']['tmp_name'];

				             if(move_uploaded_file($tmp, $folder.$gambarnya))

				             {   
				              $mysqli->query("INSERT INTO gallery_gambar(Nama_Gambar`, `DESC_GAMBAR`, `gambar`) VALUES ('$name', '$desc', '$gmbr') ");
				              echo '<script>
				                  alert("gambar Berhasil di upload");
				               </script>';

				             }
				                else{ // Jika Gambar Gagal Di upload 
				            echo '<script>
				                  alert("gambar Gagal di upload");
				               </script>';
				            }
				            
				           }
				           else{ // Jika Gambar melebihi size 
				           echo '<script>
				                  alert("gambar Terlalu Besar, Max 5MB");
				               </script>';  
				             }         

				         }

				         else{ // Jika File Gambar Yang di Upload tidak sesuai eksistensi yang sudah di tetapkan
				            echo '<script>
				                  alert("Format Gambar Tidak valid , Format Gambar Harus (JPG, Jpeg, gif, png) ");
				               </script>';  
				             }

				       }         

				       else{ // Jika Gambar belum di pilih 
				        echo '<script>
				                  alert("Gambar Belum Di Pilih , Harap Memilih Gambar Dahulu");
				               </script>'; 
				          }       

				       exit;

				     }
			  ?>
			  <button type="submit" class="btn btn-primary">Submit Laporan Kehilangan</button>
			</form>
		</div>
	<br />
	</div>
	<!-- Footer -->
	<footer class="footer">
		<div class="container">
			<div class="row">

				<div class="col-lg-4 footer_col">
					<div class="footer_column footer_contact">
						<div class="logo_container">
							<div class="logo"><a href="#">Lost & Found IPB</a></div>
						</div>
						<div class="footer_title">Developed by IPB Computer Science undergraduate students</div>
					</div>
				</div>

				<div class="col-lg-2 offset-lg-2">
					<div class="footer_column">
						<div class="footer_title">Jenis Barang</div>
						<ul class="footer_list">
							<li><a href="gadget.php">Gadget</a></li>
							<li><a href="dompet.php">Dompet</a></li>
							<li><a href="alat tulis.php">Alat Tulis</a></li>
							<li><a href="jam tangan.php">Jam Tangan</a></li>
						</ul>
					</div>
				</div>

				<div class="col-lg-2">
					<div class="footer_column">
						<div class="footer_title">Jenis Tempat</div>
						<ul class="footer_list">
							<li><a href="pomi.php">Pojok MIPA</a></li>
							<li><a href="gww.php">Graha Widya Wisuda</a></li>
							<li><a href="alhur.php">Masjid Al-Hurriyyah</a></li>
							<li><a href="lsi.php">Perpustakaan LSI</a></li>
						</ul>
					</div>
				</div>

				<div class="col-lg-2">
					<div class="footer_column">
						<div class="footer_title">Layanan Pengguna</div>
						<ul class="footer_list">
							<li><a href="akun.php">Akun Saya</a></li>
							<li><a href="faq.php">FAQ</a></li>
							<li><a href="dukungan.php">Dukungan Barang</a></li>
						</ul>
					</div>
				</div>

			</div>
		</div>
	</footer>

	<!-- Copyright -->

	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col">
					
					<div class="copyright_container d-flex flex-sm-row flex-column align-items-center justify-content-start">
						<div class="copyright_content"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/slick-1.8.0/slick.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/custom.js"></script>
</body>

</html>