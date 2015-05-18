<?php

namespace Acme\DemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="Acme\DemoBundle\Entity\User")
 */

class User
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

//    /**
//     * @var \Doctrine\Common\Collections\Collection
//     * @ORM\OneToMany(targetEntity="Acme\DemoBundle\Entity\Task", mappedBy="user")
//     */
//    private $tasks;


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
     * @return User
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
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
     * Set email
     *
     * @param string $email
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

//    /**
//     * Set tasks
//     *
//     * @param string $tasks
//     * @return User
//     */
//    public function setTasks($tasks)
//    {
//        $this->tasks = $tasks;
//
//        return $this;
//    }
//
//    /**
//
//     * Get tasks
//     *
//     * @return string
//     */
//    public function getTasks()
//    {
//        return $this->tasks;
//    }
//
//    public function __construct() {
//        $this->tasks = new \Doctrine\Common\Collections\ArrayCollection();
//    }
}
