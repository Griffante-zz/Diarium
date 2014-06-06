<?php
$this->breadcrumbs=array(
	'Cadastros'=>array("site/page&view=cadastros"),
	'Professores'=>array('index'),
	'Novo Professor',
);

$this->menu=array(
	array('label'=>'Listar professores', 'url'=>array('index')),
	array('label'=>'Gerenciar professores', 'url'=>array('admin')),
);
?>

<h1>Inserir professor</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model,'user'=>$user)); ?>