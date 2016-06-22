<?php

use yii\db\Schema;
use yii\db\Migration;

class m160622_062519_add_goods_table extends Migration
{
    public function up()
    {
        $this->createTable('{{%goods}}',[
            'id' => $this->primaryKey(),
            'goods_id' => $this->integer(14),
            'goods_name' => $this->string(45),
            'goods_price' => $this->float(45),
            'goods_detail' => $this->string(255),
            'goods_status' => $this->smallInteger(),
            'goods_image' => $this->string(255)
        ]);
    }

    public function down()
    {
        $this->dropTable('{{%goods}}');
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
