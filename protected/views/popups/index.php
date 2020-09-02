<?php
/* @var $this PopupsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Popups',
);

$this->menu=array(
	array('label'=>'Create Popups', 'url'=>array('create')),
	array('label'=>'Manage Popups', 'url'=>array('admin')),
);
?>

<h1>Popups</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
