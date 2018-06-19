<?php

// spl = Standard PHP Library
spl_autoload_register(function ($classname){
    require $classname . '.php';
});

$p = new Poubelle();

$frigo = new Frigo();
$db = new Database();
$d = new Dossier();
$mem = new Memoire();

$p->addClearer($frigo, $d, $db, $mem);
$p->run();