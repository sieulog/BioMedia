<?php

/* @var $this yii\web\View */
/* @var $model common\models\Gallery */

$this->title = Yii::t('backend', 'Create Gallery');
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'Galleries'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="box gallery-create">
    <?= $this->render('_form', [
        'model' => $model,
        'treeParents' => $treeParents,
    ]) ?>
</div>
