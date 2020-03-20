<?php


namespace app\models;

use phpDocumentor\Reflection\DocBlock\Tags\Param;
use Yii;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\web\ServerErrorHttpException;
use yii\widgets\ActiveForm;

/**
 * This is the model class for table "answer".
 *
 * @property int $blog_id
 * @property int $created_by
 * @property int $created_at
 *
 * @property User $createdBy
 */
class Likes extends \yii\db\ActiveRecord
{

    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::className(),
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['created_at', null],
                ],
                // if you're using datetime instead of UNIX timestamp:
                // 'value' => new Expression('NOW()'),
            ],
            [
                'class' => BlameableBehavior::class,
                'createdByAttribute' => 'created_by',
                'updatedByAttribute' => null
            ]
        ];
    }

    public static function tableName()
    {
        return 'user_likes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['blog_id', 'created_by', 'created_at'], 'integer'],

        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'created_by' => 'Created By',
            'blog_id' => 'Blog Id'
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     **/


    public function getCreatedBy()
    {
        return $this->hasOne(User::className(), ['id' => 'created_by']);
    }


}
