<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "address".
 *
 * @property integer $id
 * @property integer $address_id
 * @property integer $customer_id
 * @property string $community
 * @property string $floor_number
 * @property string $unit_number
 * @property string $house_number
 * @property string $address_detail
 */
class Address extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'address';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['address_id', 'customer_id'], 'integer'],
            [['community', 'floor_number', 'unit_number', 'house_number'], 'string', 'max' => 45],
            [['address_detail'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'address_id' => 'Address ID',
            'customer_id' => 'Customer ID',
            'community' => 'Community',
            'floor_number' => 'Floor Number',
            'unit_number' => 'Unit Number',
            'house_number' => 'House Number',
            'address_detail' => 'Address Detail',
        ];
    }
}
