<?php
declare(strict_types=1);

/**
 * This file is part of application Jidelnicky
 * @author Milan Lysák <mlysak@email.cz>
 */

namespace App\Model\Service\Interfaces;

use App\Exception\RestaurantServiceException;
use App\Model\Entity\RestaurantEntity;
use Nette\Utils\ArrayHash;

/**
 * Interface RestaurantInterface
 * @package App\Model\Service\Interfaces
 */
interface RestaurantInterface
{

    /**
     * @param ArrayHash $values
     * @return RestaurantEntity
     * @throws RestaurantServiceException
     */
    public function addRestaurant(ArrayHash $values): RestaurantEntity;

}