<?php

use yii\db\Schema;
use yii\db\Migration;

class m160621_125358_add_order_table extends Migration
{
    public function up()
    {
        $this->createTable('{{%breakfast_order}}',[
            'id' => $this->primaryKey(),
            'ordre_id' => $this->string(55),
            'goods_list' => $this->string(55),
            'need_pay' => $this->float(55),
            'real_pay' => $this->float(55),
            'address_id' => $this->integer(14),
            'customer_id' => $this->integer(14),
            'order_type' => $this->smallInteger(),
            'deliver_at' => $this->smallInteger(),
            'contact' => $this->string(45),
            'contact_tel' => $this->integer(11),
            'order_status' => $this->smallInteger(),
            'create_at' => $this->integer(14),
            'pay_dead_at' => $this->integer(14)
        ]);
    }

    public function down()
    {
        $this->dropTable('{{%breakfast_order}}');
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
