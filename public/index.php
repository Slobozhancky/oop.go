<?php

require_once '../config/constants.php';
require_once ROOT . '/vendor/autoload.php';

use Ilslo\Oop\Developer;
use Ilslo\Oop\Worker;

d(ROOT . '/src/Worker.php');

$worker_1 = new Developer('Tom', 42);

$worker_1->work();

$worker_1->setSalary(1000);

var_dump($worker_1->getSalary());
