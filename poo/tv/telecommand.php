<?php

class Telecommand
{

private $Tv = null;

public function __construct(Tv $tv)
{
    $this->setTv($tv);
}

    public function setTv(Tv $Tv)
    {
        $this->Tv = $Tv;
    }
protected function getTv(): Tv
    {
        return $this->Tv;
    }

public function increaseVolume()
    {
        $this->getTv()->addVolume();
    }

public function decreaseVolume()
    {
    $this->getTv()->removeVolume();
    }
}