<?php
$this->breadcrumbs=array(
	'Horários',
);

$this->menu=array(
	array('label'=>'Criar horário', 'url'=>array('create')),
	array('label'=>'Gerenciar horário', 'url'=>array('admin')),
);
?>

<h1>Horários</h1>

<div class="view">
	<?php 
    /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('grade')); ?>:</b>
	<?php echo CHtml::encode($data->grade); ?>
	<br />
	
	
	
		$dataProvider=new CActiveDataProvider('horario', array(
			'criteria'=>array(
				'condition'=>'grade='.CHtml::encode($data->grade),
				'order'=>'grade',
			),
			)
		);
	*/	
		
		$dataProvider->setCriteria(array(
				'condition'=>'grade=1',
				'order'=>'grade, dia, inicio',
			));
			
		$dataProvider->setPagination(array(
			'pageSize' => 11,
		)); 
		
		$this->widget('zii.widgets.grid.CGridView', array(
			'dataProvider'=>$dataProvider,
			'columns'=>array(         
				'inicio',  
				array('name'=>'Domingo',
					'value'=>'getValor($data, 1)',),  
				array('name'=>'Segunda&#45feira',
					'value'=>'getValor($data, 2)',),  
				array('name'=>'Terça&#45feira',
					'value'=>'getValor($data, 3)',),  
				array('name'=>'Quarta&#45feira',
					'value'=>'getValor($data, 4)',),  
				array('name'=>'Quinta&#45feira',
					'value'=>'getValor($data, 5)',),  
				array('name'=>'Sexta&#45feira',
					'value'=>'getValor($data, 6)',),  
				array('name'=>'Sábado',
					'value'=>'getValor($data, 7)',), 
				'termino',
				array(        
					'class'=>'CButtonColumn',
				),
			),
			'enablePagination'=>false,
		));
		
		function getValor($data, $index){
		
			switch ($index) {
				case 1: if($data->dia == 'domingo'){return $data->id;};
						break;
				case 2: if($data->dia == 'segunda'){return $data->id;};
						break;
				case 3: if($data->dia == 'terca'){return $data->id;};
						break;
				case 4: if($data->dia == 'quarta'){return $data->id;};
						break;
				case 5: if($data->dia == 'quinta'){return $data->id;};
						break;
				case 6: if($data->dia == 'sexta'){return $data->id;};
						break;
				case 7: if($data->dia == 'sabado'){return $data->id;};
						break;
			}
		}
	?>
</div>

<?php 
/*

$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
		
	
)); 
*/

	
?>
