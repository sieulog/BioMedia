<?php

/* @var $this yii\web\View */
/* @var $model common\models\ProductCompany */

$this->title = Yii::t('backend', 'Update {modelClass}: ', [
    'modelClass' => 'Product Company',
]) . ' ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'Product Companies'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('backend', 'Update');
?>
<div class="box product-company-update">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
