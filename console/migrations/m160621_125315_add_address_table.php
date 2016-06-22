<?php

use yii\db\Schema;
use yii\db\Migration;

class m160621_125315_add_address_table extends Migration
{
    public function up()
    {
        $this->createTable('{{%address}}',[
            'id' => $this->primaryKey(),
            'address_id' => $this->integer(14),
            'customer_id' => $this->integer(14),
            'community' => $this->string('45'),
            'floor_number' =>$this->string(45),
            'unit_number' => $this->string(45),
            'house_number' => $this->string(45),
            'address_detail' => $this->string(255)
        ]);
    }

    public function down()
    {
        $this->dropTable('{{%address}}');
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
