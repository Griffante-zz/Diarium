<?php
$this->breadcrumbs=array(
	'Cadastros'=>array("site/page&view=cadastros"),
	'Professores',
);

$this->menu=array(
	array('label'=>'Inserir professor', 'url'=>array('create')),
	array('label'=>'Gerenciar professor', 'url'=>array('admin')),
);
?>

<h1>Professores</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
