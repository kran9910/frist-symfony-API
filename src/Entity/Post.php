<?php

declare(strict_types=1);

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="app_post")
 * @ORM\Entity()
 */
class Post
{
    /**
     * @var int|null
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int|null
     *
     * @ORM\Column(name="userID", type="integer")
     */
    private $userId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="title", type="string", length=250)
     */
    private $title;

    /**
     * @var string|null
     *
     * @ORM\Column(name="body", type="string", length=5000)
     */
    private $body;

    
    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return int|null
     */
    public function getUserId(): ?int
    {
        return $this->userId;
    }

    /**
     * @param int|null $userId
     */
    public function setUserId(?int $userId): void
    {
        $this->userId = $userId;
    }

    /**
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param string|null $title
     */
    public function setTitle(?string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return string|null
     */
    public function getBody(): ?string
    {
        return $this->body;
    }

    /**
     * @param string|null $body
     */
    public function setBody(?string $body): void
    {
        $this->body = $body;
    }
}