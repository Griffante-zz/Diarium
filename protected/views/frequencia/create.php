<?php
$this->breadcrumbs=array(
	'Frequencias'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List frequencia', 'url'=>array('index')),
	array('label'=>'Manage frequencia', 'url'=>array('admin')),
);
?>

<h1>Create frequencia</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>