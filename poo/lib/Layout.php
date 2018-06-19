<?php

class Layout extends Template
{
    private $blocks = [];

    public function addBlock(string $name, string $path)
    {
        $this->blocks[$name] = $path;
    }

    public function block(string $name, array $data = [])
    {
        $path = $this->blocks[$name];
        $t = new Template();
        return $t->render($path, $data);

    }
}