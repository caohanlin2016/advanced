<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "car".
 *
 * @property integer $id
 * @property integer $customer_id
 * @property string $car_license
 * @property string $car_detail
 * @property string $car_address
 */
class Car extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'car';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['customer_id'], 'integer'],
            [['car_license'], 'string', 'max' => 45],
            [['car_detail', 'car_address'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'customer_id' => 'Customer ID',
            'car_license' => 'Car License',
            'car_detail' => 'Car Detail',
            'car_address' => 'Car Address',
        ];
    }
}
