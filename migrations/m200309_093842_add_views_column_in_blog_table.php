<?php

use yii\db\Migration;

/**
 * Class m200309_093842_add_views_column_in_blog_table
 */
class m200309_093842_add_views_column_in_blog_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn(\app\models\Blog::tableName(), 'views', $this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn(\app\models\Blog::tableName(), 'views');
    }


}
