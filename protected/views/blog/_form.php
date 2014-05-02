<?php
/* @var $this BlogController */
/* @var $model Blog */
/* @var $form BSActiveForm */
?>

<?php $form=$this->beginWidget('bootstrap.widgets.BsActiveForm', array(
    'id'=>'blog-form',
    // Please note: When you enable ajax validation, make sure the corresponding
    // controller action is handling ajax validation correctly.
    // There is a call to performAjaxValidation() commented in generated controller code.
    // See class documentation of CActiveForm for details on this.
    'enableAjaxValidation'=>false,
)); ?>

    <p class="help-block">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

    <?php echo $form->textFieldControlGroup($model,'title',array('maxlength'=>255)); ?>
    <?php echo $form->textAreaControlGroup($model,'story',array('rows'=>6)); ?>
    <?php // echo $form->textFieldControlGroup($model,'blogdate'); ?>
    <div class="container">
        <div class="row">
            <?php echo $form->labelEx($model,'blogdate'); ?><br />
            <?php
            $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                'model' => $model,
                'attribute' => 'blogdate',
                 'options' => array(
                'showOn' => 'both',             // also opens with a button
                'dateFormat' => 'yy-mm-dd',     // format of "2012-12-25"
                'showOtherMonths' => true,      // show dates in other months
                'selectOtherMonths' => true,    // can seelect dates in other months
                'changeYear' => true,           // can change year
                'changeMonth' => true,          // can change month 
                'showButtonPanel' => true,      // show button panel
            )
            ));
            ?>
            <?php echo $form->error($model,'blogdate'); ?>
        </div>
        <br />
        <br />
    </div>
    <?php echo BsHtml::submitButton('Submit', array('color' => BsHtml::BUTTON_COLOR_PRIMARY)); ?>

<?php $this->endWidget(); ?>
