<?php

use app\widgets\Alert;
use yii\web\View;

/* @var $this View */
/* @var $content string */ // $content bu layout'un içine gelecek view'ı tutan bir değişkendir.
//Basic layout, main layout içine gelir ve content'in çevresine container ekler.
$this->beginContent('@app/views/layouts/main.php'); ?>

<div class="container my-4">

    <?= Alert::widget() ?>

    <?php echo $content ?>
</div>

<?php $this->endContent(); ?>
