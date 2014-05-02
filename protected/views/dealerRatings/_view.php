<?php
/* @var $this DealerRatingsController */
/* @var $data DealerRatings */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_ID')); ?>:</b>
	<?php echo CHtml::encode($data->user_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dealer_ID')); ?>:</b>
	<?php echo CHtml::encode($data->dealer_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rating')); ?>:</b>
	<?php echo CHtml::encode($data->rating); ?>
	<br />


</div>