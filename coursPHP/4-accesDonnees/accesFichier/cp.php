<table>
    <caption>Codes postaux</caption>
    <thead>
        <tr>
            <th scope="col">Code postal</th>
            <th scope="col">Villes</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $fichier = fopen('cp.csv', 'r');
        while($ligne = fgets($fichier)) {
            $infos = explode(';', $ligne);
            if(isset($cp[$infos[0]]))
                $cp[$infos[0]].=', '.$infos[1];
            else
                $cp[$infos[0]]=$infos[1];
        }
        foreach($cp as $code => $villes) {
            echo '<tr><td>' . $code . '</td><td>' . $villes . '</td></tr>';
        }
        ?>
    </tbody>
</table>
