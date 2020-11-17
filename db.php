<?php
try {
    $baglan = new PDO("mysql:host=localhost;dbname=build;charset=utf8","root","");
    echo "";
}catch(PDOException $hata) {
    echo "Hata :" .$hata->getMessage();
}
