<?php
$this->breadcrumbs=array(
	'Avaliacaos',
);

$this->menu=array(
	array('label'=>'Create avaliacao', 'url'=>array('create')),
	array('label'=>'Manage avaliacao', 'url'=>array('admin')),
);
?>

<h1>Avaliacaos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
