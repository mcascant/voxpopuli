<?php

namespace App\Entity;

use Doctrine\Common\Collections\Collection;
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

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Vote", mappedBy="user_id")
     */
    private $votes;
    
    public function __construct()
    {
        $this->posts = new ArrayCollection();
        $this->votes = new ArrayCollection();
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

    /**
     * @return Collection|Vote[]
     */
    public function getVotes(): Collection
    {
        return $this->votes;
    }

    public function addVote(Vote $vote): self
    {
        if (!$this->votes->contains($vote)) {
            $this->votes[] = $vote;
            $vote->addUserId($this);
        }

        return $this;
    }

    public function removeVote(Vote $vote): self
    {
        if ($this->votes->contains($vote)) {
            $this->votes->removeElement($vote);
            $vote->removeUserId($this);
        }

        return $this;
    }
    
}
