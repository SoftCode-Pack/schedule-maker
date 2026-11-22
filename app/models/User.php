<?php

declare(strict_types=1);

namespace app\models;

use PHP_CodeSniffer\Sniffs\AbstractVariableSniff;
use yii\base\BaseObject;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\db\Expression;
use yii\web\IdentityInterface;

/**
 * @property int $id
 * @property string $email
 * @property string $username
 * @property string $password_hash
 * @property int $status
 * @property string auth_key
 * @property string created_at
 * @property string updated_at
 */

class User extends ActiveRecord implements IdentityInterface
{
    public const ACTIVE_STATUS = 1;

    public static function tableName(): string
    {
        return '{{%user}}';
    }

    public function behaviors(): array
    {
        return [
            [
                'class' => TimestampBehavior::class,
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['created_at', 'updated_at'],
                    ActiveRecord::EVENT_BEFORE_UPDATE => ['updated_at'],
                ],
                'value' => new Expression('NOW()'),
            ],
        ];
    }

    public static function findIdentity($id) : User|null
    {
        return self::findOne($id);
    }

    public function getId(): int|string
    {
        return $this->id;
    }
    public static function findByEmail(string $email): User|null
    {
        return self::findOne(['email' => $email]);
    }

    public function getAuthKey(): string|null
    {
        return $this->auth_key;
    }

    public function validateAuthKey($authKey): bool
    {
        return $this->auth_key === $authKey;
    }

    public static function findIdentityByAccessToken($token, $type = null)
    {
        // TODO: Implement findIdentityByAccessToken() method.
    }
}
