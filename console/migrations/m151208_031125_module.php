<?php

use yii\db\Schema;
use yii\db\Migration;

class m151208_031125_module extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%module}}', [
            'title' => $this->string(100),
            'description' => $this->string(100),
        ], $tableOptions);

        $this->addPrimaryKey('pk_title', '{{%module}}', 'title');
    }

    public function down()
    {
        $this->dropTable('{{%module}}');
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
