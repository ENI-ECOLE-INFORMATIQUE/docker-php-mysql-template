<?php
ini_set('highlight.comment', '#7D784D');
if (isset($correction) && $correction) {
    echo '<details class="correction"';
    if($correction === 2)
        echo ' open="true"';
    echo '><summary><h4>Correction</h4></summary><div class="corrige">';
}
foreach ($fichiers as $fichier) {
    if (isset($nomFichier) && $nomFichier) {
        if (isset($trunc) && $trunc > 0)
            $f = substr($fichier, $trunc);
        else
            $f = $fichier;
        echo '<h5 class="nom">' . $f . '</h5>';
    }
    echo preg_replace(['#&nbsp;(.)#', '#<code#'], [' $1', '<code data-type="'.pathinfo($fichier, PATHINFO_EXTENSION).'"'], highlight_file($fichier, true));
}
if (isset($execution) && $execution) {
    echo '<h4 class="execution">Exécution</h4><div>';
    if(isset($iframe) && $iframe)
        echo '<iframe title="exécution" src="'.$execution.'" height="1000" width="100%"><iframe>';
    else
        require $execution;
    echo '</div>';
}
if (isset($commentaires)) {
    if (!isset($nomCom)) {
        $nomCom = 'Commentaires';
    }
    echo '<h4 class="commentaires">' . $nomCom . '</h4>';
    echo '<div>' . $commentaires . '</div>';
}
if (isset($correction) && $correction) {
    echo '</div></details>';
}
