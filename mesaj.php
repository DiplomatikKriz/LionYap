<?php
require_once "db.php";
require_once "head.php";
?>
        <table class="table table-hover table-light">
            <thead>
            <tr>
                <th scope="col">İsim</th>
                <th scope="col">E-mail</th>
                <th scope="col">İşlemler</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $sorgu = $baglan ->prepare("select * from bildir ORDER BY id DESC");
            $sorgu ->execute();
            $kayitlar = $sorgu ->rowCount();
            $kayit    = $sorgu ->fetchALL(PDO::FETCH_ASSOC);

            foreach ($kayit as $gelen){?>
                <tr>
                    <th scope="row"><?php echo $gelen['name'];?></th>
                    <td><?php echo $gelen['email'];?></td>
                    <td><a href="delete2.php?id=<?php echo $gelen['id'];?>"><i class="fas fa-trash-alt"></i></a> <a href="detay.php?id=<?php echo $gelen['id'];?>"><i class="fas fa-eye"></i></a></td>
                </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
    </div>
</div>
<script type="text/javascript" src="./assets/scripts/main.js"></script></body>
</html>


