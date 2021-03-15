<?php
declare(strict_types=1);

/**
 * This file is part of application Jidelnicky
 * @author Milan Lysák <mlysak@email.cz>
 */

namespace App\Component\Grid\Restaurant;

/**
 * Interface RestaurantGridFactory
 * @package App\Component\Grid\Restaurant
 */

interface RestaurantGridFactory
{
    /**
     * @return \RestaurantGrid
     */
    public function create(): \RestaurantGrid;
}