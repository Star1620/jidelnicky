<?php
declare(strict_types=1);

/**
 * This file is part of application Jidelnicky
 * @author Milan Lysák <mlysak@email.cz>
 */

namespace App\Model\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class RestaurantTypeEntity
 *
 * @package App\Model\Entity
 * @ORM\Table (name="restaurant_type")
 * @ORM\Entity
 */

class RestaurantTypeEntity
{

    /**
     * @var int
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    private $type;

    /**
     * @var string
     * ORM\Column(type="string", lenght=40)
     */
    private $image;

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
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return RestaurantTypeEntity
     */
    public function setType(string $type): RestaurantTypeEntity
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return string
     */
    public function getImage(): string
    {
        return $this->image;
    }

    /**
     * @param string $image
     * @return RestaurantTypeEntity
     */
    public function setImage(string $image): RestaurantTypeEntity
    {
        $this->image = $image;
    }
}