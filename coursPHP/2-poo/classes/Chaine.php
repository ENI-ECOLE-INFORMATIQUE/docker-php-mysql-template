<?php
declare(strict_types=1);

class Chaine {

    function __construct(private string $x) {
    }
    
    public function getX() : string {
        return $this->x;
    }

    public function setX(string $x) : self {
        $this->x = $x;
        return $this;
    }
}
