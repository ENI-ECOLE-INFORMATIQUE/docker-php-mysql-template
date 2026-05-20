<?php
declare(strict_types=1);

abstract class Animal {

    public function __construct(private string $espece) {
    }

    public function __toString() : string {
        return 'je suis un ' . $this->espece . '.<br>';
    }

    public abstract function mange() : void;
}
