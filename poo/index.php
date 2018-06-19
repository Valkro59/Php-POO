<?php

require 'lib/Template.php';
require 'lib/Layout.php';

/**
 *

$t = new Template();

$message = $t->render('tmpl/home.phtml', array(
    'title' => '<h2>Titre de ma page</h2>',
    'content' => 'Texte de ma page'
));

echo $message;
 */

$layout = new Layout();
$layout->addBlock('header','tmpl/header.phtml');
$layout->addBlock('footer','tmpl/footer.phtml');

echo $layout->render('tmpl/home.phtml', [
    'title' => 'Titre de ma page',
    'content' => 'Contenu de ma page'
]);



