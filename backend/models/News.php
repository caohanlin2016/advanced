<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property integer $id
 * @property string $new_title
 * @property string $new_content
 * @property integer $create_at
 * @property integer $update_at
 * @property string $announcer
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['new_content'], 'string'],
            [['create_at', 'update_at'], 'integer'],
            [['new_title', 'announcer'], 'string', 'max' => 50],
            [['new_title'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'new_title' => 'New Title',
            'new_content' => 'New Content',
            'create_at' => 'Create At',
            'update_at' => 'Update At',
            'announcer' => 'Announcer',
        ];
    }
}
