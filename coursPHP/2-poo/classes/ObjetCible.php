<?php
declare(strict_types=1);

class ObjetCible {
    private int $val = 12;

    public function setVal(int $v) : self {
        $this->val = $v;
        return $this;
    }
}
