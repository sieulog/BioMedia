<?php

/* @var $this yii\web\View */
/* @var $model common\models\ReviewCategory */

$this->title = Yii::t('backend', 'Create Review Category');
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'Review Categories'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="box review-category-create">
    <?= $this->render('_form', [
        'model' => $model,
        'treeParents' => $treeParents,
    ]) ?>
</div>
