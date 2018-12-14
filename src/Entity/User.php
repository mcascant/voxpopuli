<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 * @ORM\Table(name="‘user’")
 *
 */
class User extends BaseUser
{
  /**
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="UUID")
     * @ORM\Column(type="guid")
     */
    protected $id;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }
    
    public function getId(): ?string
    {
       return $this->id;
    }
    
}
