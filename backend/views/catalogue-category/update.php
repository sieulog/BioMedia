<?php

/* @var $this yii\web\View */
/* @var $model common\models\CatalogueCategory */

$this->title = Yii::t('backend', 'Update title');
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'Catalogue Categories'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('backend', 'Update');
?>
<div class="box catalogue-category-update">
    <?= $this->render('_form', [
        'model' => $model,
        'treeParents' => $treeParents,
    ]) ?>
</div>
