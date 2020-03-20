<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%user_likes}}`.
 */
class m200309_132351_add_foreign_key_to_blog_id_column_to_user_likes_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addForeignKey(
            'fk-user_likes-blog_id',
            'user_likes',
            'blog_id',
            'blog',
            'id',
            'SET NULL'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk-user_likes-blog_id', 'user_likes');
    }
}
