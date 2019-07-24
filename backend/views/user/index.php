<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create User', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'group' => [
                'label' => 'Group',
                'filter' => Html::activeDropDownList($searchModel, 'user_group_id', [1 => 'Admin', 2 => 'Parent'], ['class' => 'form-control', 'prompt' => '-Select Group-']),
                'value' => function ($model) {
                    return $model->userGroup->name;
                },
                'attribute' => 'group'
            ],
            'username',
            'status' => [
                'label' => 'Status',
                'filter' => Html::activeDropDownList($searchModel, 'status', [1 => 'Active', 0 => 'Inactive'], ['class' => 'form-control', 'prompt' => '-Select Status-']),
                'value' => function ($model) {
                    return $model->status == 1 ? 'Active' : 'Inactive';
                },
                'attribute' => 'status'
            ],            
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
