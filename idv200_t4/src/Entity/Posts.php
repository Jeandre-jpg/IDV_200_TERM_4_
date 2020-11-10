<?php

namespace App\Entity;

use App\Repository\PostsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PostsRepository::class)
 */
class Posts
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $author_id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $blog_name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $blog_content;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAuthorId(): ?int
    {
        return $this->author_id;
    }

    public function setAuthorId(int $author_id): self
    {
        $this->author_id = $author_id;

        return $this;
    }

    public function getBlogName(): ?string
    {
        return $this->blog_name;
    }

    public function setBlogName(string $blog_name): self
    {
        $this->blog_name = $blog_name;

        return $this;
    }

    public function getBlogContent(): ?string
    {
        return $this->blog_content;
    }

    public function setBlogContent(string $blog_content): self
    {
        $this->blog_content = $blog_content;

        return $this;
    }
}
