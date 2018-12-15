<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use App\Entity\User;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PostRepository")
 */

class Post
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
    private $text;

    /**
     * @ORM\Column(type="integer")
     */
    private $pubDate;

    /**
     * @ORM\Column(type="integer")
     * @ORM\ManyToOne(targetEntity="App\Entity\User")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $creator;
    
    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\User", inversedBy="posts")
     * @ORM\JoinTable(name="vote")
     */
    private $voters;
    
    public function __construct()
    {
        $this->voters = new ArrayCollection();
    }

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $minimumVotes;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $tagList;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(string $text): self
    {
        $this->text = $text;

        return $this;
    }

    public function getPubDate(): ?int
    {
        return $this->pubDate;
    }

    public function setPubDate(int $pubDate): self
    {
        $this->pubDate = $pubDate;

        return $this;
    }

    public function getCreator(): ?int
    {
        return $this->userId;
    }

    public function setCreator(int $userId): self
    {
        $this->userId = $userId;

        return $this;
    }
    
    /**
     * @return mixed
     */
    public function getVoters()
    {
        return $this->voters;
    }

    /**
     * @param mixed $voters
     */
    public function addVoter(User $voter)
    {
        if (!$this->voters->contains($voter)) {
            $this->voters->add($voter);
        }
        
        return $this;
    }
    /**
     * @param mixed $voters
     */
    public function removeVoter(User $voter)
    {
        if ($this->voters->contains($voter)) {
            $this->voters->remove($voter);
        }
        
        return $this;
    }

    public function getMinimumVotes(): ?int
    {
        return $this->minimumVotes;
    }

    public function setMinimumVotes(?int $minimumVotes): self
    {
        $this->minimumVotes = $minimumVotes;

        return $this;
    }

    public function getTagList(): ?string
    {
        return $this->tagList;
    }

    public function setTagList(?string $tagList): self
    {
        $this->tagList = $tagList;

        return $this;
    }
}
