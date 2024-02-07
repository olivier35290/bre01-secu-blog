<?php
/**
 * @author : Gaellan
 * @link : https://github.com/Gaellan
 */


class Post
{
    private ? int $id = null;

    /**
     * @param string $title
     * @param string $excerpt
     * @param string $content
     * @param string $author
     * @param string $createdAt
     */
    public function __construct(private string $title, private string $excerpt, private string $content, private string $author, private string $createdAt)
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
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getExcerpt(): string
    {
        return $this->excerpt;
    }

    /**
     * @param string $excerpt
     */
    public function setExcerpt(string $excerpt): void
    {
        $this->excerpt = $excerpt;
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
    public function getAuthor(): ?int
    {
        return $this->author;
    }

    /**
     * @param string $author
     */
    public function setAuthor(?int $author): void
    {
        $this->author = $author;
    }
   
    /**
     * @return DateTime
     */
    public function getCreatedAt(): DateTime
    {
        return $this->createdAt;
    }

    /**
     * @param DateTime $createdAt
     */
    public function setCreatedAt(DateTime $createdAt): void
    {
        $this->createdAt = $createdAt;
    }
}