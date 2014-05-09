<?php
$this->breadcrumbs=array('Disciplinas'=>array("site/page&view=disciplinas"),
	$model->nome
);

$this->menu=array(
	array('label'=>'List disciplina', 'url'=>array('index')),
	array('label'=>'Create disciplina', 'url'=>array('create')),
	array('label'=>'Update disciplina', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete disciplina', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage disciplina', 'url'=>array('admin')),
);
?>
<!--
<h1>View disciplina #<?php echo $model->id; ?></h1>
-->

<div class='view' >
<h1><?php echo $model->nome?></h1>

<hr>
<h2>Ementa</h2>
<br>
<h2>Aulas</h2>
<?php 

	$dataProviderAulas = new CActiveDataProvider('aula', array(
			'criteria'=>array(
					'condition'=>'diario=1',
					'order'=>'data',
			),
			'countCriteria'=>array(
					'condition'=>'diario=1',
					// 'order' and 'with' clauses have no meaning for the count query
			),
			'pagination'=>array(
					'pageSize'=>10,
			),
	));
	
	$this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider'=>$dataProviderAulas,
    'columns'=>array(
    	array(            // display 'author.username' using an expression
    		'name'=>'id',
    		'value'=>'$data->id',
    	),
		array(            // display 'author.username' using an expression
    		'name'=>'data',
    		'value'=>'$data->data',
    	),
        array(            // display 'create_time' using an expression
            'name'=>'Início',
            'value'=>'$data->horario0->inicio',
        ),
		array(            // display 'create_time' using an expression
            'name'=>'T&#233rmino',
            'value'=>'$data->horario0->termino',
        ),
        array(            // display a column with "view", "update" and "delete" buttons
			    'class'=>'CButtonColumn',
        		'viewButtonLabel'=>'Visualizar',
			    'template'=>'{view}',
				'viewButtonUrl'=>'Yii::app()->createUrl("aula/view&id=".$data->id)',
        ),
    ),
));

?>
</div>

<br>