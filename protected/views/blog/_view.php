<?php
/* @var $this BlogController */
/* @var $data Blog */
?>

<div class="blog-post">
    <h2 class="blog-post-title"><?php echo CHtml::encode($data->title); ?></h2>
    <p class="blog-post-meta"><?php echo CHtml::encode(date("l F j, Y",strtotime($data->blogdate))); ?></p>
    <?php echo CHtml::encode($data->story); ?>
    
</div><!-- /.blog-post -->