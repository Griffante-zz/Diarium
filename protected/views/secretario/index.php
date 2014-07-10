<?php
$this->breadcrumbs=array(
	'Cadastros'=>array("site/page&view=cadastros"),
	'Secretários',
);

$this->menu=array(
	array('label'=>'Inserir secretário', 'url'=>array('create')),
	array('label'=>'Gerenciar secretários', 'url'=>array('admin')),
);
?>

<h1>Secretários</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
