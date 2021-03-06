<?php

namespace DesignPattern\Creational\FactoryMethod;

class MacBook implements NotebookInterface
{
    /**
     * @var string
     */
    protected $color;

    /**
     * Sets the color of the MacBook.
     *
     * @param string $color
     */
    public function setColor(string $color)
    {
        $this->color = $color;
    }
}
