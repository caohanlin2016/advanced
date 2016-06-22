<?php

use yii\db\Schema;
use yii\db\Migration;

class m160621_135043_add_car_wash_order_table extends Migration
{
    public function up()
    {
        $this->createTable('{{%car_wash_order}}',[
            'id' => $this->primaryKey(),
            'ordre_id' => $this->string(55),
            'service_list' => $this->string(55),
            'need_pay' => $this->float(55),
            'real_pay' => $this->float(55),
            'car_id' => $this->integer(14),
            'customer_id' => $this->integer(14),
            'server_at' => $this->smallInteger(),
            'contact' => $this->string(45),
            'contact_tel' => $this->integer(11),
            'order_status' => $this->smallInteger(),
            'create_at' => $this->integer(14),
            'pay_dead_at' => $this->integer(14)
        ]);
    }

    public function down()
    {
        $this->dropTable('{{%car_wash_order}}');
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
