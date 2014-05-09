<?php
$this->breadcrumbs=array(
	'Matriz Curriculars'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List matriz_curricular', 'url'=>array('index')),
	array('label'=>'Manage matriz_curricular', 'url'=>array('admin')),
);
?>

<h1>Create matriz_curricular</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>