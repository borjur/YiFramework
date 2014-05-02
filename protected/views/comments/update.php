<?php
/* @var $this CommentsController */
/* @var $model Comments */
?>

<?php
$this->breadcrumbs=array(
	'Comments'=>array('index'),
	$model->comment_ID=>array('view','id'=>$model->comment_ID),
	'Update',
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-list','label'=>'List Comments', 'url'=>array('index')),
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Create Comments', 'url'=>array('create')),
    array('icon' => 'glyphicon glyphicon-list-alt','label'=>'View Comments', 'url'=>array('view', 'id'=>$model->comment_ID)),
    array('icon' => 'glyphicon glyphicon-tasks','label'=>'Manage Comments', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Update','Comments '.$model->comment_ID) ?>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>