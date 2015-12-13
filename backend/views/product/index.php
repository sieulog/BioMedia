<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ProductSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('backend', 'Products');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="box product-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <div class="box-header">
        <?= Html::a(Yii::t('backend', 'Create Product'), ['create'], ['class' => 'btn btn-success']) ?>
    </div>
    <div class="box-body">
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
//        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'category_id',
            'title',
            'slug',
//            'image',
            // 'gallery',
            // 'content:ntext',
            // 'price',
            // 'sku',
            // 'company_id',
            // 'meta_title',
            // 'meta_keywords',
            // 'meta_description',
            // 'status',
            // 'created_by',
            // 'updated_by',
            // 'created_at',
            // 'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    </div>
</div>
