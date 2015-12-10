<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'OneCMS';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="login-box">
    <div class="login-logo">
        <h1><?= Html::encode($this->title) ?></h1>
    </div>
    <div class="login-box-body">
        <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

            <?= $form->field($model, 'username') ?>

            <?= $form->field($model, 'password')->passwordInput() ?>
            <div class="row">
                <div class="col-xs-7">
                    <?= $form->field($model, 'rememberMe')->checkbox() ?>
                </div>
                <div class="col-xs-5">
                    <?= Html::submitButton('Đăng nhập', ['class' => 'btn btn-primary form-control', 'name' => 'login-button']) ?>
                </div>
            </div>

        <?php ActiveForm::end(); ?>
    </div>
</div>
