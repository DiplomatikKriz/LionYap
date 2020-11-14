<?php
ob_start();
require_once "genelayar/ayarlar.php";
require_once "genelayar/functions.php";
?>
<!DOCTYPE html>
<html lang="tr">
<head>  
<title><?php echo DonusumGeriDondur($ayarCek['siteAdi']);?></title>
<meta charset="UTF-8">
<meta name="description" content="<?php echo DonusumGeriDondur($ayarCek['siteDescrition']);?>">
<meta name="keywords" content="<?php echo DonusumGeriDondur($ayarCek['siteKeywords']);?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  
    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/style.css"/>

  	<!--[if lt IE 9]>
  	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  	<![endif]--> 
    
    <!-- FAVICON  -->
    <link rel="shortcut icon" href="img/favico.png">    

	   <!-- Font icons --> 
    <link rel="stylesheet" href="icon-fonts/fontawesome-5.0.6/css/fontawesome-all.min.css"/>
    <link rel="stylesheet" href="icon-fonts/essential-regular-fonts/essential-icons.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

	   <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
</head> 
<body data-sound="audio/" data-top="900"> 

<!-- PRELOADER -->
<div id="preloader">
  <div class="loading-area">
    <div class="logo"><img src="img/your-logo.png" alt=""> Yapı</div>
    <span>loading...</span>
  </div>
  <div class="left-side"></div>
  <div class="right-side"></div>
</div>

<!-- HEADER 
================================================== --> 
<header>
  <a href="index.php"><img src="img/your-logo.png" alt=""></a>
  <div class="nav-icon">
      <span></span>
      <span></span>
      <span></span>
  </div> 
  <nav>
    <ul>
      <li><a href="#hero">Ev</a></li>
      <li><a href="#about">Hakkımızda</a></li>
      <li><a href="#job">İş</a></li>
      <li><a href="#portfolio">Galeri</a></li>
      <li><a href="#blog">Blog</a></li>
      <li><a href="#contact">İletişim</a></li>
    </ul>
  </nav>
</header>


<!-- FIXED HEADER 
================================================== --> 
<header class="fixing">
  <a href="index.php"><img src="img/your2.png" alt=""></a>
  <div class="nav-icon">
      <span></span>
      <span></span>
      <span></span>
  </div> 
  <nav>
    <ul>
      <li><a href="#hero">Ev</a></li>
      <li><a href="#about">Hakkımızda</a></li>
      <li><a href="#job">İş</a></li>
      <li><a href="#portfolio">Galeri</a></li>
      <li><a href="#blog">Blog</a></li>
      <li><a href="#contact">İletişim</a></li>
    </ul>
  </nav>
</header>


<!-- HOME 
================================================== -->  
<section id="hero" class="hero" style="background-image: url(img/Singapore_Skyline_2018.jpg)">
  <div class="outter">
    <div class="inner">
      <div class="content">
        <h1 class="title">Gerisini <span class="element" data-text1="Gölgede" data-text2="Bırakır"  data-loop="true" data-backdelay="3000"></span></h1>
        <div class="social">
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a>
            <a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a>
            <a href="#"><i class="fab fa-medium-m" aria-hidden="true"></i></a>

        </div>
        <a href="#about" class="down-icon">
        <svg class="arrow bounce" enable-background="new 0 0 96 96" height="96px" id="arrow_down" version="1.1" viewBox="0 0 96 96" width="96px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M44,12v62.344L22.543,52.888c-1.561-1.562-4.094-1.562-5.656-0.001c-1.562,1.562-1.562,4.096,0,5.658l28.284,28.283l0,0  c0.186,0.186,0.391,0.352,0.609,0.498c0.101,0.067,0.21,0.114,0.315,0.172c0.124,0.066,0.242,0.142,0.373,0.195  c0.135,0.057,0.275,0.089,0.415,0.129c0.111,0.033,0.216,0.076,0.331,0.099C47.474,87.973,47.737,88,48,88l0,0  c0.003,0,0.006-0.001,0.009-0.001c0.259-0.001,0.519-0.027,0.774-0.078c0.12-0.024,0.231-0.069,0.348-0.104  c0.133-0.039,0.268-0.069,0.397-0.123c0.139-0.058,0.265-0.136,0.396-0.208c0.098-0.054,0.198-0.097,0.292-0.159  c0.221-0.146,0.427-0.314,0.614-0.501l28.281-28.282c1.562-1.562,1.562-4.095,0.001-5.657c-1.562-1.562-4.095-1.562-5.657,0  L52,74.343V12c0-2.209-1.791-4-4-4S44,9.791,44,12z"/></svg>
      </a>
      </div>
    </div>
  </div>
    <!-- diagonal svg -->
    <div class="diagonals">
      <svg class="diagonal-left" viewBox="0 0 100 102" preserveAspectRatio="none">
          <path d="M0 100 L100 100 L0 10 Z"></path>
      </svg>
      <svg class="diagonal-right" viewBox="0 0 100 102" preserveAspectRatio="none">
          <path d="M0 100 L100 100 L100 10 Z"></path>
      </svg>
    </div>
