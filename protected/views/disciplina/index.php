<?php
$this->breadcrumbs=array(
	'Disciplinas',
);


$this->menu=array(
	array('label'=>'Create disciplina', 'url'=>array('create')),
	array('label'=>'Manage disciplina', 'url'=>array('admin')),
);


?>

<h1>Disciplinas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
