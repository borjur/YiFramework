<?php
/* @var $this DealerRatingsController */
/* @var $model DealerRatings */
?>

<?php
$this->breadcrumbs=array(
	'Dealer Ratings'=>array('index'),
	'Create',
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-list','label'=>'List DealerRatings', 'url'=>array('index')),
	array('icon' => 'glyphicon glyphicon-tasks','label'=>'Manage DealerRatings', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Create','DealerRatings') ?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>