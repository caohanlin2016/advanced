<?php

use yii\db\Schema;
use yii\db\Migration;

class m160621_135018_add_car_table extends Migration
{
    public function up()
    {
        $this->createTable('{{%car}}',[
            'id' => $this->primaryKey(),
            'customer_id' => $this->integer(14),
            'car_license' => $this->string(45),
            'car_detail' => $this->string(255),
            'car_address' => $this->string(255)
        ]);
    }

    public function down()
    {
        $this->dropTable('{{%car}}');
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
