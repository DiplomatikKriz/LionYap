
            <!-- a work -->
            <?php
            require_once "genelayar/ayarlar.php";
            $sorgu = $baglan ->prepare("select * from icerik order by id desc LIMIT 3,20");
            $sorgu ->execute();
            $kayitlar = $sorgu->rowCount();
            $kayit    = $sorgu->fetchAll(PDO::FETCH_ASSOC);

            foreach($kayit as $gelen2) {
                ?>
                <a href="img/<?php echo $gelen2['resim'];?>" class="col-lg-4 col-sm-6 grid-item webdesign lightbox-icon">
                    <figure class="portfolio-item">
                        <img src="img/<?php echo $gelen2['resim'];?>" alt=""/>
                        <figcaption>
                            <h3 class="title"><?php echo $gelen2['baslik'];?></h3>
                            <span>Galeri </span>
                        </figcaption>
                    </figure>
                </a>
                <?php
            }
            ?>