<?php
require_once  "db.php";

if(isset($_GET["id"])){
    $GelenID		=	$_GET["id"];
}else{
    echo "id gelmiyor";
}


$icerikSorgusu		=	$baglan->prepare("DELETE FROM blog WHERE id = ? LIMIT 1");
$icerikSorgusu->execute([$GelenID]);
$icerikSayisi		=	$icerikSorgusu->rowCount();

if($icerikSayisi>0){
    header("refresh:0;url=icerik.php");
    exit();
}else{
    header("refresh:0;url=icerik.php");
    exit();
}
?>
