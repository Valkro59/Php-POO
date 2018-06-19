<?php

require 'Character.php'; // Character doit être récupèré avant les heros définis
require 'Superman.php';
require 'Batman.php';
require 'WonderWoman.php';
require 'Human.php';
require 'Animation.php';
require 'ActorAnimation.php';
require 'Fight.php';
require 'Apero.php';
require 'Demo.php';
require 'Arena.php';


$superman = new Superman(1,'Clark Kent','3000');
$superman2 = new Superman(2,'Kal-El', 5000);
$batman = new Batman(3,'Bruce Wayne','1000');
$wonderWoman = new WonderWoman(4,'Diana de Themyscira',3000);
$human = new Human(5,'Un humain',100);

$f = new Fight();
$f->addCharacters($superman, $batman, $wonderWoman);
$f->removeCharacter($wonderWoman);
$f->setId(0);
$f->setName('Le combat du siècle');
$f->setPrice(10000);
$f->setDescription('Le combat de l\'apocalypse de la mort qui tue');

$a = new Apero();
$a->addCharacters($wonderWoman,$human);
$a->setId(1);
$a->setName('Boire un coup');
$a->setPrice(500);
$a->setDescription('Allez viens boire un p\'tit coup à la maison !');

$d = new Demo();
$d->setId(3);

$tournament = new Arena();
$tournament->addAnimations($f, $a, $d);
$tournament->start();

