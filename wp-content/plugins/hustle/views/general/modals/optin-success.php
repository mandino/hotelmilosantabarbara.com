<?php
$close_icon = '<svg xmlns="http://www.w3.org/2000/svg" width="50" height="38" viewBox="0 0 50 38" preserveAspectRatio="none" class="hustle-icon hustle-i_checkmark"><path d="M45.114.46c-.61-.614-1.604-.614-2.21 0L19.607 23.65c-.61.618-1.607.618-2.213 0L7.186 13.254c-.302-.308-.698-.46-1.096-.462-.402-.002-.81.15-1.116.462L.464 17.31c-.3.307-.464.693-.464 1.095 0 .404.163.827.465 1.134l10.293 10.8c.608.617 1.606 1.617 2.213 2.23l4.426 4.46c.61.61 1.602.61 2.213 0L49.54 7.15c.61-.61.61-1.617 0-2.23L45.114.46z"/></svg>';
?>

<div class="hustle-modal-success">

    <div class="hustle-modal-success_icon" aria-hidden="true"><?php echo $close_icon; //phpcs:ignore ?></div>

    <div class="hustle-modal-success_message">{{{content.success_message}}}</div>

</div>