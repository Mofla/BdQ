<?php
    $cakeDescription = 'Boulangerie du Quai';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?> :
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('bootstrap.css') ?>
    <?= $this->Html->css('stylesheet.css') ?>

    <?= $this->Html->script('jquery.js') ?>
    <?= $this->Html->script('jquery-ui.js') ?>
    <?= $this->Html->script('bootstrap.js') ?>


    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>

</head>
<body>

<div class="container-fluid">
    <?= $this->cell('Nav') ?>
    <?= $this->fetch('content') ?>
</div>

<?= $this->Html->script('scripts') ?>
</body>
</html>