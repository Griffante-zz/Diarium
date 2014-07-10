<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'matriz-curricular-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos com <span class="required">*</span> são obrigatórios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'disciplina'); ?>
		<?php echo $form->dropDownList($model,'disciplina',
					CHtml::listData(disciplina::model()->findAll(array('order' => 'nome')),'id','nome')	
				); 
		?>
		<?php echo $form->error($model,'disciplina'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Incluir' : 'Salvar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->