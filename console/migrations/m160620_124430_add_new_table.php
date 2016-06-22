<?php

use yii\db\Schema;
use yii\db\Migration;

class m160620_124430_add_new_table extends Migration
{
    public function up()
    {
        $this->createTable('{{%news}}',[
            'id' => $this->primaryKey(),
            'new_title' => $this->string(50)->defaultValue('')->unique(),
            'new_content' => $this->text(),
            'create_at' => $this->integer(14)->defaultValue(0),
            'update_at' => $this->integer(14)->defaultValue(0),
            'announcer' => $this->string(50)->defaultValue('')
        ]);
    }

    public function down()
    {
        $this->dropTable('{{%news}}');
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
