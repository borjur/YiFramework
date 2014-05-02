<?php
/* @var $this UserFavoritesController */
/* @var $model UserFavorites */
?>

<?php
$this->breadcrumbs=array(
	'User Favorites'=>array('index'),
	$model->id,
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-list','label'=>'List UserFavorites', 'url'=>array('index')),
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Create UserFavorites', 'url'=>array('create')),
	array('icon' => 'glyphicon glyphicon-edit','label'=>'Update UserFavorites', 'url'=>array('update', 'id'=>$model->id)),
	array('icon' => 'glyphicon glyphicon-minus-sign','label'=>'Delete UserFavorites', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
    array('icon' => 'glyphicon glyphicon-tasks','label'=>'Manage UserFavorites', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('View','UserFavorites '.$model->id) ?>

<?php $this->widget('zii.widgets.CDetailView',array(
	'htmlOptions' => array(
		'class' => 'table table-striped table-condensed table-hover',
	),
	'data'=>$model,
	'attributes'=>array(
		'id',
		'user_ID',
		'dealer_ID',
	),
)); ?>