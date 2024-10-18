<?php

namespace Ilslo\Oop;

class Developer extends Worker
{
  // TODO: 1. приклад того, як клас Developer, наслідує і переоприділяє клас Worker
  // А наслідує він властивості з конструктором з кладу Worker а в класі Developer перевизначає метод work
  public function work ()
  {
    print_r("i`m {$this->workerName}, and me {$this->age}. And i`m developer");
  }

}