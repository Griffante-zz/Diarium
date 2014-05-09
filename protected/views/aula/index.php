<?php
$this->breadcrumbs=array(
	'Aulas',
);

$this->menu=array(
	array('label'=>'Create aula', 'url'=>array('create')),
	array('label'=>'Manage aula', 'url'=>array('admin')),
);
?>

<h1>Aulas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
