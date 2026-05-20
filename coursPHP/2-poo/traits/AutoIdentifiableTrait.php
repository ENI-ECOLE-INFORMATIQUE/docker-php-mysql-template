<?php
declare(strict_types=1);

trait AutoIdentifiableTrait {
   private static int $maxId = 0;
   private readonly int $id;

   public function getId() : int {
      return $this->id;
   }

   private function initId() : void {
      static::$maxId++;
      $this->id = static::$maxId;
   }
}