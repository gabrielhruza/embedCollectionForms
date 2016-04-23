<?php 
// src/AppBundle/Entity/Tag.php
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

use Doctrine\Common\Collections\ArrayCollection;


/**
 * Ciudad
 *
 * @ORM\Table(name="tag")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TagRepository")
 */
class Tag
{	
	/**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    public $name;

    /**
     * @ORM\ManyToMany(targetEntity="Task", mappedBy="tags")
     */
    public $tasks;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    public function __construct()
    {
        $this->tasks = new ArrayCollection();
    }

	public function addTask(Task $task)
	{
	    if (!$this->tasks->contains($task)) {
	    $this->tasks->add($task);
	    }
	}

	public function getTasks(){
		return $this->tasks;
	}
}
