<?php

namespace DTL\TravelBundle\SlinpNode;

use Slinp\Bundle\SlinpBundle\SlinpNode\Resource;

class Voyage extends Resource
{
    public function getName()
    {
        return $this->getPhpcrNode()->getName();
    }

    public function getDescription()
    {
        if ($this->getPhpcrNode()->hasProperty('description')) {
            return $this->getPhpcrNode()->getPropertyValue('description');
        }

        return null;
    }
}

