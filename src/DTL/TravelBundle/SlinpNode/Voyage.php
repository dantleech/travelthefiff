<?php

namespace DTL\TravelBundle\SlinpNode;

use Slinp\Bundle\SlinpBundle\SlinpNode\Resource;
use Slinp\Bundle\SlinpBundle\SlinpNode\Base;

class Voyage extends Base
{
    public function getName()
    {
        return $this->_node()->getName();
    }

    public function getDescription()
    {
        return $this->_value('description');
    }

    public function getYears()
    {
        return $this->_children('DTLTravel:year');
    }
}
