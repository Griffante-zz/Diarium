<?php
$this->breadcrumbs=array(
	'Avaliacao Alunos',
);

$this->menu=array(
	array('label'=>'Create avaliacao_aluno', 'url'=>array('create')),
	array('label'=>'Manage avaliacao_aluno', 'url'=>array('admin')),
);
?>

<h1>Avaliacao Alunos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
