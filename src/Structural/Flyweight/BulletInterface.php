<?php

namespace DesignPattern\Structural\Flyweight;

interface BulletInterface
{
    /**
     * @param int $position
     */
    public function setPositionInMagazine(int $position = 0);

    /**
     * @return int
     */
    public function getPositionInMagazine(): int;
}
