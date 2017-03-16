<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\YiiNews */

$this->title = 'Update Yii News: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Yii News', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="yii-news-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
