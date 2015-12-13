<?php

use yii\db\Schema;
use yii\db\Migration;

class m151209_074651_product_module extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%product_category}}', [
            'id' => $this->primaryKey(),
            'parent_id' => $this->integer(),
            'tree' => $this->integer()->notNull(),
            'lft' => $this->integer()->notNull(),
            'rgt' => $this->integer()->notNull(),
            'depth' => $this->integer()->notNull(),
            'title' => $this->string()->notNull(),
            'slug' => $this->string(),
            'image' => $this->string(),
            'content' => $this->text(),

            'meta_title' => $this->string(70),
            'meta_keywords' => $this->string(),
            'meta_description' => $this->string(160),

            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'created_by' => $this->integer(),
            'updated_by' => $this->integer(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
        ], $tableOptions);

        $this->createTable('{{%product_company}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'slug' => $this->string(),
            'image' => $this->string(),
            'content' => $this->text(),

            'meta_title' => $this->string(70),
            'meta_keywords' => $this->string(),
            'meta_description' => $this->string(160),

            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'created_by' => $this->integer(),
            'updated_by' => $this->integer(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
        ], $tableOptions);

        $this->createTable('{{%product}}', [
            'id' => $this->primaryKey(),
            'category_id' => $this->integer()->notNull(),
            'title' => $this->string()->notNull(),
            'slug' => $this->string(),
            'image' => $this->string(),
            'gallery' => $this->string(),
            'content' => $this->text(),

            'price' => $this->integer(15)->defaultValue(0),
            'sku' => $this->string(50),
            'company_id' => $this->integer()->defaultValue(0),

            'meta_title' => $this->string(70),
            'meta_keywords' => $this->string(),
            'meta_description' => $this->string(160),

            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'created_by' => $this->integer(),
            'updated_by' => $this->integer(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
        ], $tableOptions);

        $this->createIndex('idx_product_category', '{{%product_category}}', ['title', 'slug', 'lft','rgt','parent_id']);
        $this->createIndex('idx_product', '{{%product}}', ['title', 'slug', 'category_id', 'company_id']);
    }

    public function down()
    {
        $this->dropTable('{{%product_category}}');
        $this->dropTable('{{%product_company}}');
        $this->dropTable('{{%product}}');
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
