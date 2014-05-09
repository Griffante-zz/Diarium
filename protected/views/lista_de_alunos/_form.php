<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'lista-de-alunos-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Turma'); ?>
		<?php echo $form->textField($model,'Turma'); ?>
		<?php echo $form->error($model,'Turma'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Aluno'); ?>
		<?php echo $form->textField($model,'Aluno',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'Aluno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'numero'); ?>
		<?php echo $form->textField($model,'numero'); ?>
		<?php echo $form->error($model,'numero'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->