<?php
ob_start();
require_once "db.php";
require_once "head.php";
?>
<script src="ckeditor/ckeditor.js"></script>
        <div class="container">
            <div class="icerik-ekle" align="center">
                <h2 align="center" style="margin-top: 10px">İçerik ekle</h2>
                <form action="" class="form-group" method="post" enctype="multipart/form-data">
                    <input type="file" name="resim" class="form-control"><br>

                    <input type="text" class="form-control" name="baslik" placeholder="Başlık"><br>

                    <textarea type="text" class="ckeditor" name="icerik"></textarea><br>

                    <script>
                        CKEDITOR.replace('editor');
                    </script>
                    <input type="submit" class="btn btn-primary buton" value="İçerik Ekle" name="SendMovie">
                </form>

                <?php
                if(isset($_POST['SendMovie'])){
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
                    if ($boyut > (1024 * 1024 * 8)) {
                        echo "Dosya boyutu büyük";
                        exit();
                    }

                    //tip kontrolü

                    if ($type != 'image/jpeg' && $type != 'image/png' && $type != 'image/jpg' && $uzanti != '.jpg') {
                        echo "yalnızca jpeg, jpg veya png olabilir";
                    }


                    $tarih      = date("Y-m-d");
                    $baslik     = $_POST['baslik'];
                    $icerik     = $_POST['icerik'];



                    move_uploaded_file($tmp_name, "$yukle/$resimAd");

                    $insert   = $baglan -> prepare("insert into icerik  (resim, baslik, icerik, tarih, gosterim ) values (?,?,?,?,gosterim)");
                    $insert   -> execute(array($resimAd, $baslik, $icerik, $tarih ));

                    if($insert){
                        exit();
                    }
                    else
                    {
                        echo "eklenmedi";
                    }
                }
                ?>
                <script>
                    CKEDITOR.replace('icerik', {
                        filebrowserUploadUrl: 'ckeditor/upload.php',
                        filebrowserUploadMethod: 'form'
                    });
                </script>
                <div style="height: 60px"></div>
    </div>
</div>

</div>
</div>
<script type="text/javascript" src="./assets/scripts/main.js"></script></body>
</body>
</html>
<?php ob_flush();?>
