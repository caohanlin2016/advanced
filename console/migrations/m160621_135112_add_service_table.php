<?php

use yii\db\Schema;
use yii\db\Migration;

class m160621_135112_add_service_table extends Migration
{
    public function up()
    {
        $this->createTable('{{%service}}',[
            'id' => $this->primaryKey(),
            'service_id' => $this->integer(14),
            'service_name' => $this->string(255),
            'service_price' => $this->string(255),
            'service_detail' => $this->string(255),
            'service_status' => $this->smallInteger()
        ]);
    }

    public function down()
    {
        $this->dropTable('{{%service}}');
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
