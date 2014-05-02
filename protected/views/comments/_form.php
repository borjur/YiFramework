<?php
/* @var $this CommentsController */
/* @var $model Comments */
/* @var $form BSActiveForm */
?>

<?php $form=$this->beginWidget('bootstrap.widgets.BsActiveForm', array(
    'id'=>'comments-form',
    // Please note: When you enable ajax validation, make sure the corresponding
    // controller action is handling ajax validation correctly.
    // There is a call to performAjaxValidation() commented in generated controller code.
    // See class documentation of CActiveForm for details on this.
    'enableAjaxValidation'=>false,
)); ?>

    <p class="help-block">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>
    
    <?php
    if(Yii::app()->user->id > 0){
        $model->user_ID = Yii::app()->user->id;
        echo CHtml::activeHiddenField($model,'user_ID');
    }else
        echo $form->textFieldControlGroup($model,'user_ID'); ?>
    
    <?php
    if(isset($_GET['dealer_id'])){
        $model->dealer_ID = $_GET['dealer_id'];
        echo CHtml::activeHiddenField($model,'dealer_ID');
    }else
        echo $form->textFieldControlGroup($model,'dealer_ID'); ?>
    <?php echo $form->textAreaControlGroup($model,'comment',array('rows'=>6)); ?>

    <?php echo BsHtml::submitButton('Submit', array('color' => BsHtml::BUTTON_COLOR_PRIMARY)); ?>

<?php $this->endWidget(); ?>
