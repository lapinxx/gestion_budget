<?php $messages = Messages::get(); ?>

<?php if (isset($messages) && !empty($messages)): ?>

    <?php foreach ($messages as $msg) { echo $msg; } ?>

<?php endif; ?>
