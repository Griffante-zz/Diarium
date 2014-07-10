<?php
$this->breadcrumbs=array(
	'Cadastros'=>array("site/page&view=cadastros"),
	'Alunos'=>array('index'),
	$model->id.'. '.$model->nome=>array('view', 'id'=>$model->id),
	'Editar',
);

$this->menu=array(
	array('label'=>'Listar alunos', 'url'=>array('index')),
	array('label'=>'Inserir aluno', 'url'=>array('create')),
	array('label'=>'Visualizar aluno', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Gerenciar alunos', 'url'=>array('admin')),
);
?>

<h1>Editar aluno <?php echo $model->id.'. '.$model->nome; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model,'user'=>$user, 'matricula'=>$matricula)); ?>