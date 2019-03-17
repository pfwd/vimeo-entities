<?php
/**
 * Created by PhpStorm.
 * User: peterfisher
 * Date: 15/03/2019
 * Time: 08:23
 */
namespace PFWD\Vimeo\Hydrator\Type;
use PFWD\Vimeo\Entity;

class Video {
    /**
     * @var Entity\Video
     */
    private $entity;

    /**
     * Video constructor.
     * @param array|null        $data
     * @param Entity\Video|null $entity
     */
    public function __construct(array $data = null, Entity\Video $entity = null)
    {
        $this->entity = ($entity) ? $entity : $this->createEntity();

        if(is_array($data)) {
            $this->hydrate($data);
        }
    }

    /**
     * @return Entity\Video
     */
    public function createEntity(): Entity\Video
    {
        return new Entity\Video();
    }

    /**
     * @param array $data
     *
     * @return $this
     */
    public function hydrate(array $data): Video
    {
        $this->setID($data)
            ->setLanguage($data)
            ->setLink($data)
            ->setHeight($data)
            ->setWidth($data)
            ->setDuration($data)
            ->setDescription($data)
            ->setName($data)
            ->setStatus($data)
            ->setCreatedTime($data)
            ->setModifiedTime($data)
            ->setReleaseTime($data);
        ;

        return $this;
    }

    /**
     * @param array $data
     *
     * @return Video
     */
    public function setName(array $data): Video
    {
        if(!empty($data['name'])) {
            $this->entity->setName($data['name']);
        }
        return $this;
    }

    /**
     * @param array $data
     *
     * @return Video
     */
    public function setDescription(array $data): Video
    {
        if(!empty($data['description'])) {
            $this->entity->setDescription($data['description']);
        }
        return $this;
    }

    /**
     * @param array $data
     *
     * @return Video
     */
    public function setLink(array $data): Video
    {
        if(!empty($data['link'])) {
            $this->entity->setLink($data['link']);
        }
        return $this;
    }


    /**
     * @param array $data
     *
     * @return Video
     */
    public function setLanguage(array $data): Video
    {
        if(!empty($data['language'])) {
            $this->entity->setLanguage($data['language']);
        }
        return $this;
    }


    /**
     * @param array $data
     *
     * @return Video
     */
    public function setDuration(array $data): Video
    {
        if(!empty($data['duration'])) {
            $this->entity->setDuration($data['duration']);
        }
        return $this;
    }

    /**
     * @param array $data
     *
     * @return Video
     */
    public function setWidth(array $data): Video
    {
        if(!empty($data['width'])) {
            $this->entity->setWidth($data['width']);
        }
        return $this;
    }

    /**
     * @param array $data
     *
     * @return Video
     */
    public function setHeight(array $data): Video
    {
        if(!empty($data['height'])) {
            $this->entity->setHeight($data['height']);
        }
        return $this;
    }

    /**
     * @param array $data
     *
     * @return Video
     */
    public function setStatus(array $data): Video
    {
        if(!empty($data['status'])) {
            $this->entity->setStatus($data['status']);
        }
        return $this;
    }

    /**
     * @param array $data
     *
     * @return Video
     */
    public function setCreatedTime(array $data): Video
    {
        if(!empty($data['created_time'])) {
            $date = \DateTime::createFromFormat(\DateTime::W3C, $data['created_time']);
            if($date) {
                $this->entity->setCreatedTime($date);
            }
        }
        return $this;
    }

    /**
     * @param array $data
     *
     * @return Video
     */
    public function setModifiedTime(array $data): Video
    {
        if(!empty($data['modified_time'])) {
            $date = \DateTime::createFromFormat(\DateTime::W3C, $data['modified_time']);
            if($date) {
                $this->entity->setModifiedTime($date);
            }
        }
        return $this;
    }

    /**
     * @param array $data
     *
     * @return Video
     */
    public function setReleaseTime(array $data): Video
    {
        if(!empty($data['release_time'])) {
            $date = \DateTime::createFromFormat(\DateTime::W3C, $data['release_time']);
            if($date) {
                $this->entity->setReleaseTime($date);
            }
        }
        return $this;
    }

    /**
     * @param array $data
     *
     * @return Video
     */
    public function setID(array $data): Video
    {
        $id = null;
        if(!empty($data['uri'])) {
            $id = $data['uri'];
            $prefix = '/videos/';
            if (substr($id, 0, strlen($prefix)) == $prefix) {
                $id = substr($id, strlen($prefix));
            }
        }

        if($id) {
            $this->entity->setId($id);
        }

        return $this;
    }

    /**
     * @return Entity\Video
     */
    public function getEntity() : Entity\Video
    {
        return $this->entity;
    }

}