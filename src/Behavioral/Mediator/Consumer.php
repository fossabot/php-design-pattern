<?php

namespace DesignPattern\Behavioral\Mediator;

class Consumer extends AbstractColleague
{
    public function request()
    {
        return $this->getMediator()->sendRequest();
    }

    public function output($content)
    {
        return $content;
    }
}
