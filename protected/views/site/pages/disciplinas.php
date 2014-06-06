<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - Disciplinas';
$this->breadcrumbs=array(
	'Disciplinas',
);

?>
<h1>Disciplinas</h1>

<?php

	//echo Yii::app()->user->id;
	
	$condition='professor>0';
	
	if(isset(Yii::app()->user->role)){
		if(Yii::app()->user->role == 'professor='){
			$condition='professor='.Yii::app()->user->id;
		}
	}
	
	$dataProvider = new CActiveDataProvider('turma', array(
			'criteria'=>array(
					'condition'=>$condition,
					'order'=>'disciplina',
			),
			'countCriteria'=>array(
					'condition'=>$condition,
					// 'order' and 'with' clauses have no meaning for the count query
			),
			'pagination'=>array(
					'pageSize'=>10,
			),
	));
	
	$this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider'=>$dataProvider,
    'columns'=>array(
    	array(            // display 'author.username' using an expression
    		'name'=>'id',
    		'value'=>'$data->disciplina',
    	),
		array(            // display 'author.username' using an expression
    		'name'=>'Nome',
    		'value'=>'$data->disciplina0->nome',
    	),
        array(            // display 'create_time' using an expression
            'name'=>'Turma',
            'value'=>'$data->nome',
        ),
        array(            // display a column with "view", "update" and "delete" buttons
			    'class'=>'CButtonColumn',
        		'viewButtonLabel'=>'Visualizar',
			    'template'=>'{view}',
				'viewButtonUrl'=>'Yii::app()->createUrl("disciplina/view&id=".$data->disciplina0->id)',
        ),
    ),
));
		
?>
