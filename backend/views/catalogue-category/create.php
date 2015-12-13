<?php

/* @var $this yii\web\View */
/* @var $model common\models\CatalogueCategory */

$this->title = Yii::t('backend', 'Create Catalogue Category');
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'Catalogue Categories'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="box catalogue-category-create">
    <?= $this->render('_form', [
        'model' => $model,
        'treeParents' => $treeParents,
    ]) ?>
</div>
