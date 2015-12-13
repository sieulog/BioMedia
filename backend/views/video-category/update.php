<?php

/* @var $this yii\web\View */
/* @var $model common\models\VideoCategory */

$this->title = Yii::t('backend', 'Update title');
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'Video Categories'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('backend', 'Update');
?>
<div class="box video-category-update">
    <?= $this->render('_form', [
        'model' => $model,
        'treeParents' => $treeParents,
    ]) ?>
</div>
