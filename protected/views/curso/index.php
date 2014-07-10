<?php
$this->breadcrumbs=array(
	'Cadastros'=>array("site/page&view=cadastros"),		
	'Cursos',
);

$this->menu=array(
	array('label'=>'Inserir curso', 'url'=>array('create')),
	array('label'=>'Gerenciar cursos', 'url'=>array('admin')),
);
?>

<h1>Cursos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
