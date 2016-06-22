<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "service".
 *
 * @property integer $id
 * @property integer $service_id
 * @property string $service_name
 * @property string $service_price
 * @property string $service_detail
 * @property integer $service_status
 */
class Service extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'service';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['service_id', 'service_status'], 'integer'],
            [['service_name', 'service_price', 'service_detail'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'service_id' => 'Service ID',
            'service_name' => 'Service Name',
            'service_price' => 'Service Price',
            'service_detail' => 'Service Detail',
            'service_status' => 'Service Status',
        ];
    }
}
