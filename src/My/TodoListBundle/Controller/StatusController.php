<?php

namespace My\TodoListBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class StatusController extends Controller
{
    /**
     * @Route("/statuses", name="status_list")
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }
}
