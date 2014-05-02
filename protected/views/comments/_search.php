<?php
/* @var $this CommentsController */
/* @var $model Comments */
/* @var $form BSActiveForm */
?>

<?php $form=$this->beginWidget('bootstrap.widgets.BsActiveForm', array(
    'action'=>Yii::app()->createUrl($this->route),
    'method'=>'get',
)); ?>

    <?php echo $form->textFieldControlGroup($model,'comment_ID'); ?>
    <?php echo $form->textFieldControlGroup($model,'user_ID'); ?>
    <?php echo $form->textFieldControlGroup($model,'dealer_ID'); ?>
    <?php echo $form->textAreaControlGroup($model,'comment',array('rows'=>6)); ?>

    <div class="form-actions">
        <?php echo BsHtml::submitButton('Search',  array('color' => BsHtml::BUTTON_COLOR_PRIMARY,));?>
    </div>

<?php $this->endWidget(); ?>
