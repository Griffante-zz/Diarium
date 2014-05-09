<?php
$this->breadcrumbs=array(
	'Turmas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List turma', 'url'=>array('index')),
	array('label'=>'Manage turma', 'url'=>array('admin')),
);
?>

<h1>Create turma</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>