</section>


<!-- ABOUT 
================================================== --> 
<section id="about" class="about primary-bg align-left">
  <div class="section-inner">
  <div class="container">
    <h2 class="section-title bottom_45">Hakkımızda</h2>
    <p>Lion Yapı Bursa'da 10 yıldan fazla bir süredir faaliyet gösteren bir inşaat firmasıdır. Profesyonel ekipler halinde iç ve dışta hızlı, kaliteli ve temiz hizmet veriyor.</p>
    <!-- Latest Tweets -->
    <div class="row twitter">
      <a href="https://twitter.com/envato" target="_blank" class="link col-lg-1">
        <i class="fab fa-twitter"></i>
      </a>
        <a href="https://twitter.com/envato" target="_blank" class="link col-lg-1">
            <i class="fab fa-facebook"></i>
        </a>

        <a href="https://twitter.com/envato" target="_blank" class="link col-lg-1">
            <i class="fab fa-instagram"></i>
        </a>

    </div>

    <!-- Services -->
    <div class="col-lg-12 text-left bottom_90">
        <div class="owl-carousel owl-theme services" data-autoplay="true" data-items-desktop="3" data-items-desktop-small="2" data-items-tablet="2" data-items-tablet-small="1">
          <!-- a service -->
            <div class="item">
              <div class="left">
                <i  class="fas fa-building"></i>
              </div>
              <div class="right">
                <h3 class="title">Alçı</h3>
                <p>Cloud agency follows the latest design standards to deliver a beautiful and functional digital product.</p>
              </div>
            </div>
          <!-- a service -->
            <div class="item">
              <div class="left">
                  <i class="fas fa-paint-roller"></i>
              </div>
              <div class="right">
                <h3 class="title">Saten / Boya</h3>
                <p>We will make you a brand that is catchy and leaves a trace. Your target group will never forget you.</p>
              </div>
            </div>
          <!-- a service -->
            <div class="item">
              <div class="left">
                <i class="fas fa-building"></i>
              </div>
              <div class="right">
                <h3 class="title">Dış Cephe</h3>
                <p>I ought to just try that with my boss; I'd get kicked out on the spot. But who knows, maybe that would be the best thing for me.</p>
              </div>
            </div>
          <!-- a service -->
            <div class="item">
              <div class="left">
                <i class="fas fa-handshake"></i>
              </div>
              <div class="right">
                <h3 class="title">Teslim</h3>
                <p>I ought to just try that with my boss; I'd get kicked out on the spot. But who knows, maybe that would be the best thing for me.</p>
              </div>
            </div>

          </div>
      </div> <!-- Testimonial end -->
    </div> <!-- container end -->
  </div>
    <!-- diagonal svg -->
    <div class="diagonals">
      <svg class="diagonal-left" viewBox="0 0 100 102" preserveAspectRatio="none">
          <path d="M0 100 L100 100 L0 10 Z"></path>
      </svg>
      <svg class="diagonal-right" viewBox="0 0 100 102" preserveAspectRatio="none">
          <path d="M0 100 L100 100 L100 10 Z"></path>
      </svg>
    </div>
</section>


<!-- NEWS
================================================== -->
<section id="job" class="news primary-bg align-left">
    <div class="section-inner">
        <div class="container">
            <h2 class="section-title bottom_45">İş</h2>
            <div class="row">
                <!-- A news -->
                <?php
                $sorgu = $baglan ->prepare("select * from icerik order by id desc LIMIT 3");
                $sorgu ->execute();
                $kayitlar = $sorgu->rowCount();
                $kayit    = $sorgu->fetchAll(PDO::FETCH_ASSOC);

                foreach($kayit as $gelen2) {
                    ?>
                    <a href="single-1.php?id=<?php echo $gelen2['id'];?>" class="col-lg-4 news-box">
                        <div class="image2">
                            <img src="img/<?php echo $gelen2['resim'];?>" alt=""/>
                        </div>
                        <span class="news-info"><b><i class="fas fa-calendar"></i> &nbsp;<?php echo $gelen2['tarih']; ?> &nbsp;  &nbsp; <i class="fas fa-eye"></i>&nbsp;<?php echo $gelen2['gosterim']; ?>   &nbsp;  &nbsp; <i class="fas fa-clock"></i>&nbsp;<?= okuma_suresi($gelen2['icerik']); ?></b></span>
                        <h2 class="title"><?php echo $gelen2['baslik'];?></h2>
                    </a>
                    <?php
                }
                ?>
            </div><!-- row end -->
            <a href="job.php" class="site-btn float-left top_60">Daha Fazla İçerik </a>
        </div>
    </div>
    <!-- diagonal svg -->
    <div class="diagonals">
        <svg class="diagonal-left" viewBox="0 0 100 102" preserveAspectRatio="none">
            <path d="M0 100 L100 100 L0 10 Z"></path>
        </svg>
        <svg class="diagonal-right" viewBox="0 0 100 102" preserveAspectRatio="none">
            <path d="M0 100 L100 100 L100 10 Z"></path>
        </svg>
    </div>
