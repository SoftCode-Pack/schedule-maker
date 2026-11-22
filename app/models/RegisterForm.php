<?php

namespace app\models;

use TheSeer\Tokenizer\Exception;
use Yii;
use yii\base\Model;

class RegisterForm extends Model
{
    public ?string $username = null;
    public ?string $email = null;
    public ?string $password = null;
    public ?string $password_confirm = null;

    public function attributeLabels()
    {
        return [
            'username' => \Yii::t('app', 'Your name'),
            'email' => \Yii::t('app', 'Your email address'),
            'password' => \Yii::t('app', 'Password'),
            'password_confirm' => \Yii::t('app', 'Confirm password'),
        ];
    }
    public function rules(): array
    {
        return [

            [
                ['username','email', 'password', 'password_confirm'],
                'required'
            ],
            [
                'email',
                'email',
                'message' => \Yii::t('app', 'Your email address is not a valid email address')
            ],
            [
                'email',
                'unique',
                'targetClass' => User::class,
                'targetAttribute' => 'email',
                'message' => \Yii::t('app', 'This email address has already been taken')
            ],
            [
                'password_confirm',
                'compare',
                'compareAttribute' => 'password', 'message' => \Yii::t('app', 'Passwords do not match')
            ],
        ];
    }
    public function register() : bool
    {
        try
        {
            $user = new User();
            $user->username = $this->username;
            $user->email = $this->email;
            $user->password_hash = Yii::$app->getSecurity()->generatePasswordHash($this->password);
            $user->status = User::ACTIVE_STATUS;
            $user->auth_key = Yii::$app->getSecurity()->generateRandomString();
            $user->save();
        } catch (\yii\db\Exception|\yii\base\Exception $e)
        {
            Yii::error($e->getMessage(), __METHOD__);
            return false;
        }
        return true;
    }

}
