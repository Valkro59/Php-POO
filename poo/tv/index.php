<?php

require 'tv.php';
require 'telecommand.php';

$tv = new Tv();
$tv->setMarque('Samsoul');
$tv->setModel('SamVK59');

$tv->addVolume();
$tv->addVolume();
$tv->addVolume();
$tv->removeVolume();
$tv->addVolume();
$tv->addVolume();
$tv->removeVolume();

$tc= new Telecommand($tv);
$tc->decreaseVolume();
$tc->increaseVolume();
$tc->increaseVolume();

echo 'Volume: ' . $tv->getVolume();
