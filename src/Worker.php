<?php

namespace Ilslo\Oop;

// TODO: 4. Переробили класс Worker на абстрактний, тим самим даємо зрозуміти, що цей клас, буде відповідати за те,
// щоб наші конкретні класи, будуть наслідувати ВЛАСТИВОСТІ і МЕТОДИ класа WORKER, за допомогою ключового слова extends
// А вже від самого абстрактного класа, нові екземпляри класів, створювати змоги не буде
abstract class Worker
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

  // TODO: 4.1 Відповідно метод також робимо абстрактним
  abstract public function work ();

}