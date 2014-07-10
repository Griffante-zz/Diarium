<?php
$this->breadcrumbs=array(
	'Cadastros'=>array("site/page&view=cadastros"),
	'Turmas'=>array('index'),
	'Inserir turma',
);

$this->menu=array(
	array('label'=>'Listar turmas', 'url'=>array('index')),
	array('label'=>'Gerenciar turmas', 'url'=>array('admin')),
);
?>

<h1>Inserir turma</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model, 'diario_de_classe'=>$diario_de_classe)); ?>