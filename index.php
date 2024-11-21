<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="IT and Education Propts Expert">
    <meta name="author" content="PT.HMA">
    <link href="index_files/css.css" rel="stylesheet">

    <title>PT. Hanatekindo Mulia Abadi</title>
	
	<!-- Favicons -->
  <link href="https://hanatekindo.co.id/favicon.ico" rel="icon">
  

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="index_files/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="index_files/font-awesome.css">

    <link rel="stylesheet" href="index_files/templatemo-breezed.css">

    <link rel="stylesheet" href="index_files/owl-carousel.css">

    <link rel="stylesheet" href="index_files/lightbox.css">
    
    <script type="text/javascript" async="" charset="utf-8" src="index_files/recaptcha__en.js" crossorigin="anonymous" integrity="sha384-gaZtYaI7oJHEOo1YO6VuoCE4iZ5fMV9mYHP0BHf+r2ttABnpWWCIkgI6ItNW4ZdO"></script><script src="index_files/api.js" async="" defer="defer"></script>


    <style> .seo-highlighter { border-color: red; border-width: 5px; border-style: solid; border-radius: 18px; }</style></head>    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader" style="visibility: hidden; display: none; opacity: 0;">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky background-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="https://hanatekindo.co.id/index.php" class="logo"><img src="index_files/logo_hma.png" alt="" class="img-fluid">
                            
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <?php
                        $servername = "localhost";
                        $username = "root";
                        $password = "root";
                        $dbname = "menudb";

                        // Create connection
                        $conn = new mysqli($servername, $username, $password, $dbname);
                        // Check connection
                        if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                        }

                        $sql = "SELECT * FROM menu";
                        $result = $conn->query($sql);
                        echo '<ul class="nav">';
                        if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            // echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
                            echo '<li class="scroll-to-section"><a href="'.$row["url_menu"].'">'.$row["nama_menu"].'</a></li>';
                        }
                        } else {
                        echo "Menu Error";
                        }
                        echo '</ul>';
                        $conn->close();
                        ?> 
                                
                        <a class="menu-trigger">
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                
								
				</div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->
    
    <!-- ***** Search Area ***** -->
    <div id="search">
        <button type="button" class="close">×</button>
        <form id="contact" action="#" method="get">
            <fieldset>
                <input type="search" name="q" placeholder="Ketik lalu enter" aria-label="Mencari isi web">
            </fieldset>
            <fieldset>
                <button type="submit" class="main-button">Cari</button>
            </fieldset>
        </form>
    </div>	<img src="index_files/hal1.jpg" alt="">
      <!-- ***** About Area Starts ***** -->
  

   <!-- ***** About Area Starts ***** -->
    <section class="section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6>Tentang Kami</h6>
                            <h2>PT. Hanatekindo Mulia Abadi</h2>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="service-item">
                                    <a href="https://hanatekindo.co.id/perangkatlunak.php" class="text-button-icon">
									<img src="index_files/service-item-01.png" alt="">
                                    <h4>Perangkat Lunak</h4></a>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="service-item">
                                     <a href="https://hanatekindo.co.id/infra.php" class="text-button-icon">
									<img src="index_files/service-item-02.png" alt="">
                                    <h4>Infrastuktur IT</h4></a>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="service-item">
                                     <a href="https://hanatekindo.co.id/keamanan.php" class="text-button-icon">
									<img src="index_files/service-item-03.png" alt="">
                                    <h4>Kemanan Data</h4></a>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="service-item">
                                     <a href="https://hanatekindo.co.id/alatperaga.php" class="text-button-icon">
									<img src="index_files/service-item-04.png" alt="">
                                    <h4>Alat Peraga</h4></a>
                                </div>
                            </div>
							<div class="col-md-6 col-sm-6">
                                <div class="service-item">
                                     <a href="https://hanatekindo.co.id/furnitur.php" class="text-button-icon">
									<img src="index_files/furnitur.png" alt="">
                                    <h4>Distributor</h4></a>
                                </div>
                            </div>
							<div class="col-md-6 col-sm-6">
                                <div class="service-item">
                                	
									<a href="https://hanatekindo.co.id/kontak.php" class="text-button-icon">
                                	<img src="index_files/kontak.png" alt="">
                                <h4>Kontak<i class="fa fa-arrow-right"></i></h4>
                            </a>
									
                                </div>
                            </div>
							
                        </div>
                    </div>
                </div>
                
				<div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="right-text-content">
                        <p><a rel="nofollow noopener" href="http://hanatekindo.co.id/" target="_parent">PT. Hanatekindo Mulia Abadi</a>
 merupakan perusahaan yang bergerak di bidang solusi IT, software, 
hardware, infrastruktur, jaringan, data center, digital solution, 
keamanan data, distributor alat peraga, Lab. dan Furnitur. 
                        <br><br>Perusahaan Kami berbasis di Jakarta. 
Produk dan layanan kami dihasilkan dari inovasi yang dikembangkan secara
 terus menerus berdasarkan kebutuhan pelanggan dalam setiap bisnis 
