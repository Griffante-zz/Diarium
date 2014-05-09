<?php
$this->breadcrumbs=array(
	'Diario De Classes',
);

$this->menu=array(
	array('label'=>'Create diario_de_classe', 'url'=>array('create')),
	array('label'=>'Manage diario_de_classe', 'url'=>array('admin')),
);
?>

<h1>Diario De Classes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
