<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Products */

$this->title = $model->product_id;
$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="products-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->product_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->product_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

   <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'product_id',
            'category_id',
            'brand_id',
            'product_title:ntext',
            'product_price',
            'product_image:ntext',
            [
            'attribute'=>'product_image',
            'value'=>'http://localhost/basic/web/images/'. $model->product_image,
            'format'=>['image',['width'=>'100', 'height'=>'100']],
            
            ]
        ],
    ]) ?>

</div>
