<?php
declare(strict_types=1);

/**
 * This file is part of application Jidelnicky
 * @author Milan Lysák <mlysak@email.cz>
 */

namespace App\Model\Service;

use App\Model\Entity\RestaurantEntity;
use App\Exception\RestaurantServiceException;
use App\Model\Service\Interfaces\RestaurantInterface;
use App\Model\Manager\RestaurantManager;
use Nette\Utils\ArrayHash;

class RestaurantService implements RestaurantInterface
{

    /** @var RestaurantManager */
    private RestaurantManager $restaurantManager;

    /**
     * RestaurantService constructor.
     *
     * @param RestaurantManager         $restaurantManager
     */
    public function __construct(
        RestaurantManager $restaurantManager
    ) {
        $this->restaurantManager = $restaurantManager;
    }

    public function addRestaurant(ArrayHash $values): RestaurantEntity
    {
        $restaurant = new RestaurantEntity();
        try {
            $restaurant->setName('Restaurace 1');
            $restaurant-> setAddress('Adresa');
            $restaurant->setCreatedBy('Vytvořeno');
            $restaurant->setState(1);
            $restaurant->setType('Typ restaurace');
            $restaurant->setUpdatedBy('Upravil Milan');
            $restaurant->setUrl('URL Link www.xxx.eu');

            $this->persist($restaurant)->flush();

        } catch (\Exception $e) {
            $this->log('Restaurant service add Restaurant');
            //throw new RestaurantServiceException($e->getMessage(), 0, $e);
        }
        return $restaurant;
    }


}