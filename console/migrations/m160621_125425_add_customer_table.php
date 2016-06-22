<?php

use yii\db\Schema;
use yii\db\Migration;

class m160621_125425_add_customer_table extends Migration
{
    public function up()
    {
        $this->createTable('{{%customer}}',[
            'id' => $this->primaryKey(),
            'customer' => $this->integer(14),
            'custoemr_name' => $this->string(45),
            'customer_points' => $this->integer(14),
            'customer_image' => $this->string(55)
        ]);
    }

    public function down()
    {
        $this->dropTable('{{%customer}}');
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
