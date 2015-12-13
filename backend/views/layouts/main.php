<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use common\widgets\Alert;
use yii\widgets\Menu;

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
<body class="skin-purple">
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
            'activateParents' => 'true',
            'activateItems' => 'true',
        ]);
        NavBar::end();
        ?>
    </header>
    <div class="main-sidebar">
        <div class="sidebar">
            <?php
            echo Menu::widget([
                'items' => [
                    ['label' => 'QUẢN LÝ CHỨC NĂNG WEBSITE', null, 'options' => ['class' => 'header']],
                    ['label' => '<i class="fa fa-newspaper-o"></i>Nội dung<i class="fa fa-angle-left pull-right"></i>', 'url' => ['post/index'], 'items' => [
                        ['label' => '<i class="fa fa-circle-o"></i>Danh mục', 'url' => ['post-category/index']],
                        ['label' => '<i class="fa fa-circle-o"></i>Bài viết', 'url' => ['post/index']],
                        ['label' => '<i class="fa fa-circle-o"></i>Nội dung cố định', 'url' => ['page/index']],
                    ]],
                    ['label' => '<i class="fa fa-gg"></i>Đánh giá<i class="fa fa-angle-left pull-right"></i>', 'url' => ['review/index'], 'items' => [
                        ['label' => '<i class="fa fa-circle-o"></i>Danh mục', 'url' => ['review-category/index']],
                        ['label' => '<i class="fa fa-circle-o"></i>Bài viết', 'url' => ['review/index']],
                    ]],
                    ['label' => '<i class="fa fa-shopping-cart"></i>Sản phẩm<i class="fa fa-angle-left pull-right"></i>', 'url' => ['product/index'], 'items' => [
                        ['label' => '<i class="fa fa-circle-o"></i>Danh mục', 'url' => ['product-category/index']],
                        ['label' => '<i class="fa fa-circle-o"></i>Sản phẩm', 'url' => ['product/index']],
                        ['label' => '<i class="fa fa-circle-o"></i>Hãng sản xuất', 'url' => ['product-company/index']],
                    ]],
                    ['label' => '<i class="fa fa-film"></i>Video<i class="fa fa-angle-left pull-right"></i>', 'url' => ['video/index'], 'items' => [
                        ['label' => '<i class="fa fa-circle-o"></i>Danh mục', 'url' => ['video-category/index']],
                        ['label' => '<i class="fa fa-circle-o"></i>Video', 'url' => ['video/index']],
                    ]],
                    ['label' => '<i class="fa fa-photo"></i>Thư viện ảnh<i class="fa fa-angle-left pull-right"></i>', 'url' => ['gallery/index'], 'items' => [
                        ['label' => '<i class="fa fa-circle-o"></i>Danh mục', 'url' => ['gallery-category/index']],
                        ['label' => '<i class="fa fa-circle-o"></i>Hình ảnh', 'url' => ['gallery/index']],
                    ]],
                    ['label' => '<i class="fa fa-calendar"></i>Sự kiện<i class="fa fa-angle-left pull-right"></i>', 'url' => ['event/index'], 'items' => [
                        ['label' => '<i class="fa fa-circle-o"></i>Danh mục', 'url' => ['event-category/index']],
                        ['label' => '<i class="fa fa-circle-o"></i>Sự kiện', 'url' => ['event/index']],
                    ]],
                    ['label' => '<i class="fa fa-book"></i>Tạp chí<i class="fa fa-angle-left pull-right"></i>', 'url' => ['catalogue/index'], 'items' => [
                        ['label' => '<i class="fa fa-circle-o"></i>Danh mục', 'url' => ['catalogue-category/index']],
                        ['label' => '<i class="fa fa-circle-o"></i>Tạp chí', 'url' => ['catalogue/index']],
                    ]],
                ],
                'activateParents' => true,
                'encodeLabels' => false,
                'options' => [
                    'class' => 'sidebar-menu',
                ],
                'itemOptions' => [
                    'class' => 'treeview',
                ],
                'submenuTemplate' => '<ul class="treeview-menu">{items}</ul>'
            ]);
            ?>
        </div><!-- /.sidebar -->
    </div><!-- /.main-sidebar -->
    <section class="content-wrapper">
        <section class="content-header">
            <h1><?= Html::encode($this->title) ?></h1>
        </section>
        <section class="content">
            <?= Alert::widget() ?>
            <?= $content ?>
        </section>
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
