<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%todos}}`.
 */
class m240825_161621_create_todos_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%todos}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'description' => $this->text(),
            'status' => $this->boolean()->notNull()->defaultValue(0),  // Status: 0 - Não Feito, 1 - Feito
            'created_at' => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP'), 
            'updated_at' => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%todos}}');
    }
}
