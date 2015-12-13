<?php

/* @var $this yii\web\View */
/* @var $model common\models\ProductCompany */

$this->title = Yii::t('backend', 'Create Product Company');
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'Product Companies'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="box product-company-create">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
