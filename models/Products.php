<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Products".
 *
 * @property integer $Id
 * @property string $Name
 * @property string $Description
 * @property string $Price
 * @property string $ImageName
 */
class Products extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Products';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Name', 'Description', 'Price'], 'required'],
            [['Price'], 'number'],
            [['Name', 'ImageName'], 'string', 'max' => 50],
            [['Description'], 'string', 'max' => 1000]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Id' => 'ID',
            'Name' => 'Name',
            'Description' => 'Description',
            'Price' => 'Price',
            'ImageName' => 'Image Name',
        ];
    }
}
