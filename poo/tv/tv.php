<?php

class TV
{

    private $marque = '';

    private $model = '';

    private $volume = Tv::VOLUME_MIN; // les :: permettent de faire appel à la constante

    const VOLUME_MIN = 0;
    const VOLUME_MAX = 100;

    public function setMarque(string $marque)
    {
        $this->marque = $marque;
    }
    public function getMarque(): string
    {
        return $this->marque;
    }

    public function setModel(string $model)
    {
        $this->model = $model;
    }

    public function getModel(): string
    {
        return $this->model;
    }

    public function getVolume(): int
    {
        return $this->volume;
    }

    public function addVolume()
    {
        if($this->volume < Tv::VOLUME_MAX) {
            $this->volume++;
        }
    }

    public function removeVolume()
    {
        if($this->volume > Tv::VOLUME_MIN) {
            $this->volume--;
        }
    }
}
