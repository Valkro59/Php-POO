<?php
//data/menu.php

$menu = array(
    array(
        'title' => 'Google',
        'link' => 'https://www.google.com',
        'visible' => true
    ),
    array(
       'title' => 'Qwant',
        'link' => 'https://www.qwant.com',
        'visible' => true
    ),
    array(
        'title' => 'Blog',
        'link' => '#',
        'visible' => true,
        'menu' => array(
            array(
                'title' => 'Nouvel article',
                'link' => 'add.php',
                'visible' => true,
                'menu' => array(
                    array(
                        'title' => 'Ajouter un titre',
                        'link' => 'add.php',
                        'visible' => true
                         ),
                array(
                  'title' => 'Ajouter une image',
                  'link' => 'add.php',
                  'visible' => true,
                ),
                ),

    ),array(
                'title' => 'Consulter les articles',
                'link' => 'add.php',
                'visible' => true,
            ),
            ),
    ),
);

function nav(array $array){
    $html = '<ul>';

    foreach ($array as $key =>$item) {
        if ($item['visible']){
            $html .= '<li>';
            $html .= sprintf('<a href="%s">%s</a>', $item['link'], $item['title']);

            if (isset($item['menu'])) {
                $html .= nav($item['menu']);
            }

            $html .= '</li>';
        }
    }

    $html .= '</ul>';
    return $html;
}

echo nav($menu);


