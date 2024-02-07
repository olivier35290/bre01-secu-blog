<?php
/**
 * @author : Gaellan
 * @link : https://github.com/Gaellan
 */


class Comment
{
    private ? int $id = null;

    /**
     * @param string $content
     * @param string $userId
     * @param string $postId
     */
    public function __construct(private string $content, private string $userId, private string $postId)
    {

    }

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
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @param string $content
     */
    public function setContent(string $content): void
    {
        $this->content = $content;
    }
    
    /**
     * @return string
     */
    public function getUserId(): ?int
    {
        return $this->userId;
    }

    /**
     * @param string $userId
     */
    public function setUserId(?int $userId): void
    {
        $this->userId = $userId;
    }
   
    /**
     * @return string
     */
    public function getPostId(): ?int
    {
        return $this->postId;
    }

    /**
     * @param string $postId
     */
    public function setPostId(?int $postId): void
    {
        $this->postId = $postId;
    }
}