<?php
/* @var $this BlogController */
/* @var $model Blog */
?>

<?php
$this->breadcrumbs=array(
	'Blogs'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-list','label'=>'List Blog', 'url'=>array('index')),
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Create Blog', 'url'=>array('create')),
    array('icon' => 'glyphicon glyphicon-list-alt','label'=>'View Blog', 'url'=>array('view', 'id'=>$model->id)),
    array('icon' => 'glyphicon glyphicon-tasks','label'=>'Manage Blog', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Update','Blog '.$model->id) ?>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>