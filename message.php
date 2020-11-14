<?php
require_once "genelayar/ayarlar.php";

if(isset($_POST['get'])){
    $name = $_POST['con_name'];
    $email = $_POST['con_email'];
    $message = $_POST['con_message'];

    $ekle = $baglan ->prepare("insert into bildir (name,email,message) values (?,?,?)");
    $ekle ->execute([$name, $email, $message]);

}
else
{
    echo "";
}
?>
