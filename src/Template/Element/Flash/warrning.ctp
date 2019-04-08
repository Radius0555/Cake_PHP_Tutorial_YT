<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>

<div class="alert alert-warning text-container" role="alert" onclick="this.classList.add('hidden');"><?= $message ?></div>