<?php
/* @var $this UserFavoritesController */
/* @var $model UserFavorites */
?>

<?php
$this->breadcrumbs=array(
	'User Favorites'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-list','label'=>'List UserFavorites', 'url'=>array('index')),
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Create UserFavorites', 'url'=>array('create')),
    array('icon' => 'glyphicon glyphicon-list-alt','label'=>'View UserFavorites', 'url'=>array('view', 'id'=>$model->id)),
    array('icon' => 'glyphicon glyphicon-tasks','label'=>'Manage UserFavorites', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Update','UserFavorites '.$model->id) ?>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>