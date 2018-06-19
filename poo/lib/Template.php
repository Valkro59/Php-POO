<?php

class Template
{
    public function escape($value)
    {
        return htmlspecialchars($value);// le htmlspecialchars convertit les caractères spéciaux en entités HTML
    }
    public function render(string $path, array $data = [])
    {
        array_walk_recursive($data, function (&$item, $key){ // array_walk_recursive permet de parcourir un tableau multidimensionnel (un tableau dans un tableau dans un tableau ...)
           $item = $this->escape($item);
        });

        extract($data); // extract permet de récupèrer les données du tableau

        ob_start(); // 'ob' fait référence à une temporisation, on stocke ce qui suit dans un tampon dont on récupèrera les données par la suite
        require $path;
        return ob_get_clean(); // 'get' récupère ce qu'il y a dans le tampon, 'clean' permet de supprimer le tampon
    }
}