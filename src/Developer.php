<?php

namespace Ilslo\Oop;

class Developer extends Worker
{
  // TODO: 1. приклад того, як клас Developer, наслідує і переоприділяє клас Worker
  // А наслідує він властивості з конструктором з кладу Worker а в класі Developer перевизначає метод work


  // TODO: 3. щоб задавати значення властивостям, з різним рівнем доступу, використовувати слід геттери та сеттери
  // нижче приведено приклад, приватної властивості salary до якої не можна буде отримати доступу на екземплярі
  // класу, тобто на обєкті, тому доступ щоб задати значення, або його тримати, будемо робити через геттер та сеттер
  private float $salary;
  public function work ()
  {
    print_r("i`m {$this->workerName}, and me {$this->age}. And i`m developer");
  }

  /**
   * @param float $salary
   */
  public function setSalary (float $salary) : void
  {
    $this->salary = $salary;
  }

  /**
   * @return float
   */
  public function getSalary () : float
  {
    return $this->salary;
  }

}