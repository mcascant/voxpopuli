<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use App\Entity\Post;


/**
 * @ORM\Entity(repositoryClass="App\Repository\CommentsRepository")
 */
class Comments
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @ORM\Column(type="text")
     */
    private $body;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Post", mappedBy="post.id")
     * @ORM\JoinColumn(nullable=false)
     */
    private $postId;
    
    /**
     * @ORM\OneToMany(targetEntity="App\Entity\User", mappedBy="user.id")
     */
    private $userId;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }
    
    public function getBody(): ?string
    {
        return $this->body;
    }
    
    public function getPostId()
    {
        return $this->postId;
    }
    
    public function getUserId(): ?User
    {
        return $this->userId;
    }

    
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }
 

    public function setBody(string $body): self
    {
        $this->body = $body;

        return $this;
    }

    
    public function setPostId(?Post $postId): self
    {
        $this->postId = $postId;

        return $this;
    }
    
    public function setUserId(?Post $userId): self
    {
        $this->postId = $userId;
        
        return $this;
    }
}
