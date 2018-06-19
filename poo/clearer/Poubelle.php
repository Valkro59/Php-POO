<?php

class Poubelle
{
    private $clearers = [];

    public function addClearer(Clearer ...$clearers)
    {
        $this->clearers = $clearers;
    }

    public function run ()
    {
        foreach ($this->clearers as $c) {
            $c->clear();
            echo '<br>';
        }
        $this->clearers = [];
    }
}

