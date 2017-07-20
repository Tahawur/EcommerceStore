<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UserregistrationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Userregistrations';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="userregistration-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Userregistration', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'user_id',
            'user_name',
            'user_email:ntext',
            'user_password:ntext',
            'authKey',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
