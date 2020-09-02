<?php
/* @var $this PopupsController */
/* @var $model Popups */

$this->breadcrumbs=array(
	'Popups'=>array('index'),
	$model->name=>array('view','id'=>$model->pu_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Popups', 'url'=>array('index')),
	array('label'=>'Create Popups', 'url'=>array('create')),
	array('label'=>'View Popups', 'url'=>array('view', 'id'=>$model->pu_id)),
	array('label'=>'Manage Popups', 'url'=>array('admin')),
);
?>

<h1>Update Popups <?php echo $model->pu_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>