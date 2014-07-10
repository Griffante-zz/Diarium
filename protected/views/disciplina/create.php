<?php
$this->breadcrumbs=array(
	'Cadastros'=>array("site/page&view=cadastros"),		
	'Disciplinas'=>array('index'),
	'Inserir disciplina',
);

$this->menu=array(
	array('label'=>'Listar disciplinas', 'url'=>array('index')),
	array('label'=>'Gerenciar disciplinas', 'url'=>array('admin')),
);
?>

<h1>Inserir disciplina</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>