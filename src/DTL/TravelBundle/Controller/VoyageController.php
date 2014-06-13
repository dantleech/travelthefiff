<?php

namespace DTL\TravelBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Slinp\Bundle\SlinpBundle\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class VoyageController extends Controller
{
    /**
     * @Route("/")
     * @Template()
     */
    public function indexAction($resource)
    {
        return array('resource' => $resource);
    }

    /**
     * @Template()
     */
    public function timePeriodPreviewAction($node)
    {
        $jcrSql2 = sprintf(
            'SELECT * FROM [nt:file] WHERE ISDESCENDANTNODE(%s)',
            $node->_node()->getPath()
        );

        $files = $this->get('slinp.session')->executeQuery($jcrSql2);

        return array('node' => $node, 'images' => $files);
    }
}

