<?php

namespace App\Entity;

use Doctrine\Common\Collections\Collection;
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
     * @ORM\JoinColumn(name="user", referencedColumnName="id")
     */
    private $creator;

    public function __construct()
    {
        $this->voters = new ArrayCollection();
        $this->votes = new ArrayCollection();
    }

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $minimumVotes;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $tagList;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Vote", mappedBy="post_id")
     */
    private $votes;

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
        return $this->creator;
    }

    public function setCreator(int $creator): self
    {
        $this->creator = $creator;

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
