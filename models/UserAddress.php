<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\db\ActiveRecord;
use yii\db\conditions\ConditionInterface;
use yii\web\IdentityInterface;

/**
 * This is the model class for table "users".
 *
 * @property int $id
 * @property string $city
 * @property string $country
 * @property string $address
 * @property int $user_id
 */
class UserAddress extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user_address';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['city','country','address'], 'string'],
            [['city','country'],'required'],
            [['user_id'],'integer']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'city' => 'City',
            'country' => 'Country',
            'address' => 'Address',
            'user_id'=>'User id'
        ];
    }



}
