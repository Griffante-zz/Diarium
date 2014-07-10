<?php
$this->breadcrumbs=array(
	'Cadastros'=>array("site/page&view=cadastros"),
	'Disciplinas',
);


$this->menu=array(
	array('label'=>'Inserir disciplina', 'url'=>array('create')),
	array('label'=>'Gerenciar disciplinas', 'url'=>array('admin')),
);


?>

<h1>Disciplinas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
