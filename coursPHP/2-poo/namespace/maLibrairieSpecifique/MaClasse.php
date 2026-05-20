<?php
declare(strict_types=1);

namespace maLibrairieSpecifique;

class MaClasse {

    public function mafonction() : string {
        return 'Namespace : ' . __NAMESPACE__. ', classe : ' . __CLASS__ . ', fonction : ' . __FUNCTION__ . '<br>';
    }
}
