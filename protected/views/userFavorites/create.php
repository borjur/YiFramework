<?php
/* @var $this UserFavoritesController */
/* @var $model UserFavorites */
?>

<?php
$this->breadcrumbs=array(
	'User Favorites'=>array('index'),
	'Create',
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-list','label'=>'List UserFavorites', 'url'=>array('index')),
	array('icon' => 'glyphicon glyphicon-tasks','label'=>'Manage UserFavorites', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Create','UserFavorites') ?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>