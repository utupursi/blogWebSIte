<?php


namespace app\models;


use yii\helpers\VarDumper;
use yii\base\Model;

class SignupForm extends Model
{
    public $firstName;
    public $lastName;
    public $email;
    public $username;
    public $password;
    public $city;
    public $country;
    public $address;
    public $password_repeat;

    public function rules()
    {
        return [
            [['firstName', 'lastName', 'username', 'password', 'password_repeat', 'email'], 'required'],
            [['username', 'password', 'password_repeat'], 'string', 'min' => 4, 'max' => 16],
            ['password_repeat', 'compare', 'compareAttribute' => 'password'],
            ['email', 'filter', 'filter' => 'trim'],
            ['email', 'email'],
            [['city', 'country', 'address'], 'string'],
            [['city', 'country'], 'required'],
            ['username', 'checkUsername']
        ];
    }

    public function checkUsername($attribute)
    {
        $user = User::findOne(['username' => $this->username]);
        if ($user) {
            $this->addError($attribute, 'user exist');
        }
    }

    public function signup()
    {
        $user = new User();
        $userAddress = new UserAddress();
        $user->firstName = $this->firstName;
        $user->lastName = $this->lastName;
        $user->username = $this->username;
        $user->email = $this->email;
        $userAddress->city = $this->city;
        $userAddress->country = $this->country;
        $userAddress->address = $this->address;
        $user->password = \Yii::$app->security->generatePasswordHash($this->password);
        $user->access_token = \Yii::$app->security->generateRandomString();
        $user->authKey = \Yii::$app->security->generateRandomString();

        if ($user->save() && $userAddress->save()) {
            return true;
        }
        \Yii::error('User  was not saved' . VarDumper::dumpAsString($this->errors));
        return false;
    }

}