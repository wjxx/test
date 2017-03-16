<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Cre';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sql-cre">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields to create:</p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'form-cre']); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'password')->passwordInput() ?>
                <?= Html::radio('agree', false, ['label' => '男']);?>
                <?= Html::radio('agree', true, ['label' => '女']);?>
                <br/>
                <?= Html::checkbox('agree', false, ['label' => '你']);?>
                <?= Html::checkbox('agree', true, ['label' => '我']);?>
                <div class="form-group">
                    <?= Html::submitButton('Create', ['class' => 'btn btn-primary', 'name' => 'cre-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
