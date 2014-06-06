<?php
$this->breadcrumbs=array(
	'Cadastros'=>array("site/page&view=cadastros"),
	'Alunos'=>array('index'),
	'Novo Aluno',
);

$this->menu=array(
	array('label'=>'Listar alunos', 'url'=>array('index')),
	array('label'=>'Gerenciar aluno', 'url'=>array('admin')),
);
?>

<h1>Inserir aluno</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model,'user'=>$user)); ?>