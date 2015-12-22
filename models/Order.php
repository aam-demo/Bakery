<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * fake/virtual Model 
 */
class Order extends Model {

    public $Product, $Quantity, $ShippingAddress, $EmailAddress;

}
