<?php

use yii\db\Migration;

/**
 * Class m200309_131519_add_created_at_column_in_user_likes_table
 */
class m200309_131519_add_created_at_column_in_user_likes_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn(\app\models\Likes::tableName(), 'created_at', $this->integer());

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn(\app\models\Likes::tableName(), 'created_at');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200309_131519_add_created_at_column_in_user_likes_table cannot be reverted.\n";

        return false;
    }
    */
}