</section>


<!-- PORTFOLIO 
================================================== --> 
<section id="portfolio" class="portfolio gray-bg align-right">
    <div class="section-inner">
      <div class="container">
        <h2 class="section-title bottom_45">Galeri</h2>

        <!-- Portfolio -->
        <div class="row masonry clearfix">
            <!-- a work -->
            <?php
            $sorgu = $baglan ->prepare("select * from icerik order by id desc LIMIT 3");
            $sorgu ->execute();
            $kayitlar = $sorgu->rowCount();
            $kayit    = $sorgu->fetchAll(PDO::FETCH_ASSOC);

            foreach($kayit as $gelen2) {
                ?>
                <a href="img/<?php echo $gelen2['resim'];?>" class="col-lg-4 col-sm-6 grid-item branding lightbox-icon">
                    <figure class="portfolio-item">
                        <img src="img/<?php echo $gelen2['resim'];?>" alt=""/>
                        <figcaption>
                            <h3 class="title"><?php echo $gelen2['baslik'];?></h3>
                            <span>Galeri </span>
                        </figcaption>
                    </figure>
                </a>
                <?php
            }
            ?>
            <!-- a work -->
        </div> <!-- row masonry end -->

        <div class="text-right float-left load-more" data-wow-delay="0.2s">
          <button class="site-btn" data-tilt=""> Daha Fazla Foto
            <i class="icon ion-md-arrow-down"></i>
          </button>
          <ul id="pagination-selector" class="portfolio-pagination list-inline d-none">
            <li class="list-inline-item">1</li>
            <li class="list-inline-item"><a href="page-2.php">2</a></li>
          </ul>
        </div>

      </div> <!-- container end -->
    </div>
    <!-- diagonal svg -->
    <div class="diagonals">
      <svg class="diagonal-left" viewBox="0 0 100 102" preserveAspectRatio="none">
          <path d="M0 100 L100 100 L0 10 Z"></path>
      </svg>
      <svg class="diagonal-right" viewBox="0 0 100 102" preserveAspectRatio="none">
          <path d="M0 100 L100 100 L100 10 Z"></path>
      </svg>
    </div>
</section>


<!-- Blog
================================================== --> 
<section id="blog" class="news primary-bg align-left">
    <div class="section-inner">
      <div class="container">
        <h2 class="section-title bottom_45">Blog</h2>
        <div class="row">
            <?php
            $sorgu = $baglan ->prepare("select * from blog order by id desc LIMIT 3");
            $sorgu ->execute();
            $kayitlar = $sorgu->rowCount();
            $kayit    = $sorgu->fetchAll(PDO::FETCH_ASSOC);

            foreach($kayit as $gelen) {
                ?>
                <!-- A news -->
                <a href="single-news.php?id=<?php echo $gelen['id']; ?>" class="col-lg-4 news-box">
                    <div class="image2">
                        <img src="img/<?php echo $gelen['resim']; ?>" alt=""/>
                    </div>
                    <span class="news-info"><b><i class="fas fa-table"></i> &nbsp;<?php echo $gelen['tarih']; ?> &nbsp;  &nbsp; <i class="fas fa-eye"></i>&nbsp;<?php echo $gelen['gosterim']; ?>   &nbsp;  &nbsp; <i class="fas fa-clock"></i>&nbsp;<?= okuma_suresi($gelen['icerik']); ?></b></span>
                    <h2 class="title"><?php echo $gelen['baslik']; ?></h2>
                </a>
                <?php
            }
            ?>
        </div><!-- row end -->
          <a href="news.php" class="site-btn float-left top_60">Daha Fazla İçerik </a>
      </div>
    </div>
    <!-- diagonal svg -->
    <div class="diagonals">
      <svg class="diagonal-left" viewBox="0 0 100 102" preserveAspectRatio="none">
          <path d="M0 100 L100 100 L0 10 Z"></path>
      </svg>
      <svg class="diagonal-right" viewBox="0 0 100 102" preserveAspectRatio="none">
          <path d="M0 100 L100 100 L100 10 Z"></path>
      </svg>
    </div>
</section>


