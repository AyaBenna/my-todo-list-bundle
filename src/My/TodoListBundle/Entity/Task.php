<?php

namespace My\TodoListBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * My\TodoListBundle\Entity\Task
 *
 * @ORM\Table(name="task")
 * @ORM\Entity(repositoryClass="My\TodoListBundle\Entity\TaskRepository")
 */
class Task
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
     * @var text $description
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var datetime $beginDate
     *
     * @ORM\Column(name="begin_date", type="datetime")
     */
    private $beginDate;

    /**
     * @var integer $durationInSeconds
     *
     * @ORM\Column(name="duration_in_seconds", type="integer")
     */
    private $durationInSeconds;

    /**
     * @ORM\ManyToOne(targetEntity="Status", inversedBy="tasks", cascade={"remove"})
     * @ORM\JoinColumn(name="status_id", referencedColumnName="id")
     */
    protected $status;

    /**
     * @ORM\ManyToOne(targetEntity="Priority", inversedBy="tasks", cascade={"remove"})
     * @ORM\JoinColumn(name="priority_id", referencedColumnName="id")
     */
    protected $priority;


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

    /**
     * Set description
     *
     * @param text $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Get description
     *
     * @return text 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set beginDate
     *
     * @param datetime $beginDate
     */
    public function setBeginDate($beginDate)
    {
        $this->beginDate = $beginDate;
    }

    /**
     * Get beginDate
     *
     * @return datetime 
     */
    public function getBeginDate()
    {
        return $this->beginDate;
    }

    /**
     * Set durationInSeconds
     *
     * @param integer $durationInSeconds
     */
    public function setDurationInSeconds($durationInSeconds)
    {
        $this->durationInSeconds = $durationInSeconds;
    }

    /**
     * Get durationInSeconds
     *
     * @return integer 
     */
    public function getDurationInSeconds()
    {
        return $this->durationInSeconds;
    }

    /**
     * Set status
     *
     * @param My\TodoListBundle\Entity\Status $status
     */
    public function setStatus(\My\TodoListBundle\Entity\Status $status)
    {
        $this->status = $status;
    }

    /**
     * Get status
     *
     * @return My\TodoListBundle\Entity\Status 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set priority
     *
     * @param My\TodoListBundle\Entity\Priority $priority
     */
    public function setPriority(\My\TodoListBundle\Entity\Priority $priority)
    {
        $this->priority = $priority;
    }

    /**
     * Get priority
     *
     * @return My\TodoListBundle\Entity\Priority 
     */
    public function getPriority()
    {
        return $this->priority;
    }
}