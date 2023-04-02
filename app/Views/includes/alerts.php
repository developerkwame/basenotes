<?php if (has_session('error_message')) : ?>
    <div id="alert" class="bg-deep-red font-white"><?= error_message() ?></div>
<?php endif; ?>

<?php if (has_session('success_message')) : ?>
    <div id="alert" class="bg-deep-green font-white"><?= success_message() ?></div>
<?php endif; ?>

<?php if (has_session('info_message')) : ?>
    <div id="alert" class="bg-deep-blue font-white"><?= info_message() ?></div>
<?php endif; ?>

<?php if (has_session('warn_message')) : ?>
    <div id="alert" class="bg-light-green font-white"><?= warn_message() ?></div>
<?php endif; ?>
