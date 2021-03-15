<?php
declare(strict_types=1);

/**
 * This file is part of application Jidelnicky
 * @author Milan Lysák <mlysak@email.cz>
 */

namespace App\Model\Entity;

use Doctrine\ORM\Mapping as ORM;
use DateTime;

/**
 * Class RestaurantEntity
 *
 * @package App\Model\Entity
 * @ORM\Table(name="restaurant")
 * @ORM\Entity
 */
class RestaurantEntity
{

    const STATE_INACTIVE = 0;
    const STATE_ACTIVE = 1;

    /** @var array */
    const ALLOWED_STATES = [
        self::STATE_ACTIVE => "active",
        self::STATE_INACTIVE => "inactive"
    ];

    /**
     * @var int
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue()
     */
    private $id;

    /**
     * @var string
     * @ORM\Column (type="string", length=60, nullable=false)
     */
    private $name;

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
     * @var int
     * @ORM\Column (type="integer", length=1, options={"default":1})
     */
    private $state;

    /**
     * @var RestaurantTypeEntity
     * @ORM\ManyToOne (targetEntity="RestaurantTypeEntity")
     * @ORM\JoinColumn (name="type", referencedColumnName="id", nullable=false)
     */
    private $type;

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
     * @return int
     */
    public function getState(): int
    {
        return $this->state;
    }

    /**
     * @param int $state
     * @return RestaurantEntity
     */
    public function setState(int $state): RestaurantEntity
    {
        $this->state = $state;
        return $this;
    }

    /**
     * @return RestaurantTypeEntity
     */
    public function getType(): RestaurantTypeEntity
    {
        return $this->type;
    }

    /**
     * @param RestaurantTypeEntity $type
     * @return RestaurantEntity
     */
    public function setType(RestaurantTypeEntity $type): RestaurantTypeEntity
    {
        $this->type = $type;
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