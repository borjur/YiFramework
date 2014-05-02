<?php
/* @var $this CommentsController */
/* @var $model Comments */
?>

<?php
$this->breadcrumbs=array(
	'Comments'=>array('index'),
	'Create',
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-list','label'=>'List Comments', 'url'=>array('index')),
	array('icon' => 'glyphicon glyphicon-tasks','label'=>'Manage Comments', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Create','Comments') ?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>