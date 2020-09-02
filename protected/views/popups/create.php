<?php
/* @var $this PopupsController */
/* @var $model Popups */

$this->breadcrumbs=array(
	'Popups'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Popups', 'url'=>array('index')),
	array('label'=>'Manage Popups', 'url'=>array('admin')),
);
?>

<h1>Create Popups</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>