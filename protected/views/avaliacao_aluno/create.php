<?php
$this->breadcrumbs=array(
	'Avaliacao Alunos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List avaliacao_aluno', 'url'=>array('index')),
	array('label'=>'Manage avaliacao_aluno', 'url'=>array('admin')),
);
?>

<h1>Create avaliacao_aluno</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>