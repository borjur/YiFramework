<?php
/* @var $this DealersController */
/* @var $model Dealers */
?>

<?php
$this->breadcrumbs=array(
	'Dealers'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-list','label'=>'List Dealers', 'url'=>array('index')),
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Create Dealers', 'url'=>array('create')),
    array('icon' => 'glyphicon glyphicon-list-alt','label'=>'View Dealers', 'url'=>array('view', 'id'=>$model->id)),
    array('icon' => 'glyphicon glyphicon-tasks','label'=>'Manage Dealers', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Update','Dealers '.$model->id) ?>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>