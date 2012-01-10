<?php

namespace My\TodoListBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class TaskController extends Controller
{
    /**
     * @Route("/show/{taskId}", name="task_show")
     * @Template()
     */
    public function indexAction($taskId)
    {
        return array('taskId' => $taskId);
    }
}
