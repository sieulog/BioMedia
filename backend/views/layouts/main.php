<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="layout-top-nav skin-purple">
<?php $this->beginBody() ?>

<div class="wrapper">
    <header class="main-header">
    <?php
    NavBar::begin([
        'brandLabel' => 'One CMS',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar navbar-static-top',
        ],
    ]);
    $menuItems = [
        ['label' => 'Trang chủ', 'url' => ['/site/index']],
    ];
    $menuItems[] = ['label' => 'Quản lý Menu', 'url' => ['/menu/index']];
    $menuItems[] = ['label' => 'Danh mục', 'url' => ['/category/index'], 'items' => [
        ['label' => 'Bài viết', 'url' => ['/category/create', 'module' => 'post']],
        ['label' => 'Sản phẩm', 'url' => ['/category/create', 'module' => 'product']],
    ]];
    $menuItems[] = ['label' => 'Nội dung', 'url' => ['/node/index'], 'items' => [
        ['label' => 'Bài viết', 'url' => ['/node/create', 'module' => 'post']],
        ['label' => 'Trang cố định', 'url' => ['/page/index']],
    ]];
    $menuItems[] = ['label' => 'Sản phẩm', 'url' => ['/product/index']];
    $menuItems[] = ['label' => 'Quảng cáo', 'url' => ['/advertising/index']];
    $menuItems[] = ['label' => 'Email marketing', 'url' => ['/email/index']];
    $menuItems[] = ['label' => 'Cấu hình', 'url' => ['/setting/index']];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    } else {
        $menuItems[] = [
            'label' => 'Thoát (' . Yii::$app->user->identity->username . ')',
            'url' => ['/site/logout'],
            'linkOptions' => ['data-method' => 'post']
        ];
    }
    echo Nav::widget([
        'options' => ['class' => 'nav navbar-nav navbar-custom-menu'],
        'items' => $menuItems,
        'activateParents'=>'true',
        'activateItems'=>'true',
    ]);
    NavBar::end();
    ?>
    </header>
    <section class="content-wrapper">
        <div class="container">
            <h1><?= Html::encode($this->title) ?></h1>
            <?= Alert::widget() ?>
            <?= $content ?>
        </div>
    </section>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; OneCMS <?= date('Y') ?></p>

        <p class="pull-right">Bản quyền thuộc về <a href="http://hatinh.news">OneCMS</a></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
