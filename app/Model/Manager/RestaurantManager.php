<?php
declare(strict_types=1);

/**
 * This file is part of application Jidelnicky
 * @author Milan Lysák <mlysak@email.cz>
 */

namespace App\Model\Manager;

use App\Model\Entity\RestaurantEntity;
use App\Model\Entity\RestaurantTypeEntity;
use Doctrine\ORM\NoResultException;
use Doctrine\ORM\EntityManager;
use Exception;

/**
 * Class RestaurantManager
 * @package App\Model\Manager
 */

class RestaurantManager
{

    /**
     * @throws Exception
     */
    public function afterInit()
    {
        $this->setEntity(RestaurantEntity::class);
    }

    /**
     * @param string $name
     * @return array
     */
    public function getRestaurantByName(string $name): array
    {
        return $this->em->createQueryBuilder()
            ->select('entity.name')
            ->from(RestaurantEntity::class, 'entity')
            ->where('entity.name = :name')
            ->setParameter('name', $name)
            ->getQuery()
            ->getResult();
    }

}