<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\YiiNews */

$this->title = 'Create Yii News';
$this->params['breadcrumbs'][] = ['label' => 'Yii News', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="yii-news-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
