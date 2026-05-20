<?php
declare(strict_types=1);

require_once 'EntityInterface.php';
require_once 'AutoIdentifiableTrait.php';
require_once 'UuidTrait.php';
require_once 'NommableTrait.php';
require_once 'TimestampableTrait.php';

class Produit implements EntityInterface {
    use AutoIdentifiableTrait;
    use UuidTrait;
    use NommableTrait;
    use TimestampableTrait;

    public function __construct(private string $code, private float $prix) {
        $this->initId();
    }

    public function getCode() : string {
        return $this->code;
    }

    public function setCode(string $code) : self {
        $this->code = $code;
        return $this;
    }

    public function getPrix() : float {
        return $this->prix;
    }

    public function setPrix(float $prix) : self {
        $this->prix = $prix;
        return $this;
    }
}