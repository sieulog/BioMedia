<?php

/* @var $this yii\web\View */
/* @var $model common\models\PostCategory */

$this->title = Yii::t('backend', 'Create Post Category');
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'Post Categories'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="box post-category-create">
    <?= $this->render('_form', [
        'model' => $model,
        'treeParents' => $treeParents,
    ]) ?>
</div>
