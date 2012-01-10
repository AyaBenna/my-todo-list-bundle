<?php

namespace My\TodoListBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * My\TodoListBundle\Entity\Priority
 *
 * @ORM\Table(name="priority")
 * @ORM\Entity(repositoryClass="My\TodoListBundle\Entity\PriorityRepository")
 */
class Priority
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $name
     *
     * @ORM\Column(name="name", type="string", length=255, unique=true)
     */
    private $name;

    /**
     * @ORM\OneToMany(targetEntity="Task", mappedBy="priority", cascade={"remove", "persist"})
     */
    protected $tasks;

    public function __construct()
    {
        $this->tasks = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }
    public function __construct()
    {
        $this->tasks = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add tasks
     *
     * @param My\TodoListBundle\Entity\Task $tasks
     */
    public function addTask(\My\TodoListBundle\Entity\Task $tasks)
    {
        $this->tasks[] = $tasks;
    }

    /**
     * Get tasks
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getTasks()
    {
        return $this->tasks;
    }

    /**
     * Set tasks
     *
     * @param \Doctrine\Common\Collections\Collection $tasks
     */
    public function setTasks(\Doctrine\Common\Collections\Collection $tasks)
    {
        $this->tasks = $tasks;
    }
}