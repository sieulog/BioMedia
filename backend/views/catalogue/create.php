<?php

/* @var $this yii\web\View */
/* @var $model common\models\Catalogue */

$this->title = Yii::t('backend', 'Create Catalogue');
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'Catalogues'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="box catalogue-create">
    <?= $this->render('_form', [
        'model' => $model,
        'treeParents' => $treeParents,
    ]) ?>
</div>
