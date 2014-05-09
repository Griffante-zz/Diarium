<?php
$this->breadcrumbs=array(
	'Cursos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List curso', 'url'=>array('index')),
	array('label'=>'Manage curso', 'url'=>array('admin')),
);
?>

<h1>Create curso</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>