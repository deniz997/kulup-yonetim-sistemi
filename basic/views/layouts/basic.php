<?php

use app\widgets\Alert;


$this->beginContent('@app/views/layouts/main.php'); ?>

<div class="container my-4">

    <?= Alert::widget() ?>

    <?php echo $content?>
</div>

<?php $this->endContent('@app/views/layouts/main.php'); ?>
