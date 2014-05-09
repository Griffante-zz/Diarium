<?php
$this->breadcrumbs=array(
	'Alunos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List aluno', 'url'=>array('index')),
	array('label'=>'Manage aluno', 'url'=>array('admin')),
);
?>

<h1>Create aluno</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>