<?php
$this->breadcrumbs=array(
	'Cadastros'=>array("site/page&view=cadastros"),
	'Cursos'=>array('index'),
	$model->id.'. '.$model->nome,
);

$this->menu=array(
	array('label'=>'Listar cursos', 'url'=>array('index')),
	array('label'=>'Inserir cursos', 'url'=>array('create')),
	array('label'=>'Editar curso', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Excluir curso', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Você tem certeza que deseja excluir este curso?')),
	array('label'=>'Gerenciar cursos', 'url'=>array('admin')),
	array('label'=>'Incluir Disciplina à Matriz Curricular', 'url'=>Yii::app()->createUrl("matriz_curricular/create&curso=".$model->id)),
);
?>

<h1>Curso <?php echo $model->id.'. '.$model->nome; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nome',
		array('label'=>'Coordenador',
			  'value'=>$model->coordenador.'. '.$model->coordenador0->nome),
	),
)); 

?>
</br>
<hr>

<h2>Matriz Curricular</h2>

<?php 
	$dataProviderMatriz = new CActiveDataProvider('matriz_curricular', array(
													'criteria'=>array(
															'condition'=>'curso='.$model->id,
															'order'=>'disciplina',
													),
													'countCriteria'=>array(
															'condition'=>'curso='.$model->id,
															// 'order' and 'with' clauses have no meaning for the count query
													),
													'pagination'=>array(
															'pageSize'=>10,
													),
											));
			
			$this->widget('zii.widgets.grid.CGridView', array(
		    'dataProvider'=>$dataProviderMatriz,
		    'columns'=>array(
		    	array(            // display 'author.username' using an expression
		    		'name'=>'ID',
		    		'value'=>'$data->id',
		    	),
				array(            // display 'author.username' using an expression
		    		'name'=>'Disciplina',
		    		'value'=>'$data->disciplina0->nome',
		    	),
		        array(            // display 'create_time' using an expression
		            'name'=>'Carga Horária',
		            'value'=>'$data->disciplina0->carga_horaria." horas"',
		        ),
				
		        array(            // display a column with "view", "update" and "delete" buttons
					    'class'=>'CButtonColumn',
						'template'=>'{delete}',
						'deleteButtonLabel'=>'Excluir',
						'deleteButtonUrl'=>'Yii::app()->createUrl("matriz_curricular/delete&id=".$data->id)',
		        ),
		    ),
		));

?>