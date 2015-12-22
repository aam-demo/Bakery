<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * virtual Model 
 */
class OrderForm extends Model {

    public $Product, $OrderQty, $OrderShipping, $OrderEmail;
        
    public function rules()
    {
        return [
   //TODO: email address validation (non-trivial; go to github)
            [['OrderShipping', 'OrderEmail'], 'required'],
            
        ];
    }

}
