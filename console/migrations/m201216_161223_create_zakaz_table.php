<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%zakaz}}`.
 */
class m201216_161223_create_zakaz_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        $this->createTable('{{%zakaz}}', [
            'id' => $this->primaryKey(),
            'product_id' => $this->integer()->notNulL(),
            'full_name' => $this->string()->notNull(),
            'massage' => $this->text()->notNull(),
            'status' => $this->integer()->defaultValue(0),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ]);
        $this->createIndex('index-product_feedback-product_id', 'product_feedback', 'product_id');
        $this->addForeignKey('fkey-product_feedback-product_id', 'product_feedback', 'product_id', 'products', 'id', 'RESTRICT', 'RESTRICT');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%zakaz}}');
    }
}
