<?php
/* @var $this PopupsController */
/* @var $model Popups */

$this->breadcrumbs=array(
	'Popups'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Popups', 'url'=>array('index')),
	array('label'=>'Create Popups', 'url'=>array('create')),
	array('label'=>'Update Popups', 'url'=>array('update', 'id'=>$model->pu_id)),
	array('label'=>'Delete Popups', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pu_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Popups', 'url'=>array('admin')),
);
?>

<h1>View Popups #<?php echo $model->pu_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'pu_id',
		'name',
		'text',
		array(
			'name' => 'show',
			'value' => ($model->show) ? 'Да' : 'Нет',
		),
		'counter',
	),
)); ?>
<div class="row form">
	<label for="Insert_code">Код для вставки</label>
	<textarea rows="2" cols="50" id="Insert_code"><script src="http://yii1.loc/up/<?=$model->pu_id?>"></script></textarea>
</div>
