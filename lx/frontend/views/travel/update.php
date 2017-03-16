<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Travel */

$this->title = 'Update Travel: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Travels', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="travel-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
