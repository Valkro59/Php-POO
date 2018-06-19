<?php

abstract class ActorAnimation extends Animation
{
    /**
     * Une collection d'objets character
     * @var array
     */
    private $characters =[];

    /**
     * Typr Hinting
     * @param Character $character
     */
    public function addCharacter(Character $character)
    {
        $this->characters[$character->getId()] = $character;
    }

    /**... = Spread Operator
     * @param Character ...$character
     */
    public function addCharacters(Character ...$character)
    {
        foreach ($character as $c) {
            $this->addCharacter($c);
        }
    }

    public function findCharacter(int $id)
    {
        if (array_key_exists($id, $this->characters)) {
            return $this->characters[$id];
        } else return null;
    }

    /**
     * @return array
     */
    public function getCharacters(): array
    {
        return $this->characters;
    }

    /**
     * @param Character $character
     */
    public function removeCharacter(Character $character)
    {
        unset ($this->characters[$character->getId()]);
    }

    public function animate()
    {

    }

}