prosesnya. 
                      <br><br>Kami memberikan solusi integrasi yang 
menyeluruh terhadap segala kebutuhan pelanggan swasta maupun pemerintah 
dengan selalu menerapkan teknologi produk terkini dengan layanan 
terbaik.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** About Area Ends ***** -->

    <!-- ***** Features Big Item Start ***** -->
    <section class="section" id="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s" data-scroll-reveal-id="1" data-scroll-reveal-initialized="true" data-scroll-reveal-complete="true">
                    <div class="features-item">
                        <div class="features-icon">
                            <img src="index_files/features-icon-1.png" alt="">
                        </div>
                        <div class="features-content">
                            <h4>Web &amp; Mobile-Base Aplication</h4>
                            <p>Kami telah berpengalaman dalam membangun 
aplikasi berbasis web dan mobile untuk organisasi publik dan swasta. 
Kami menggunakan teknologi terbaru dalam memberikan solusi terbaik untuk
 Anda.</p>
                            <a href="https://hanatekindo.co.id/perangkatlunak.php" class="text-button-icon">
                                Detail <i class="fa fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12" data-scroll-reveal="enter bottom move 30px over 0.6s after 0.4s" data-scroll-reveal-id="2" data-scroll-reveal-initialized="true" data-scroll-reveal-complete="true">
                    <div class="features-item">
                        <div class="features-icon">
                            <img src="index_files/features-icon-1.png" alt="">
                        </div>
                        <div class="features-content">
                            <h4>Sistem Integrasi </h4>
                            <p>Kami siap membangun dan mengintegrasikan 
sistem IT Anda, dari perangkat lunak, keras, keamanan dan jaringan Anda 
sendiri dengan metode dan sistem ter-<i>Update</i> untuk menjadikan sistem Anda lebih efektif dan efisien.</p>
                            <a href="https://hanatekindo.co.id/kontak.php" class="text-button-icon">
                                Kontak Kami <i class="fa fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s" data-scroll-reveal-id="3" data-scroll-reveal-initialized="true" data-scroll-reveal-complete="true">
                    <div class="features-item">
                        <div class="features-icon">
                            <img src="index_files/features-icon-1.png" alt="">
                        </div>
                        <div class="features-content">
                            <h4>Alat Peraga</h4>
                            <p>Kami memiliki SDM yang telah lama 
berkecimpung dibidang alat peraga pendidikan dengan pengalaman 
dibidangnya dan menjadi distributor pabrikan alat peraga pendidikan 
terkemuka di Indonesia. </p>
                            <a href="https://hanatekindo.co.id/alatperaga.php" class="text-button-icon">
                                Detail <i class="fa fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Big Item End ***** -->

   

    
    <!-- ***** Footer Start ***** -->
     <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-xs-12">
                    <div class="left-text-content">
                        <p>Copyright © 2021 PT. Hanatekindo Mulia Abadi. 
                         All rights reserved</p>
                    </div>
                </div>
                <div class="col-lg-6 col-xs-12">
                    <div class="right-text-content">
					<a href="https://hanatekindo.co.id/index.php" style="color:white;font-size: 14px;" onmouseover="this.style.color='gray';" onmouseout="this.style.color='white';">Beranda |</a>
					<a href="https://hanatekindo.co.id/tentangkami.php" style="color:white;font-size: 14px;" onmouseover="this.style.color='gray';" onmouseout="this.style.color='white';">Tentang Kami |</a>
					<a href="https://hanatekindo.co.id/kontak.php" style="color:white;font-size: 14px;" onmouseover="this.style.color='gray';" onmouseout="this.style.color='white';">Kontak</a>
					
                    </div>
                </div>
            </div>
        </div>
    </footer>
    

    <!-- jQuery -->
    <script src="index_files/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="index_files/popper.js"></script>
    <script src="index_files/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="index_files/owl-carousel.js"></script>
    <script src="index_files/scrollreveal.min.js"></script>
    <script src="index_files/waypoints.min.js"></script>
    <script src="index_files/jquery.counterup.min.js"></script>
    <script src="index_files/imgfix.min.js"></script> 
    <script src="index_files/slick.js"></script> 
    <script src="index_files/lightbox.js"></script> 
    <script src="index_files/isotope.js"></script> 
    
    <!-- Global Init -->
    <script src="index_files/custom.js"></script>

    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>
  
<div id="lightboxOverlay" class="lightboxOverlay" style="display: none;"></div><div id="lightbox" class="lightbox" style="display: none;"><div class="lb-outerContainer"><div class="lb-container"><img class="lb-image" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="><div class="lb-nav"><a class="lb-prev" href=""></a><a class="lb-next" href=""></a></div><div class="lb-loader"><a class="lb-cancel"></a></div></div></div><div class="lb-dataContainer"><div class="lb-data"><div class="lb-details"><span class="lb-caption"></span><span class="lb-number"></span></div><div class="lb-closeContainer"><a class="lb-close"></a></div></div></div></div></body></html>