<?php
$titre = $restaurant['nom'];
ob_start();
?>
<h1><?=$restaurant['nom']?></h1>
<address>
    <?=$restaurant['adresse']?><br>
    <?=$restaurant['cp']?> <?=$restaurant['ville']?>
</address>
<a href="tel:<?=$restaurant['telephone']?>"><?=chunk_split($restaurant['telephone'], 2, ' ')?></a>
<h2>Description</h2>
<?=$restaurant['description']?>
<h2>Avis</h2>
<?php
    foreach($avis as $a) :
        ?>
        <p>
            <?=$a['auteur']??'<i>anonyme</i>'?> :
            <span aria-label="noté <?=$a['note']?> sur 5 étoiles">
                <span aria-hidden="true">
                    <?php
                        for ($i = 0; $i < $a['note']; $i++):
                            ?>
                            <img src="Media/etoile.png" alt="">
                            <?php
                        endfor;
                        while ($i < 5):
                            ?>
                            <img src="Media/pasetoile.png" alt="">
                            <?php
                            $i++;
                        endwhile;
                    ?>
                </span>
            </span>
        </p>
        <p><?=$a['commentaire']?></p>
        <?php
    endforeach;

$contenu = ob_get_clean();

require 'gabarit.php';