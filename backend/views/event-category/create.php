<?php

/* @var $this yii\web\View */
/* @var $model common\models\EventCategory */

$this->title = Yii::t('backend', 'Create Event Category');
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'Event Categories'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="box event-category-create">
    <?= $this->render('_form', [
        'model' => $model,
        'treeParents' => $treeParents,
    ]) ?>
</div>
