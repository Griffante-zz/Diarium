<?php
$this->breadcrumbs=array('Disciplinas'=>array("site/page&view=disciplinas"),
	$model->nome
		

);

?>

<div class='view' >
<h1><?php echo $model->nome?></h1>

<hr>
<h2>Ementa</h2>
<br>
<h2>Aulas</h2>
<?php 
	
	
	$turma = turma::model()->findByAttributes(array('disciplina'=>$model->id,'professor'=>Yii::app()->user->id));
	
	$diario = diario_de_classe::model()->findByAttributes(array('turma'=>$turma->id,));
	
	if(!isset($diario)){
		$diario = new diario_de_classe();
		$diario->id = 0;
	}
	
	$dataProviderAulas = new CActiveDataProvider('aula', array(
			'criteria'=>array(
					'condition'=>'diario='.$diario->id,
					'order'=>'data',
			),
			'countCriteria'=>array(
					'condition'=>'diario='.$diario->id,
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
    		'value'=>'date("d/m/Y", strtotime($data->data))',
    	),
        array(            // display 'create_time' using an expression
            'name'=>'Início',
            'value'=>'$data->horario0->inicio',
        ),
		array(            // display 'create_time' using an expression
            'name'=>'Término',
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
<br>
<h2>Avaliações</h2>
<?php 

	$dataProviderAvaliacao = new CActiveDataProvider('avaliacao', array(
			'criteria'=>array(
					'condition'=>'turma='.$turma->id,
					'order'=>'data',
			),
			'countCriteria'=>array(
					'condition'=>'turma='.$turma->id,
					// 'order' and 'with' clauses have no meaning for the count query
			),
			'pagination'=>array(
					'pageSize'=>10,
			),
	));
	
	$this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider'=>$dataProviderAvaliacao,
    'columns'=>array(
    	array(            // display 'author.username' using an expression
    		'name'=>'id',
    		'value'=>'$data->id',
    	),
		array(            // display 'author.username' using an expression
    		'name'=>'data',
    		'value'=>'date("d/m/Y", strtotime($data->data))',
    	),
        array(            // display 'create_time' using an expression
            'name'=>'Início',
            'value'=>'$data->horario0->inicio',
        ),
		array(            // display 'create_time' using an expression
            'name'=>'Término',
            'value'=>'$data->horario0->termino',
        ),
        array(            // display a column with "view", "update" and "delete" buttons
			    'class'=>'CButtonColumn',
        		'viewButtonLabel'=>'Visualizar',
				'template'=>'{view},{delete}',
				'viewButtonUrl'=>'Yii::app()->createUrl("avaliacao/view&id=".$data->id)',
				'deleteButtonUrl'=>'Yii::app()->createUrl("avaliacao/delete&id=".$data->id)',
        ),
    ),
));

?>

<div class="row buttons">
		<?php echo CHtml::submitButton('Inserir Avaliação', array('submit'=> Yii::app()->createUrl("avaliacao/create&turma=".$turma->id))); ?>
</div>


</div>



<br>