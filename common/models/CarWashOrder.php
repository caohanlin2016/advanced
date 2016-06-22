<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "car_wash_order".
 *
 * @property integer $id
 * @property string $ordre_id
 * @property string $service_list
 * @property double $need_pay
 * @property double $real_pay
 * @property integer $car_id
 * @property integer $customer_id
 * @property integer $server_at
 * @property string $contact
 * @property integer $contact_tel
 * @property integer $order_status
 * @property integer $create_at
 * @property integer $pay_dead_at
 */
class CarWashOrder extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'car_wash_order';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['need_pay', 'real_pay'], 'number'],
            [['car_id', 'customer_id', 'server_at', 'contact_tel', 'order_status', 'create_at', 'pay_dead_at'], 'integer'],
            [['ordre_id', 'service_list'], 'string', 'max' => 55],
            [['contact'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ordre_id' => 'Ordre ID',
            'service_list' => 'Service List',
            'need_pay' => 'Need Pay',
            'real_pay' => 'Real Pay',
            'car_id' => 'Car ID',
            'customer_id' => 'Customer ID',
            'server_at' => 'Server At',
            'contact' => 'Contact',
            'contact_tel' => 'Contact Tel',
            'order_status' => 'Order Status',
            'create_at' => 'Create At',
            'pay_dead_at' => 'Pay Dead At',
        ];
    }
}
