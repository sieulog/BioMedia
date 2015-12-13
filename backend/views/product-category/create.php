<?php

/* @var $this yii\web\View */
/* @var $model common\models\ProductCategory */

$this->title = Yii::t('backend', 'Create Product Category');
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'Product Categories'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="box product-category-create">
    <?= $this->render('_form', [
        'model' => $model,
        'treeParents' => $treeParents,
    ]) ?>
</div>
