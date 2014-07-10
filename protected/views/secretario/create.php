<?php
$this->breadcrumbs=array(
	'Cadastros'=>array("site/page&view=cadastros"),
	'Secretários'=>array('index'),
	'Inserir secretário',
);

$this->menu=array(
	array('label'=>'Listar secretários', 'url'=>array('index')),
	array('label'=>'Gerenciar secretários', 'url'=>array('admin')),
);
?>

<h1>Inserir secretário</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model,'user'=>$user)); ?>