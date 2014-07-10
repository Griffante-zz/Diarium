<?php

	if (!Yii::app()->user->isGuest){
		if(Yii::app()->user->role == 'professor'){
			$this->breadcrumbs=array(
				'Disciplinas'=>array("site/page&view=disciplinas"),
				$model->id.'. '.$model->nome);
			$this->layout='//layouts/column1';
		}
		else{
			$this->breadcrumbs=array(
				'Cadastros'=>array("site/page&view=cadastros"),
				'Disciplinas'=>array('index'),
				$model->id.'. '.$model->nome);
		}
	}

		



?>

<?php

	if($this->layout =='//layouts/column1'){

		echo "<div class='view' >
			  <h1>".$model->id.'. '.$model->nome."</h1>
	
		<hr>
		<h2>Ementa</h2>
		<div>
			".$model->ementa."
		</div>
		<br>
		<h2>Aulas</h2>"; 
			
			
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
		
			echo "
			<br>
			<h2>Avaliações</h2>";
		
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
						'template'=>'{view}{delete}',
						'viewButtonUrl'=>'Yii::app()->createUrl("avaliacao/view&id=".$data->id)',
						'deleteButtonUrl'=>'Yii::app()->createUrl("avaliacao/delete&id=".$data->id)',
		        ),
		    ),
		));
		
		echo "
		<div class='row buttons'>";
				echo CHtml::submitButton('Inserir Avaliação', array('submit'=> Yii::app()->createUrl("avaliacao/create&turma=".$turma->id)));
				echo "  ";
				echo CHtml::submitButton('Calcular Média de Notas', array('submit'=> Yii::app()->createUrl("lista_de_alunos/view&turma=1")));
				
		echo "
		</div>
		
		
		</div>
		
		
		
		<br>
		";
	}
	else{

		$this->menu=array(
				array('label'=>'Listar disciplinas', 'url'=>array('index')),
				array('label'=>'Inserir disciplina', 'url'=>array('create')),
				array('label'=>'Editar disciplina', 'url'=>array('update', 'id'=>$model->id)),
				array('label'=>'Excluir disciplina', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Você tem certeza que deseja excluir esta disciplina?')),
				array('label'=>'Gerenciar disciplinas', 'url'=>array('admin')),
		);
		
		
		echo "<h1>Disciplina ".$model->id.'. '.$model->nome."</h1>";
		
		$this->widget('zii.widgets.CDetailView', array(
			'data'=>$model,
			'attributes'=>array(
				'id',
				'nome',
				'carga_horaria',
			),
		));

	}
?>
