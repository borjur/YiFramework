<?php
/* @var $this DealersController */
/* @var $model Dealers */
?>

<?php
$this->breadcrumbs=array(
	'Dealers'=>array('index'),
	'Create',
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-list','label'=>'List Dealers', 'url'=>array('index')),
	array('icon' => 'glyphicon glyphicon-tasks','label'=>'Manage Dealers', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Create','Dealers') ?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>