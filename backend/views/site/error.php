<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->context->layout = 'login';
$this->title = $name;
?>
<section class="content">
    <div class="error-page">
        <h3><i class="fa fa-warning text-red"></i> <?= Html::encode($this->title) ?></h3>

        <div class="alert alert-danger">
            <?= nl2br(Html::encode($message)) ?>
        </div>
        <p>
            Vui lòng liên hệ với <a href="mailto:nguyentuansieu@gmail.com">ban quản trị</a> nếu bạn cho rằng đây là lỗi hệ thống.
            <br />Chân thành cảm ơn bạn rất nhiều.
        </p>
    </div>
</section>
