<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Travels';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="travel-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Travel', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            't_title',
            't_site',
            'price',
            'sort',
            'file',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
