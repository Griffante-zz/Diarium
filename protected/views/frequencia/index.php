<?php
$this->breadcrumbs=array(
	'Frequencias',
);

$this->menu=array(
	array('label'=>'Create frequencia', 'url'=>array('create')),
	array('label'=>'Manage frequencia', 'url'=>array('admin')),
);
?>

<h1>Frequencias</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
