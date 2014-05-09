<div class="view">
	<b><?php echo CHtml::encode($data->getAttributeLabel('grade')); ?>:</b>
	<?php echo CHtml::encode($data->grade); ?>
	<br />
	<?php 
	
		$dataProvider=new CActiveDataProvider('horario', array(
			'criteria'=>array(
				'condition'=>'grade='.CHtml::encode($data->grade),
				'order'=>'grade',
			),
			)
		);
		
		$this->widget('zii.widgets.grid.CGridView', array(
			'dataProvider'=>$dataProvider,
			'columns'=>array(         
				'inicio',  
				array('name'=>'Domingo',
					'value'=>'$data->id',),  
				array('name'=>'Segunda&#45feira',
					'value'=>'$data->id',),  
				array('name'=>'Terça&#45feira',
					'value'=>'$data->id',),  
				array('name'=>'Quarta&#45feira',
					'value'=>'$data->id',),  
				array('name'=>'Quinta&#45feira',
					'value'=>'$data->id',),  
				array('name'=>'Sexta&#45feira',
					'value'=>'$data->id',),  
				array('name'=>'Sábado',
					'value'=>'$data->id',), 
				'termino',
				array(        
					'class'=>'CButtonColumn',
				),
			),
			'enablePagination'=>false,
		));
		
		
	?>
</div>

<?php
	function getValor($data, $index){
		
		return '';
	
		switch ($index) {
		    case 1: if($data->dia == 'domingo'){
						return '$data->id';
					};
					break;
			case 2: if($data->dia == 'segunda'){return '$data->id';};
					break;
			case 3: if($data->dia == 'terca'){return '$data->id';};
					break;
			case 4: if($data->dia == 'quarta'){return '$data->id';};
					break;
			case 5: if($data->dia == 'quinta'){return '$data->id';};
					break;
			case 6: if($data->dia == 'sexta'){return '$data->id';};
					break;
			case 7: if($data->dia == 'sabado'){return '$data->id';};
					break;
		}
	}
?>
