<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */

/** @var \app\models\RegisterForm $registerForm */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;

$this->title = 'Sign up';
$this->params['breadcrumbs'][] = $this->title;
$this->params['meta_description'] = 'Log in to access your Yii2 application account.';
$this->params['meta_keywords'] = 'ogin, sign in, authentication';
$htmlIcon = <<<HTML
{label}<div class="input-group"><span class="input-group-text" aria-hidden="true">%s</span>{input}</div>{error}{hint}
HTML;
$labelOptions = ['class' => 'form-label fw-semibold small'];
?>
<div class="site-login d-flex align-items-center justify-content-center py-5">


    <?php $form = ActiveForm::begin([
        'id' => 'register-form',
        'enableClientValidation' => true,
    ]); ?>

    <div class="mb-3">
        <?= $form->field($registerForm, 'username', [
            'options' => ['class' => 'mb-0'],
            'inputOptions' => [
                'class' => 'form-control',
                'placeholder' => Yii::t('app', 'Some Body'),
                'autofocus' => true,
            ],
        ]) ?>
    </div>

    <div class="mb-3">
        <?= $form->field($registerForm, 'email', [
            'options' => ['class' => 'mb-0'],
            'inputOptions' => [
                'class' => 'form-control',
                'placeholder' => Yii::t('app', 'somebody@somemail.com'),
                'autofocus' => true,
            ],
        ]) ?>
    </div>

    <div class="mb-3">
        <?= $form->field($registerForm, 'password', [
            'options' => ['class' => 'mb-0'],
            'inputOptions' => [
                'class' => 'form-control',
                'placeholder' => Yii::t('app', '1strongPwd?'),
            ],
        ]) ?>
    </div>
    <div class="mb-4">
        <?= $form->field($registerForm, 'password_confirm', [
            'options' => ['class' => 'mb-0'],
            'inputOptions' => [
                'class' => 'form-control',
                'placeholder' => Yii::t('app', '1strongPwd?'),
            ],
        ]) ?>
    </div>

    <div class="d-grid">
        <?= Html::submitButton(
            'Register',
            [
                'class' => 'btn login-btn btn-lg rounded-3 text-white',
                'name' => 'login-button',
            ],
        ) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>
