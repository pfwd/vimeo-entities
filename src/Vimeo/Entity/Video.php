<?php
/**
 * Created by PhpStorm.
 * User: peterfisher
 * Date: 15/03/2019
 * Time: 08:13
 */
namespace PFWD\Vimeo\Entity;

class Video {
    /**
     * @var int|null
     */
    private $id = null;
    /**
     * @var string
     */
    private $name = '';
    /**
     * @var string
     */
    private $description = '';

    /**
     * @var string
     */
    private $link = '';

    /**
     * @var int|null
     */
    private $duration = null;

    /**
     * @var int|null
     */
    private $width = null;

    /**
     * @var int|null
     */
    private $height = null;

     /**
     * @var string
     */
    private $language = '';

    /**
     * @var string
     */
    private $status = '';

    /**
     * @var \DateTime|null
     */
    private $createdTime = null;

    /**
     * @var \DateTime|null
     */
    private $modifiedTime = null;

    /**
     * @var \DateTime|null
     */
    private $releaseTime = null;

    /**
     * @return int|null
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     * @return Video
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Video
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return Video
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return string
     */
    public function getLink(): string
    {
        return $this->link;
    }

    /**
     * @param string $link
     * @return Video
     */
    public function setLink(string $link): Video
    {
        $this->link = $link;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getDuration(): ?int
    {
        return $this->duration;
    }

    /**
     * @param int|null $duration
     * @return Video
     */
    public function setDuration(?int $duration): Video
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getWidth(): ?int
    {
        return $this->width;
    }

    /**
     * @param int|null $width
     * @return Video
     */
    public function setWidth(?int $width): Video
    {
        $this->width = $width;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getHeight(): ?int
    {
        return $this->height;
    }

    /**
     * @param int|null $height
     * @return Video
     */
    public function setHeight(?int $height): Video
    {
        $this->height = $height;

        return $this;
    }

    /**
     * @return string
     */
    public function getLanguage(): string
    {
        return $this->language;
    }

    /**
     * @param string $language
     * @return Video
     */
    public function setLanguage(string $language): Video
    {
        $this->language = $language;

        return $this;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @param string $status
     * @return Video
     */
    public function setStatus(string $status): Video
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getCreatedTime(): ?\DateTime
    {
        return $this->createdTime;
    }

    /**
     * @param \DateTime|null $createdTime
     *
     * @return Video
     */
    public function setCreatedTime(?\DateTime $createdTime = null): Video
    {
        if($createdTime instanceof \DateTime) {
            $this->createdTime = $createdTime;
        }

        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getModifiedTime(): ?\DateTime
    {
        return $this->modifiedTime;
    }

    /**
     * @param \DateTime|null $modifiedTime
     *
     * @return Video
     */
    public function setModifiedTime(?\DateTime $modifiedTime = null): Video
    {
        if($modifiedTime instanceof \DateTime) {
            $this->modifiedTime = $modifiedTime;
        }

        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getReleaseTime(): ?\DateTime
    {
        return $this->releaseTime;
    }

    /**
     * @param \DateTime|null $releaseTime
     *
     * @return Video
     */
    public function setReleaseTime(?\DateTime $releaseTime = null): Video
    {
        if($releaseTime instanceof \DateTime) {
            $this->releaseTime = $releaseTime;
        }

        return $this;
    }

}