<!doctype html>
<html lang="tr">

<?php
require_once "db.php";
require_once "head.php";
?>            <?php
            require_once  "db.php";

            if(isset($_GET["id"])){
                $GelenID		=	$_GET["id"];
            }else{
                echo "id gelmiyor";
            }


            $icerikSorgusu		=	$baglan->prepare("select * FROM bildir WHERE id = ? LIMIT 1");
            $icerikSorgusu->execute([$GelenID]);
            $icerikSayisi		=	$icerikSorgusu->rowCount();
            $gelen              =   $icerikSorgusu->fetch(PDO::FETCH_ASSOC);

            if($icerikSayisi>0){?>

                <div class="card text-left">
                    <div class="card-header">
                        <h4 class="card-title"><?php echo $gelen['name'];?></h4>
                    </div>
                    <div class="card-body">
                        <p class="card-text"><?php echo $gelen['message'];?></p>
                    </div>
                </div>
             <?php
            }
            else
                {
                echo "Kayıt yok";
            }
            ?>
    </div>
</div>
<script type="text/javascript" src="./assets/scripts/main.js"></script></body>
</html>

