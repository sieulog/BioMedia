<?php

/* @var $this yii\web\View */
/* @var $model common\models\Event */

$this->title = Yii::t('backend', 'Create Event');
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'Events'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="box event-create">
    <?= $this->render('_form', [
        'model' => $model,
        'treeParents' => $treeParents,
    ]) ?>
</div>
