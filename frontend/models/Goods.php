<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "goods".
 *
 * @property integer $id
 * @property integer $goods_id
 * @property string $goods_name
 * @property double $goods_price
 * @property string $goods_detail
 * @property integer $goods_status
 * @property string $goods_image
 */
class Goods extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'goods';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['goods_id', 'goods_status'], 'integer'],
            [['goods_price'], 'number'],
            [['goods_name'], 'string', 'max' => 45],
            [['goods_detail', 'goods_image'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'goods_id' => 'Goods ID',
            'goods_name' => 'Goods Name',
            'goods_price' => 'Goods Price',
            'goods_detail' => 'Goods Detail',
            'goods_status' => 'Goods Status',
            'goods_image' => 'Goods Image',
        ];
    }
}
