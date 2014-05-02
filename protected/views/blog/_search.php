<?php
/* @var $this BlogController */
/* @var $model Blog */
/* @var $form BSActiveForm */
?>

<?php $form=$this->beginWidget('bootstrap.widgets.BsActiveForm', array(
    'action'=>Yii::app()->createUrl($this->route),
    'method'=>'get',
)); ?>

    <?php echo $form->textFieldControlGroup($model,'id'); ?>
    <?php echo $form->textFieldControlGroup($model,'title',array('maxlength'=>255)); ?>
    <?php echo $form->textAreaControlGroup($model,'story',array('rows'=>6)); ?>
    <?php echo $form->textFieldControlGroup($model,'blogdate'); ?>

    <div class="form-actions">
        <?php echo BsHtml::submitButton('Search',  array('color' => BsHtml::BUTTON_COLOR_PRIMARY,));?>
    </div>

<?php $this->endWidget(); ?>
