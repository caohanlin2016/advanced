<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "customer".
 *
 * @property integer $id
 * @property integer $customer
 * @property string $custoemr_name
 * @property integer $customer_points
 * @property string $customer_image
 */
class Customer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'customer';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['customer', 'customer_points'], 'integer'],
            [['custoemr_name'], 'string', 'max' => 45],
            [['customer_image'], 'string', 'max' => 55],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'customer' => 'Customer',
            'custoemr_name' => 'Custoemr Name',
            'customer_points' => 'Customer Points',
            'customer_image' => 'Customer Image',
        ];
    }
}
