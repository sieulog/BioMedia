<?php

/* @var $this yii\web\View */
/* @var $model common\models\VideoCategory */

$this->title = Yii::t('backend', 'Create Video Category');
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'Video Categories'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="box video-category-create">
    <?= $this->render('_form', [
        'model' => $model,
        'treeParents' => $treeParents,
    ]) ?>
</div>
