<?php
ob_start();
require_once "db.php";
if(isset($_GET['id'])){
    $idAl = $_GET['id'];
}else
{
    echo "id gelmiyor";
}

?>

<?php
ob_start();
require_once "db.php";
require_once "head.php";
?>
<script src="ckeditor/ckeditor.js"></script>
        <?php

        $sorgu    = $baglan->prepare('SELECT * FROM icerik where id=?');
        $sorgu    -> execute([$idAl]);
        $kayitlar = $sorgu->rowCount();
        $kayit    = $sorgu->fetch(PDO::FETCH_ASSOC);
        if($kayitlar > 0){?>
            <h3 align="center" style="margin-top: 20px">İçerik Düzenle</h3>
            <form action="" class="form-group" method="post" enctype="multipart/form-data">
                <input type="file" name="resim" class="form-control"><img src="../img/<?php echo $kayit['resim'];?>" style="width: 100%; height: 300px; object-fit: cover; margin: 20px 0px 20px 0px;" alt=""><br>

                <input type="text" class="form-control" name="baslik" placeholder="Başlık" value="<?php echo $kayit['baslik'];?>"><br>

                <textarea type="text" class="ckeditor" name="icerik"><?php echo $kayit['icerik'];?><img src="../img/<?php echo $kayit['resim'];?>" style="width: 100%; height: 300px; object-fit: cover" alt=""></textarea><br>

                <script>
                    CKEDITOR.replace('editor');
                </script>
                <input type="submit" class="btn btn-primary buton" value="İçerik Ekle" name="SendMovie">
            </form>
            <?php
        }
        ?>

        <?php
        if(isset($_POST['SendMovie'])) {
            $yukle = "C:\stinson\img/";
            $tmp_name = $_FILES['resim']['tmp_name'];
            $name = $_FILES['resim']['name'];
            $boyut = $_FILES['resim']['size'];
            $type = $_FILES['resim']['type'];
            $uzanti = substr($name, -4, 4);
            $rastgeleSayi1 = rand(10000, 50000);
            $rastgeleSayi2 = rand(10000, 50000);
            $resimAd = $rastgeleSayi1 . $rastgeleSayi2 . $uzanti;

            //dosya var mı?
            if (strlen($name) == 0) {
                echo "Bir dosya seçin";
                exit();
            }

            //boyut kontrolü
            if ($boyut > (1024 * 1024 * 6)) {
                echo "Dosya boyutu büyük";
                exit();
            }

            //tip kontrolü

            if ($type != 'image/jpeg' && $type != 'image/png' && $type != 'image/jpg' && $uzanti != '.jpg') {
                echo "yalnızca jpeg, jpg veya png olabilir";
            }


            $baslik = $_POST['baslik'];
            $icerik = $_POST['icerik'];


            move_uploaded_file($tmp_name, "$yukle/$resimAd");

            $sorgu = $baglan->prepare("update icerik set resim = ?, baslik = ? , icerik = ? where id=?");
            $sorgu->execute(array($resimAd, $baslik, $icerik,$idAl));
            $guncelleKontrol = $sorgu->rowCount();

            if ($guncelleKontrol > 0) {
                header("refresh:0;url=icerik.php");
                exit();
            } else {
                echo "hata";
            }
        }
        ?>
        <script>
            CKEDITOR.replace('icerik', {
                filebrowserUploadUrl: 'ckeditor/upload.php',
                filebrowserUploadMethod: 'form'
            });
        </script>
        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    </div>
</div>
<script type="text/javascript" src="./assets/scripts/main.js"></script></body>
</html>
<?php ob_flush(); ?>


