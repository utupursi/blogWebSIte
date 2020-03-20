<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%user_likes}}`.
 */
class m200309_110024_create_user_likes_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%user_likes}}', [
            'id' => $this->primaryKey(),
            'created_by' => $this->integer(),
            'blog_id' => $this->integer(),
        ]);
        $this->addForeignKey(
            'fk-user_likes-created_by',
            'user_likes',
            'created_by',
            'user',
            'id',
            'SET NULL'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%user_likes}}');
    }
}
