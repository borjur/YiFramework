<?php
/* @var $this CommentsController */
/* @var $data Comments */
?>

<div class="view">
<div class="media">
  <div class="media-body">
    <h4 class="media-heading"><?php echo CHtml::encode($data->user_ID); ?></h4>
    <?php echo CHtml::encode($data->comment); ?>
  </div>
</div>
</div>