<?php
$this->breadcrumbs=array(
	'Cadastros'=>array("site/page&view=cadastros"),
	'Alunos',
);

$this->menu=array(
	array('label'=>'Inserir aluno', 'url'=>array('create')),
	array('label'=>'Gerenciar alunos', 'url'=>array('admin')),
);
?>

<h1>Alunos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
