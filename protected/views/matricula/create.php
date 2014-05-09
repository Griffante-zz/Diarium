<?php
$this->breadcrumbs=array(
	'Matriculas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List matricula', 'url'=>array('index')),
	array('label'=>'Manage matricula', 'url'=>array('admin')),
);
?>

<h1>Create matricula</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>