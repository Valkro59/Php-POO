<?php

class Apero extends ActorAnimation
{
    public function animate()
    {$str = 'Animate Apero<br>';

        foreach ($this->getCharacters() as $c) {
            $str .= nl2br($c);
        }
        return $str;
    }
}

