<?php
/* @var $this DealerRatingsController */
/* @var $model DealerRatings */
?>

<?php
$this->breadcrumbs=array(
	'Dealer Ratings'=>array('index'),
	$model->id,
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-list','label'=>'List DealerRatings', 'url'=>array('index')),
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Create DealerRatings', 'url'=>array('create')),
	array('icon' => 'glyphicon glyphicon-edit','label'=>'Update DealerRatings', 'url'=>array('update', 'id'=>$model->id)),
	array('icon' => 'glyphicon glyphicon-minus-sign','label'=>'Delete DealerRatings', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
    array('icon' => 'glyphicon glyphicon-tasks','label'=>'Manage DealerRatings', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('View','DealerRatings '.$model->id) ?>

<?php $this->widget('zii.widgets.CDetailView',array(
	'htmlOptions' => array(
		'class' => 'table table-striped table-condensed table-hover',
	),
	'data'=>$model,
	'attributes'=>array(
		'id',
		'user_ID',
		'dealer_ID',
		'rating',
	),
)); ?>