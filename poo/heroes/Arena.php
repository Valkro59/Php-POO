<?php

 class Arena
{

    private $animations =[];


    public function addAnimation(Animation $animation)
    {
        $this->animations[$animation->getId()] = $animation;
    }


    public function addAnimations(Animation ...$animation)
    {
        foreach ($animation as $a) {
            $this->addAnimation($a);
        }
    }

    public function getAnimation($id) : Animation
    {
        return $this->animations[$id] ?? null;
    }


    public function removeAnimation(Animation $animation)
    {
        unset ($this->animations[$animation->getId()]);
    }

    public function start()
    {
        foreach ($this->animations as $a) {
            echo $a->animate();
        }
    }
}