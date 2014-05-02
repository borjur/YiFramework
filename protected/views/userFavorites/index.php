<?php
/* @var $this UserFavoritesController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'My Favorites',
);

//$this->menu=array(
//    array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Create UserFavorites', 'url'=>array('create')),
//    array('icon' => 'glyphicon glyphicon-tasks','label'=>'Manage UserFavorites', 'url'=>array('admin')),
//);
?>

<?php echo BsHtml::pageHeader('My Favorites') ?>
<div class="container">
<?php $this->widget('bootstrap.widgets.BsListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
</div>