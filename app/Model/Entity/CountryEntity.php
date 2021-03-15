<?php
declare(strict_types=1);

/**
 * This file is part of application Jidelnicky
 * @author Milan Lysák <mlysak@email.cz>
 */

namespace App\Model\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class CountryEntity
 *
 * @package App\Model\Entity
 * @ORM\Table (name="country")
 * @ORM\Entity
 */

class CountryEntity
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
     * @ORM\Column (type="string", length=2, nullable=false)
     */
    private $code;

    /**
     * @var string
     * @ORM\Column (type="string", length=80, nullable=false)
     */
    private $name;

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
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * @param string $code
     * @return CountryEntity
     */
    public function setCode(string $code): CountryEntity
    {
        $this->code = $code;
        return $this;
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
     * @return CountryEntity
     */
    public function setName(string $name): CountryEntity
    {
        $this->name = $name;
        return $this;
    }

}