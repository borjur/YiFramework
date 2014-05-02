<?php
/* @var $this BlogController */
/* @var $model Blog */
?>

<?php
$this->breadcrumbs=array(
	'Blogs'=>array('index'),
	$model->title,
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-list','label'=>'List Blog', 'url'=>array('index')),
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Create Blog', 'url'=>array('create')),
	array('icon' => 'glyphicon glyphicon-edit','label'=>'Update Blog', 'url'=>array('update', 'id'=>$model->id)),
	array('icon' => 'glyphicon glyphicon-minus-sign','label'=>'Delete Blog', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
    array('icon' => 'glyphicon glyphicon-tasks','label'=>'Manage Blog', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('View','Blog '.$model->id) ?>

<?php $this->widget('zii.widgets.CDetailView',array(
	'htmlOptions' => array(
		'class' => 'table table-striped table-condensed table-hover',
	),
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'story',
		'blogdate',
	),
)); ?>