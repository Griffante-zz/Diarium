<?php
$this->breadcrumbs=array(
	'Aulas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List aula', 'url'=>array('index')),
	array('label'=>'Manage aula', 'url'=>array('admin')),
);
?>

<h1>Create aula</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>