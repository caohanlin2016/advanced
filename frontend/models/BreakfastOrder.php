<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "breakfast_order".
 *
 * @property integer $id
 * @property string $ordre_id
 * @property string $goods_list
 * @property double $need_pay
 * @property double $real_pay
 * @property integer $address_id
 * @property integer $customer_id
 * @property integer $order_type
 * @property integer $deliver_at
 * @property string $contact
 * @property integer $contact_tel
 * @property integer $order_status
 * @property integer $create_at
 * @property integer $pay_dead_at
 */
class BreakfastOrder extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'breakfast_order';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['need_pay', 'real_pay'], 'number'],
            [['address_id', 'customer_id', 'order_type', 'deliver_at', 'contact_tel', 'order_status', 'create_at', 'pay_dead_at'], 'integer'],
            [['ordre_id', 'goods_list'], 'string', 'max' => 55],
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
            'goods_list' => 'Goods List',
            'need_pay' => 'Need Pay',
            'real_pay' => 'Real Pay',
            'address_id' => 'Address ID',
            'customer_id' => 'Customer ID',
            'order_type' => 'Order Type',
            'deliver_at' => 'Deliver At',
            'contact' => 'Contact',
            'contact_tel' => 'Contact Tel',
            'order_status' => 'Order Status',
            'create_at' => 'Create At',
            'pay_dead_at' => 'Pay Dead At',
        ];
    }
}
