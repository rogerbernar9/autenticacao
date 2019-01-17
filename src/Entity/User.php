<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 * @ORM\Table(name="users")
 */
class User implements UserInterface
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;
    
    /**
     * 
     * @var string
     * @ORM\Column(type="string")
     */    
    private $username;

    /**
     *
     * @var string
     * @ORM\Column(type="string")
     */
    private $password;
    
    /**
     *
     * @var string
     * @ORM\Column(type="string")
     */    
    private $email;

    /**
     * @var array
     * @ORM\Column(type="json")
     */
    private $roles;
    
    

    public function getId()
    {
        return $this->id;
    }
    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return array
     */
    public function getRoles()
    {
        return $this->roles;
    }

    /**
     * @param string $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @param array $roles
     */
    public function setRoles($roles)
    {
        $this->roles[] = $roles;
    }
    
    public function eraseCredentials()
    {
        return null;
    }

    public function getSalt()
    {
        //caso não estiver usando o bcrypt
        return null;
    }


    
    
}
