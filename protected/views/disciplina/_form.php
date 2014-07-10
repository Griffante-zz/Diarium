<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'disciplina-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos com <span class="required">*</span> são obrigatórios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nome'); ?>
		<?php echo $form->textField($model,'nome',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'nome'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ementa'); ?>
		<?php echo $form->textArea($model,'ementa'); ?>
		<?php echo $form->error($model,'ementa'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'carga_horaria'); ?>
		<?php echo $form->dropDownList($model,'carga_horaria',
											array(
														'30'=>'30 horas',
														'60'=>'60 horas',	
														'90'=>'90 horas',
												));
		?>
		<?php echo $form->error($model,'carga_horaria'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Inserir' : 'Salvar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->