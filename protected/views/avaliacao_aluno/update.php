<?php
$this->breadcrumbs=array(
	'Avaliacao Alunos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List avaliacao_aluno', 'url'=>array('index')),
	array('label'=>'Create avaliacao_aluno', 'url'=>array('create')),
	array('label'=>'View avaliacao_aluno', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage avaliacao_aluno', 'url'=>array('admin')),
);
?>

<h1>Update avaliacao_aluno <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>