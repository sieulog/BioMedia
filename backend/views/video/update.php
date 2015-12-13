<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Video */

$this->title = Yii::t('backend', 'Update {modelClass}: ', [
    'modelClass' => 'Video',
]) . ' ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'Videos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('backend', 'Update');
?>
<div class="box video-update">
    <?= $this->render('_form', [
        'model' => $model,
        'treeParents' => $treeParents,
    ]) ?>
</div>
