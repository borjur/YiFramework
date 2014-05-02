<?php
/* @var $this BlogController */
/* @var $model Blog */
?>

<?php
$this->breadcrumbs=array(
	'Blogs'=>array('index'),
	'Create',
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-list','label'=>'List Blog', 'url'=>array('index')),
	array('icon' => 'glyphicon glyphicon-tasks','label'=>'Manage Blog', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Create','Blog') ?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>