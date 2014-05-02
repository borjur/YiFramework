<?php
/* @var $this DealersController */
/* @var $model Dealers */
/* @var $form BSActiveForm */
?>

<?php $form=$this->beginWidget('bootstrap.widgets.BsActiveForm', array(
    'action'=>Yii::app()->createUrl($this->route),
    'method'=>'get',
)); ?>

    <?php echo $form->textFieldControlGroup($model,'id'); ?>
    <?php echo $form->textFieldControlGroup($model,'Lic_Regn',array('maxlength'=>10)); ?>
    <?php echo $form->textFieldControlGroup($model,'Lic_Dist',array('maxlength'=>10)); ?>
    <?php echo $form->textFieldControlGroup($model,'Lic_Cnty',array('maxlength'=>10)); ?>
    <?php echo $form->textFieldControlGroup($model,'Lic_Type',array('maxlength'=>10)); ?>
    <?php echo $form->textFieldControlGroup($model,'Lic_Xprdte',array('maxlength'=>10)); ?>
    <?php echo $form->textFieldControlGroup($model,'Lic_Seqn',array('maxlength'=>10)); ?>
    <?php echo $form->textFieldControlGroup($model,'Lisc_Name',array('maxlength'=>50)); ?>
    <?php echo $form->textFieldControlGroup($model,'Busn_Name',array('maxlength'=>50)); ?>
    <?php echo $form->textFieldControlGroup($model,'Prem_Street',array('maxlength'=>50)); ?>
    <?php echo $form->textFieldControlGroup($model,'Prem_City',array('maxlength'=>50)); ?>
    <?php echo $form->textFieldControlGroup($model,'Prem_State',array('maxlength'=>10)); ?>
    <?php echo $form->textFieldControlGroup($model,'Prem_ZipCode',array('maxlength'=>20)); ?>
    <?php echo $form->textFieldControlGroup($model,'Mail_Street',array('maxlength'=>50)); ?>
    <?php echo $form->textFieldControlGroup($model,'Mail_City',array('maxlength'=>20)); ?>
    <?php echo $form->textFieldControlGroup($model,'Mail_State',array('maxlength'=>20)); ?>
    <?php echo $form->textFieldControlGroup($model,'Mail_ZipCode',array('maxlength'=>20)); ?>
    <?php echo $form->textFieldControlGroup($model,'Voice_Phone',array('maxlength'=>20)); ?>
    <?php echo $form->textAreaControlGroup($model,'bio',array('rows'=>6)); ?>
    <?php echo $form->textFieldControlGroup($model,'acceptTransfers'); ?>
    <?php echo $form->textFieldControlGroup($model,'transferFee',array('maxlength'=>2)); ?>

    <div class="form-actions">
        <?php echo BsHtml::submitButton('Search',  array('color' => BsHtml::BUTTON_COLOR_PRIMARY,));?>
    </div>

<?php $this->endWidget(); ?>
