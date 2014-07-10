<?php
$this->breadcrumbs=array(
	'Cadastros'=>array("site/page&view=cadastros"),
	'Turmas',
);

$this->menu=array(
	array('label'=>'Inserir turma', 'url'=>array('create')),
	array('label'=>'Gerenciar turmas', 'url'=>array('admin')),
);
?>

<h1>Turmas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
