<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 * @ORM\Table(name="user")
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
    
    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Post", mappedBy="voters")
     */
    private $posts;
    
    public function __construct()
    {
        $this->posts = new ArrayCollection();
    }

    /**
     * @return mixed
     */
    public function getPosts()
    {
        return $this->posts;
    }

    public function addPost(Post $post)
    {
        if (!$this->posts->contains($post)) {
            $this->posts->add($post);
        }
        
        return $this;
    }
    
    public function removePost(Post $post)
    {
        if ($this->posts->contains($post)) {
          $this->posts->remove($post);
        }
        
        return $this;
    }
    
    public function getId(): ?string
    {
       return $this->id;
    }
    
}
