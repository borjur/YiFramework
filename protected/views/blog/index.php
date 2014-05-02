<?php
/* @var $this BlogController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
/*$this->breadcrumbs=array(
	'Blogs',
);*/

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Create Blog', 'url'=>array('create')),
    array('icon' => 'glyphicon glyphicon-tasks','label'=>'Manage Blog', 'url'=>array('admin')),
);
?>

<?php /* echo BsHtml::pageHeader('Blogs') */ ?>
<?php $this->widget('bootstrap.widgets.BsListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>