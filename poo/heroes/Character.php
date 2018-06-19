<?php

abstract class Character
{
    /**
     * @var int
     */
    private $id = 0;
    /**
     * @var string
     */
    private $name = '';
    /**
     * @var int
     */
    private $healthPoint = 0;

    /**
     * Character constructor.
     * @param string $name
     * @param int $healthPoint
     */
    public function __construct(int $id, string $name,int $healthPoint)  // les __ devant construct indique que c'est magique
    {
        $this->setId($id);
        $this->setName($name);
        $this->setHealthPoint($healthPoint);
    }
    public function setId(int $id)
    {
        $this->id = $id;
    }
    public function getId(): int
    {
        return $this->id;
    }
    /**
     * Set the name of the character
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * Return the name of the character
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set the health points of the character
     * @param int $points
     */
    public function setHealthPoint(int $points)
    {
        $this->healthPoint = $points;
    }

    /**
     * Return the health points of the character
     * @return int
     */
    public function getHealthPoint(): int
    {
        return $this->healthPoint;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        $str = 'Fiche' . PHP_EOL; // PHP_EOL est l'équivalent d'un \n pour retour à la ligne
        $str .='Id: ' . $this->getId() . PHP_EOL;
        $str .='Name: ' . $this->getName() . PHP_EOL;
        $str .='HealthPoint: ' . $this->getHealthPoint() . PHP_EOL;
        $str .='Move: ' . $this->move() . PHP_EOL;

        return $str;
    }

    /**
     * Avec abstract (abstraite), on oblige chaque character à avoir une fonction move()
     * @return mixed
     */
    abstract public function move();

}
