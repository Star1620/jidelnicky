<?php
declare(strict_types=1);

/**
 * This file is part of application Jidelnicky
 * @author Milan Lysák <mlysak@email.cz>
 */

namespace App\Component\Form\Restaurant;

/**
 * Interface RestaurantFormFactory
 * @package App\Component\Form\Restaurant
 */
interface RestaurantFormFactory
{
    /**
     * @param int|null $restaurantId
     * @return RestaurantForm
     */
    public function create(int $restaurantId = null): RestaurantForm;
}