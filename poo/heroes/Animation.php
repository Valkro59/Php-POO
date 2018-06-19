<?php

abstract class Animation
{
    private $id = 0;
    /**
     * @var string
     */
    private $name = '';
    /**
     * @var int
     */
    private $price = 0;
    /**
     * @var string
     */
    private $description = '';

    public function setId(int $id)
    {
        $this->id = $id;
    }


    public function getId(): int
    {
        return $this->id;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }


    public function getName(): string
    {
        return $this->name;
    }


    public function setPrice(float $price)
    {
        $this->price = $price;
    }


    public function getPrice(): float
    {
        return $this->price;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }


    public function getDescription(): string
    {
        return $this->description;
    }

    abstract public function animate();

}