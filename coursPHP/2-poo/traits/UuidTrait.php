<?php
declare(strict_types=1);

trait UuidTrait {
    private string $uuid;

    public function getUuid() : string {
        return $this->uuid;
    }

    public function setUuid(string $uuid) : self {
        $this->uuid = $uuid;
        return $this;
    }
}
