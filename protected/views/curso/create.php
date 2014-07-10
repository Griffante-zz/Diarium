<?php
$this->breadcrumbs=array(
	'Cadastros'=>array("site/page&view=cadastros"),
	'Cursos'=>array('index'),
	'Inserir curso',
);

$this->menu=array(
	array('label'=>'Listar cursos', 'url'=>array('index')),
	array('label'=>'Gerenciar cursos', 'url'=>array('admin')),
);
?>

<h1>Inserir curso</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>