<?php

namespace Ilslo\Oop;

class Worker
{

  public string $workerName;
  public int $age;

  /** TODO: 2. Рівні доступів
   * public - властивість\метод доступна всім і всюди
   * protected - властивість\метод доступна тільки в класах наслідниках
   * private - властивість\метод доступна тільки в класі в якому об'явлена
   */

  public function __construct ($workerName , $age)
  {
    $this->workerName = $workerName;
    $this->age = $age;
  }

  public function work ()
  {
    print_r("i`m {$this->workerName}, and me {$this->age} working");
  }

}