<?php
ob_start();
require_once "genelayar/ayarlar.php";
require_once "genelayar/functions.php";

if(isset($_REQUEST['sayfalama'])){
    $gelensayfalama  = $_REQUEST['sayfalama'];
}
else
{
    $gelensayfalama = 1;
}

$sayfalamaicinsolsagbuton =  3;
$sayfabasinakayit         =  4;
$toplamkayit              =  $sorgu = $baglan ->prepare("select * from blog");
$toplamkayit ->execute();
$toplamkayitlar           =  $toplamkayit ->rowCount();
$sayfalanacakkayitsayisi  =  ($gelensayfalama*$sayfabasinakayit)-$sayfabasinakayit;
$bulunansayfasayisi       =  ceil($toplamkayitlar/$sayfabasinakayit);
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <title><?php echo DonusumGeriDondur($ayarCek['siteAdi']);?> - Blog</title>
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
        <div class="row">
            <!-- A news -->
            <?php
            $sorgu = $baglan ->prepare("select * from blog order by id desc LIMIT  $sayfalanacakkayitsayisi, $sayfabasinakayit");
            $sorgu ->execute();
            $kayitlar = $sorgu->rowCount();
            $kayit    = $sorgu->fetchAll(PDO::FETCH_ASSOC);

            foreach($kayit as $gelen2) {
                ?>
                <div class="col-lg-10 offset-lg-1 bottom_90 news-box list">
                    <div class="image">
                        <img src="img/<?php echo $gelen2['resim'];?>" alt="">
                    </div>
                    <br>
                    <span class="news-info"><b><i class="fas fa-table"></i> &nbsp;<?php echo $gelen2['tarih']; ?> &nbsp;  &nbsp; <i class="fas fa-eye"></i>&nbsp;<?php echo $gelen2['gosterim']; ?>   &nbsp;  &nbsp; <i class="fas fa-clock"></i> &nbsp;<?= okuma_suresi($gelen2['icerik']); ?></b></span>
                    <h2 class="title"><?php echo $gelen2['baslik'];?></h2>
                    <p><?php  $icerik = strip_tags($gelen2['icerik']);
                    if( preg_match('/(.*?)\s/i', substr( $icerik, 580), $dizi) )
                        echo $icerik = substr($icerik, 0, 580+strlen($dizi[0]))."...";
                    ?>
                    </p>
                    <br>
                    <a href="single-news.php?id=<?php echo $gelen2['id'];?>" class="site-btn float-left top_30">Devamını Oku</a>
                </div>
                <?php
            }
            ?>
        </div>
        <br>
        <div class="sayfalandirma" align="center">
            <?php
            if($gelensayfalama>1){
                echo "<span class='pasif'><a href='news.php?sayfalama=1'><i class=\"fas fa-angle-double-left\"></i></a></span>";
                $sayfalamaicindegreigerial = $gelensayfalama-1;
                echo " <span class='pasif'><a href='news.php?sayfalama=".$sayfalamaicindegreigerial."'><i class=\"fas fa-angle-left\">&nbsp;</i></a></span>";
            }
            for($sayfalamaicinindexdeger=$gelensayfalama-$sayfalamaicinsolsagbuton; $sayfalamaicinindexdeger<=$gelensayfalama+$sayfalamaicinsolsagbuton;$sayfalamaicinindexdeger++){
                if(($sayfalamaicinindexdeger>0) and ($sayfalamaicinindexdeger<=$bulunansayfasayisi)){

                    if($gelensayfalama==$sayfalamaicinindexdeger){
                        echo " <span class='aktif'> " . $sayfalamaicinindexdeger." </span> ";
                    }
                    else
                    {
                        echo "&nbsp;<span class='pasif'><a href='news.php?sayfalama=" .$sayfalamaicinindexdeger."'>" .$sayfalamaicinindexdeger."</a>&nbsp;</span>";
                    }
                }
            }

            if($gelensayfalama!=$bulunansayfasayisi){

                $sayfalamaicindegreiilerial = $gelensayfalama+1;
                echo "&nbsp;<span class='pasif' id='spna'><a href='news.php?sayfalama=". $sayfalamaicindegreiilerial."'><i class=\"fas fa-angle-right\"></i></a></span>";
                echo "&nbsp; <span class='pasif' id='spna'><a href='news.php?sayfalama=". $bulunansayfasayisi."'><i class=\"fas fa-angle-double-right\"></i></a></span>";
            }

            ?>
        </div>
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
<?php ob_flush()?>
