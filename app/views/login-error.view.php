<?php if (!defined('ABSPATH')) die('-1'); ?>

<div class="container">
    <div class="errors">
        <div class="errors__head">Пожалуйста, обратите внимание:</div>
        <ol class="errors__list">
            <?php foreach ($form_errors as $error): ?>
                <li class="errors__item"><?= $error ?></li>
            <?php endforeach; ?>
        </ol>
    </div>
</div>