<!-- CONTACT  
================================================== --> 
<section id="contact" class="contact gray-bg align-right">
  <div class="section-inner">
    <div class="container">
          <h2 class="section-title bottom_45">İletişim</h2>
          <div class="row">
              <!-- contact form -->
              <div class="col-lg-8 text-left">
                <h3 class="secondry-title">Bize Yazın !</h3><br>

                  <form class="needs-validation" novalidate method="post">
                      <div class="form-row">
                          <div class="col-md-6 mb-3">
                              <label for="validationCustom01">İsim</label>
                              <input type="text" class="form-control" id="validationCustom01" name="name" required>
                              <div class="valid-feedback">
                                  Güzel!
                              </div>
                          </div>
                          <div class="col-md-6 mb-3">
                              <label for="validationCustom02">E-mail</label>
                              <input type="email" class="form-control" id="validationCustom02" name="email" required>
                              <div class="valid-feedback">
                                  Güzel!
                              </div>
                          </div>
                      </div>
                      <div class="form-row">
                          <div class="col-md-6 mb-3">
                              <label for="validationCustom03">Mesaj</label>
                              <textarea class="form-control" id="exampleFormControlTextarea1" name="message" rows="3"></textarea>
                              <div class="invalid-feedback">
                                  Güzel.
                              </div>
                          </div>
                      </div>
                      <br>
                      <button class="btn btn-dark" type="submit" name="get">Mesajı Gönder</button>
                  </form>

                  <script>
                      // Example starter JavaScript for disabling form submissions if there are invalid fields
                      (function() {
                          'use strict';
                          window.addEventListener('load', function() {
                              // Fetch all the forms we want to apply custom Bootstrap validation styles to
                              var forms = document.getElementsByClassName('needs-validation');
                              // Loop over them and prevent submission
                              var validation = Array.prototype.filter.call(forms, function(form) {
                                  form.addEventListener('submit', function(event) {
                                      if (form.checkValidity() === false) {
                                          event.preventDefault();
                                          event.stopPropagation();
                                      }
                                      form.classList.add('was-validated');
                                  }, false);
                              });
                          }, false);
                      })();
                  </script>
                  <?php
                  if(isset($_POST['get'])){
                      $name = $_POST['name'];
                      $email = $_POST['email'];
                      $message = $_POST['message'];

                      $ekle = $baglan ->prepare("insert into bildir (name,email,message) values (?,?,?)");
                      $ekle ->execute([$name, $email, $message]);
                      if($ekle){
                          header("refresh:0;url=index.php#contact");
                      }
                      else
                      {
                          echo "";
                      }
                  }
                  else
                  {
                      echo "";
                  }
                  ?>
              </div>
              <!-- contact info -->
              <div class="col-lg-3 offset-lg-1 contact-info">
                <p>1444 S. Alameda Street Los Angeles, 
                California 90021</p>
                <p>hayaletuzayl@gmail.com<br>
                  544655 21 65</p>
                <div class="social">
                    <a href="#"><i class="fab fa-facebook"></i>  </a>
                    <a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                    <a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                    <a href="#"><i class="fab fa-medium-m" aria-hidden="true"></i></a>
                </div>
              </div>
              <!-- Contact Map
              <div class="contact-map top_90">
                  <iframe src="https://www.google.com/maps/embed?dir//Bursa,+Nilüfer%2FBursa/@40.2150476,28.9886414,17z/data=!4m8!4m7!1m0!1m5!1m1!1s0x14ca142e5e3f9379:0x1eacee7ef6d07a14!2m2!1d28.9901589!2d40.2157814" height="450" style="border:0" allowfullscreen=""></iframe>
              </div>-->
          </div><!-- row end -->
    </div><!-- container end -->
  </div> <!-- section inner end -->
</section>


<!-- FOOTER 
================================================== --> 
<footer>
  <div class="container">
    <div class="row">
      <!-- Copyright -->
      <div class="col-lg-4 copyright">
        <a href="index.php"><img src="img/your-logo.png" alt=""></a>
        <p><?php echo DonusumGeriDondur($ayarCek['siteCopyright']);?></p>
      </div>
      <!-- Social -->
      <div class="col-lg-4 ftr-social">
        <div class="social">
            <a href="#"><i class="fab fa-facebook"></i>  </a>
            <a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a>
            <a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a>
            <a href="#"><i class="fab fa-medium-m" aria-hidden="true"></i></a>
        </div>
      </div>
      <!-- Get In Touch -->
      <div class="col-lg-4 getintouch">
        <h3 class="title">İletişime Geç</h3>
        <p>hayaletuzayl@gmail.com</p>
      </div>
    </div>
  </div>
</footer>


<!-- Javascripts -->
<script src="js/jquery-2.1.4.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>
    

</body>
</html>
<?php ob_flush()?>