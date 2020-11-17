<?php
require_once "db.php";
require_once "head.php";
?>
        <table class="table table-hover table-light">
            <thead>
            <tr>
                <th scope="col"><h4 style="color: #f56a6a">İçerikler</h4></th>
            </tr>
            <tr>
                <th scope="col">Başlık</th>
                <th scope="col">resim</th>
                <th scope="col">tarih</th>
                <th scope="col">İşlemler</th>
            </tr>
            </thead>
            <tbody>
            <?php
               $sorgu = $baglan ->prepare("select * from icerik ORDER BY id DESC");
               $sorgu ->execute();
               $kayitlar = $sorgu ->rowCount();
               $kayit    = $sorgu ->fetchALL(PDO::FETCH_ASSOC);

               foreach ($kayit as $gelen){?>
                   <tr>
                       <th scope="row"><?php echo $gelen['baslik'];?></th>
                       <td><?php echo $gelen['resim'];?></td>
                       <td><?php echo $gelen['tarih'];?></td>
                       <td><a href="delete.php?id=<?php echo $gelen['id'];?>"><i class="fas fa-trash-alt"></i></a> <a href="edit.php?id=<?php echo $gelen['id'];?>"><i class="fas fa-edit"></i></a></td>
                   </tr>
            <?php
               }
            ?>
            </tbody>
        </table>

    </div>

    <table class="table table-hover table-light">
        <thead>
        <tr>
            <th scope="col"><h4 style="color: #f56a6a">Blog - İçerikler</h4></th>
        </tr>
        <tr>
            <th scope="col">Başlık</th>
            <th scope="col">resim</th>
            <th scope="col">tarih</th>
            <th scope="col">İşlemler</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $sorgu = $baglan ->prepare("select * from blog ORDER BY id DESC");
        $sorgu ->execute();
        $kayitlar = $sorgu ->rowCount();
        $kayit    = $sorgu ->fetchALL(PDO::FETCH_ASSOC);

        foreach ($kayit as $gelen){?>
            <tr>
                <th scope="row"><?php echo $gelen['baslik'];?></th>
                <td><?php echo $gelen['resim'];?></td>
                <td><?php echo $gelen['tarih'];?></td>
                <td><a href="blog-delete.php?id=<?php echo $gelen['id'];?>"><i class="fas fa-trash-alt"></i></a> <a href="blog-edit.php?id=<?php echo $gelen['id'];?>"><i class="fas fa-edit"></i></a></td>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
</div>
<script type="text/javascript" src="./assets/scripts/main.js"></script></body>
</html>

