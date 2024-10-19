<?php

namespace Ilslo\Oop;

// TODO: 6. Трейти, це опис методів з реалізацією. Також трейти дозволяють робити множинне наслідування
trait HasRest
{
    public function rest(){
        print_r($this->getWorkerName() . ' has rest');
    }
}