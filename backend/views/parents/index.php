<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ParentsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Parents';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="parents-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Parents', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'user_id',
            'name',
            'gender',
            'identification_id',
            //'address',
            //'note:ntext',
            //'created',
            //'modified',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
