<?php
/**
 * This file is part of application Jidelnicky
 * @author Milan Lysák <mlysak@email.cz>
 */

namespace App\Component\Grid\Restaurant;

use App\Model\Manager\RestaurantTypeManager;
use Doctrine\ORM\QueryBuilder;
use App\Model\Entity\RestaurantEntity;
use App\Model\Manager\RestaurantManager;

class RestaurantGrid
{

    /** @var RestaurantManager */
    private $restaurantManager;

    /** @var RestaurantTypeManager */
    private $restaurantTypeManager;

    /**
     * RestaurantGrid constructor.
     *
     * @param RestaurantManager      $restaurantManager
     * @param RestaurantTypeManager  $restaurantTypeManager
     */
    public function __construct(
        RestaurantManager $restaurantManager,
        RestaurantTypeManager $restaurantTypeManager
    ) {
        parent::__construct($gridFactory);
        $this->userManager = $userManager;
        $this->supplierManager = $supplierManager;
    }

}