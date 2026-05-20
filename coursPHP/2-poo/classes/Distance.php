<?php
declare(strict_types=1);

class Distance {

    private float $dist;

    public function __construct(float $dist) {
        if ($dist >= 0) {
            $this->dist = $dist;
        } else {
            throw new Exception('Une distance ne peut pas être négative !', 123);
        }
    }
}
