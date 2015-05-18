<?php

namespace Acme\DemoBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;


/**
 * Task
 *
 * @ORM\Table(name="task")
 * @ORM\Entity(repositoryClass="Acme\DemoBundle\Entity\Task")
 */
class Task
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50, nullable=false)
     */
    protected $name;

    /**
     * @return int
     */

    /**
     * @Assert\NotBlank()
     * @Assert\Type("\DateTime")
     * @ORM\Column(name="due_date", type="datetime", nullable=false)

     */
    protected $dueDate;
    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="\Acme\DemoBundle\Entity\Tag", mappedBy="task",cascade={"persist"} )
     */
    protected $tags;

    /**
     * @return \Doctrine\Common\Collections\Collection
     */

    public function getTags()
    {
        return $this->tags;
    }

    /**
     * @param mixed $tags
     */
    public function setTags($tags)
    {
        $this->tags = $tags;
    }


    public function __construct() {
        $this->tags = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get dueDate
     *
     * @return \DateTime
     */
    public function getDueDate()
    {
        return $this->dueDate;
    }
    /**
     * Set dueDate
     *
     * @param \DateTime $dueDate
     * @return Task
     */
    public function setDueDate(\DateTime $dueDate = null)
    {
        $this->dueDate = $dueDate;
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
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * Get task
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return string
     */
    public function setName($name)
    {
        $this->name = $name;
    }
}


