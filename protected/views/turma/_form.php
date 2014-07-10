<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'turma-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos com <span class="required">*</span> são obrigatórios.</p>

	<?php echo $form->errorSummary($model); ?>
	<?php echo $form->errorSummary($diario_de_classe); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nome'); ?>
		<?php echo $form->textField($model,'nome',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nome'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'disciplina'); ?>
		<?php echo $form->dropDownList($model,'disciplina',
					CHtml::listData(disciplina::model()->findAll(array('order' => 'nome')),'id', 'nome'),	
					array('empty'=>'Selecionar disciplina', 'id' => 'setLimite')
					); ?>
		<?php echo $form->error($model,'disciplina'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'professor'); ?>
		<?php echo $form->dropDownList($model,'professor',
					CHtml::listData(professor::model()->findAll(array('order' => 'nome')),'id','nome')	
				);	
		?>
		<?php echo $form->error($model,'professor'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($diario_de_classe,'etapa'); ?>
		<?php echo $form->textField($diario_de_classe,'etapa'); ?>
		<?php echo $form->error($diario_de_classe,'etapa'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($diario_de_classe,'periodo'); ?>
		<?php echo $form->textField($diario_de_classe,'periodo'); ?>
		<?php echo $form->error($diario_de_classe,'periodo'); ?>
	</div>
	
	<hr>
	
	<h2>Horários</h2>
	
	<div class="row">
		<?php 
			$grade = 1;
			
			$sql = "SELECT
					h.inicio,
					CASE d.dia
						WHEN 'domingo' THEN d.id
						ELSE ''
					END as domingo,
					CASE s.dia
						WHEN 'segunda' THEN s.id
						ELSE ''
					END as segunda,
					CASE t.dia
						WHEN 'terca' THEN t.id
						ELSE ''
					END as terca,
					CASE q.dia
						WHEN 'quarta' THEN q.id
						ELSE ''
					END as quarta,
					CASE w.dia
						WHEN 'quinta' THEN w.id
						ELSE ''
					END as quinta,
					CASE u.dia
						WHEN 'sexta' THEN u.id
						ELSE ''
					END as sexta,
					CASE x.dia
						WHEN 'sabado' THEN x.id
						ELSE ''
					END as sabado,
					h.termino
				FROM horario H
				left join horario s on h.inicio = s.inicio and s.grade = h.grade and s.dia = 'segunda'
				left join horario t on h.inicio = t.inicio and t.grade = h.grade and t.dia = 'terca'
				left join horario q on h.inicio = q.inicio and q.grade = h.grade and q.dia = 'quarta'
				left join horario w on h.inicio = w.inicio and w.grade = h.grade and w.dia = 'quinta'
				left join horario u on h.inicio = u.inicio and u.grade = h.grade and u.dia = 'sexta'
				left join horario x on h.inicio = x.inicio and x.grade = h.grade and x.dia = 'sabado'
				left join horario d on h.inicio = d.inicio and d.grade = h.grade and d.dia = 'domingo'
				where h.grade = ".$grade."
			    group by h.inicio, h.termino";
			
			//$count = Yii::app()->db->createCommand($sql)->queryScalar();
			$dataProvider = new CSqlDataProvider($sql,
					array(
							'keyField'=>'inicio',
							'pagination'=>false,
					)
			);
			$this->widget('zii.widgets.grid.CGridView', array(
					'dataProvider'=>$dataProvider,
					'htmlOptions'=>array('id'=>'MyID'),
					'columns'=>array(
							'inicio::Início',
							array(
									'class'=>'CLinkColumn',
							        'labelExpression'=>'$data["domingo"]',
							        'urlExpression'=>'Yii::app()->createUrl("horario/view&id=".$data["domingo"])',
							        'header'=>'Domingo'
							),
							array(
									'class'=>'CLinkColumn',
									'labelExpression'=>'$data["segunda"]',
									'urlExpression'=>'Yii::app()->createUrl("horario/view&id=".$data["segunda"])',
									'header'=>'Segunda-feira'
							),
							array(
									'class'=>'CLinkColumn',
									'labelExpression'=>'$data["terca"]',
									'urlExpression'=>'Yii::app()->createUrl("horario/view&id=".$data["terca"])',
									'header'=>'Terça-feira'
							),
							array(
									'class'=>'CLinkColumn',
									'labelExpression'=>'$data["quarta"]',
									'urlExpression'=>'Yii::app()->createUrl("horario/view&id=".$data["quarta"])',
									'header'=>'Quarta-feira'
							),array(
									'class'=>'CLinkColumn',
									'labelExpression'=>'$data["quinta"]',
									'urlExpression'=>'Yii::app()->createUrl("horario/view&id=".$data["quinta"])',
									'header'=>'Quinta-Feira'
							),
							array(
									'class'=>'CLinkColumn',
									'labelExpression'=>'$data["sexta"]',
									'urlExpression'=>'Yii::app()->createUrl("horario/view&id=".$data["sexta"])',
									'header'=>'Sexta-feira'
							),
							array(
									'class'=>'CLinkColumn',
									'labelExpression'=>'$data["sabado"]',
									'urlExpression'=>'Yii::app()->createUrl("horario/view&id=".$data["sabado"])',
									'header'=>'Sábado'
							),
							'termino::Término',
	
					),
			));
			
			
			
			$js = '
				var count = 0;	
					
				$("#MyID table tbody tr td").click(function()
				{
					$this=$(this);
						
					if ($this.text() == ""){
						abort;
					}
						
					var str = $this.text();
					var res = str.substring(2, 3);
						
					if (res == ":"){
						abort;
					}
					
						
					if ($this.hasClass("selecionado")) {
						$this.removeClass();
						count--;
					}
					else{
						if (count == 4){
							abort;	
						}
						$this.addClass("selecionado");
						count++;
					}					
				});
			';
			
			Yii::app()->clientScript->registerScript('selectedCell', $js, CClientScript::POS_READY);
			
		?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Inserir' : 'Salvar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->