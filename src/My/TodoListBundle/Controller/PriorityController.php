<?php

namespace My\TodoListBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class PriorityController extends Controller
{
    /**
     * @Route("/priorities", name="priority_list")
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }
}
