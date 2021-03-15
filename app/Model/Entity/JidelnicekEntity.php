<?php
declare(strict_types=1);

/**
 * This file is part of application Jidelnicky
 * @author Milan Lysák <mlysak@email.cz>
 */

namespace App\Model\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class JidelnicekEntity
 *
 * @package App\Model\Entity
 * @ORM\Table (name="jidelnicek")
 * @ORM\Entity
 */
class JidelnicekEntity
{

    /**
     * @var int
     * @ORM\Id
     * @ORM\Column (type="integer", nullable=false)
     * @ORM\GeneratedValue
     */
    private $id;

    /**
     * @var integer
     * @ORM\ManyToOne(targetEntity="App\Model\Entity\RestaurantEntity")
     */
    private $restaurant;

    /**
     * @var string
     * @ORM\Column (type="string", length=256, nullable=false)
     */
    private $address;

    /**
     * @var string
     * @ORM\Column (type="string", length=256, nullable=false)
     */
    private $url;

    /**
     * @var boolean
     * @ORM\Column (type="boolean", options={"default":false})
     */
    private $state;

    /**
     * @var datetime
     * @ORM\Column (type="datetime", nullable=true, options={"default":"CURRENT_TIMESTAMP"})
     */
    private $created;

    /**
     * @var datetime
     * @ORM\Column (type="datetime", nullable=true, options={"default":"CURRENT_TIMESTAMP"})
     */
    private $updated;

    /**
     * @var string
     * @ORM\Column (type="string", length=60, nullable=false)
     */
    private $createdBy;

    /**
     * @var string
     * @ORM\Column (type="string", length=60, nullable=false)
     */
    private $updatedBy;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return RestaurantEntity
     */
    public function setName(string $name): RestaurantEntity
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @param string $address
     * @return RestaurantEntity
     */
    public function setAddress(string $address): RestaurantEntity
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @param string $url
     * @return RestaurantEntity
     */
    public function setUrl(string $url): RestaurantEntity
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @return bool
     */
    public function isState(): bool
    {
        return $this->state;
    }

    /**
     * @param bool $state
     * @return RestaurantEntity
     */
    public function setState(bool $state): RestaurantEntity
    {
        $this->state = $state;
        return $this;
    }

    /**
     * @return datetime
     */
    public function getCreated(): datetime
    {
        return $this->created;
    }

    /**
     * @param datetime $created
     * @return RestaurantEntity
     */
    public function setCreated(datetime $created): RestaurantEntity
    {
        $this->created = $created;
        return $this;
    }

    /**
     * @return datetime
     */
    public function getUpdated(): datetime
    {
        return $this->updated;
        return $this;
    }

    /**
     * @param datetime $updated
     * @return RestaurantEntity
     */
    public function setUpdated(datetime $updated): RestaurantEntity
    {
        $this->updated = $updated;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreatedBy(): string
    {
        return $this->createdBy;
    }

    /**
     * @param string $createdBy
     * @return RestaurantEntity
     */
    public function setCreatedBy(string $createdBy): RestaurantEntity
    {
        $this->createdBy = $createdBy;
        return $this;
    }

    /**
     * @return string
     */
    public function getUpdatedBy(): string
    {
        return $this->updatedBy;
    }

    /**
     * @param string $updatedBy
     * @return RestaurantEntity
     */
    public function setUpdatedBy(string $updatedBy): RestaurantEntity
    {
        $this->updatedBy = $updatedBy;
        return $this;
    }


}