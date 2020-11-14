<?php
ob_start();
require_once "genelayar/ayarlar.php";
require_once "genelayar/functions.php";

if(isset($_GET['id'])){
    $İdAl = $_GET['id'];
}
else
{
    echo "id Alınamıyor";
}
$guncelle = $baglan->prepare("update blog set gosterim = gosterim+1 where id=?");
$guncelle ->execute([$İdAl]);

$sorgu = $baglan ->prepare("select * from blog where id=?");
$sorgu ->execute([$İdAl]);
$kayitlar = $sorgu ->rowCount();
$kayit    = $sorgu ->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="tr">
<head>  
<title>Blog - <?php echo DonusumGeriDondur($kayit['baslik']);?></title>
<meta charset="UTF-8">
<meta name="description" content="<?php echo DonusumGeriDondur($ayarCek['siteDescription']);?>">
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
<header class="subpage">
  <a href="index.php"><img src="img/your2.png" alt=""></a>
  <div class="nav-icon">
      <span></span>
      <span></span>
      <span></span>
  </div> 
  <nav>
    <ul>
        <li><a href="index.php#hero">Ev</a></li>
        <li><a href="index.php#about">Hakkımızda</a></li>
        <li><a href="job.php">İş</a></li>
        <li><a href="index.php#portfolio">Galeri</a></li>
        <li><a href="news.php">Blog</a></li>
        <li><a href="index.php#contact">İletişim</a></li>
    </ul>
  </nav>
</header>


<!-- HOME 
================================================== -->  
<section class="subpage">
  <div class="container">
        <!-- A news -->
      <div class="col-lg-10 offset-lg-1 bottom_90 news-box list">
          <div class="image">
            <img src="img/<?php echo $kayit['resim'];?>" alt="">
          </div>
          <span class="news-info"><b><i class="fas fa-table"></i> &nbsp;<?php echo $kayit['tarih']; ?> &nbsp;  &nbsp; <i class="fas fa-eye"></i>&nbsp;<?php echo $kayit['gosterim']; ?>   &nbsp;  &nbsp; <i class="fas fa-clock"></i> &nbsp;<?= okuma_suresi($kayit['icerik']); ?></b></span>
          <h2 class="title"><?php echo $kayit['baslik'];?></h2>
          <p><?php echo $kayit['icerik'];?></p>
            <!-- FORM -->
            <div class="form top_120">
          </div>
    </div>
  </div> <!-- container end -->

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
            <a href="#"><i class="fab fa-twitter" aria-hidden="true"></i>  </a>
            <a href="#"><i class="fab fa-instagram" aria-hidden="true"></i>  </a>
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