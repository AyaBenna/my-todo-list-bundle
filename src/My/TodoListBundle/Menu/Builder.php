<?php
namespace My\TodoListBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAware;

class Builder extends ContainerAware
{
    public function mainMenu(FactoryInterface $factory)
    {
        $menu = $factory->createItem('root');
        $menu->setCurrentUri($this->container->get('request')->getRequestUri());

        $menu->addChild('Home', array('route' => 'homepage'));
        $menu->addChild('Tasks', array('route' => 'task_list'));
        $menu->addChild('Statuses', array('route' => 'status_list'));
        $menu->addChild('Priorities', array('route' => 'priority_list'));

        return $menu;
    }
}
