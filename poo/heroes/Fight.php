<?php

class Fight extends ActorAnimation
{
    public function animate()
    {$str = 'Animate Figth<br>';

        foreach ($this->getCharacters() as $c) {
            $str .= nl2br($c);
        }
        return $str;
    }


}