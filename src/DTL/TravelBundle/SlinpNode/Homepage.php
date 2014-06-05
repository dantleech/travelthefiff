<?php

namespace DTL\TravelBundle\SlinpNode;

use Slinp\Bundle\SlinpBundle\SlinpNode\Resource;
use DTL\TravelBundle\SlinpNode\Voyage;

class Homepage extends Resource
{
    public function getTitle()
    {
        return $this->getPhpcrNode()->getPropertyValue('title');
    }

    public function getVoyages()
    {
        $ret = array();

        foreach ($this->getPhpcrNode()->getNodes(null, 'DTLTravel:voyage') as $node) {
            $ret[] = new Voyage($node);
        }

        return $ret;
    }
}
