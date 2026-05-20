<?php
echo '<h1>Vos restaurants préférés</h1>';
foreach($restaurants as $r) :
    ?>
        <a href="index.php?ctrl=Restaurant&action=index&idRestaurant=<?=$r['idRestaurant']?>">
            <h2><?=$r['nom']?></h2>
        </a>
        <address><?=$r['ville']?></address>
        <?=$r['description']?>
    <?php
endforeach;