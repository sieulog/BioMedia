<?php

/* @var $this yii\web\View */
/* @var $model common\models\GalleryCategory */

$this->title = Yii::t('backend', 'Create Gallery Category');
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'Gallery Categories'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="box gallery-category-create">
    <?= $this->render('_form', [
        'model' => $model,
        'treeParents' => $treeParents,
    ]) ?>
</div>
