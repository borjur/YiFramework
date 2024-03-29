<?php
/* @var $this DealerRatingsController */
/* @var $model DealerRatings */
?>

<?php
$this->breadcrumbs=array(
	'Dealer Ratings'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-list','label'=>'List DealerRatings', 'url'=>array('index')),
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Create DealerRatings', 'url'=>array('create')),
    array('icon' => 'glyphicon glyphicon-list-alt','label'=>'View DealerRatings', 'url'=>array('view', 'id'=>$model->id)),
    array('icon' => 'glyphicon glyphicon-tasks','label'=>'Manage DealerRatings', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Update','DealerRatings '.$model->id) ?>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>