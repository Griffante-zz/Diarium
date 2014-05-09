<?php
$this->breadcrumbs=array(
	'Horarios'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List horario', 'url'=>array('index')),
	array('label'=>'Manage horario', 'url'=>array('admin')),
);
?>

<h1>Create horario</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>