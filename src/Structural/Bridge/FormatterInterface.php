<?php

namespace DesignPattern\Structural\Bridge;

interface FormatterInterface
{
    /**
     * Formatter method.
     *
     * @param string $string
     *
     * @return string
     */
    public function format(string $string): string;
}
