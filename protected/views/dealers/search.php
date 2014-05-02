<?php
/* @var $this DealersController */
/* @var $model Dealers */
/* @var $form CActiveForm */
?>

<div class="container">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'dealers-search-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// See class documentation of CActiveForm for details on this,
	// you need to use the performAjaxValidation()-method described there.
	'enableAjaxValidation'=>false,
)); ?>


	<?php echo $form->errorSummary($model); ?>


	<div class="row">
		<?php echo $form->labelEx($model,'Prem_ZipCode'); ?>
		<?php echo $form->textField($model,'Prem_ZipCode'); ?>
		<?php echo $form->error($model,'Prem_ZipCode'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->