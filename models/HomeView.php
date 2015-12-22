<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * random product for homepage ; not really a Model 
 */
class HomeView extends Model {

    public static function AllProducts() {
        $all = Products::find()
                ->all();
        return $all;
    }

    public static function FeaturedProduct() {
        $all_products = self::AllProducts();
        $num_products = sizeof($all_products);
        return $all_products[rand(1, $num_products) - 1];
    }

}
