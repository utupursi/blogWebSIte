<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%user_profile}}`.
 */
class m200322_110252_create_user_address_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%user_address}}', [
            'id' => $this->primaryKey(),
            'user_id'=>$this->integer(),
            'city'=>$this->string(),
            'country'=>$this->string(),
            'address'=>$this->string(),
        ]);
        $this->addForeignKey(
            'fk-user_address-user_id',
            'user_address',
            'user_id',
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
        $this->dropTable('{{%user_address}}');
    }
}
