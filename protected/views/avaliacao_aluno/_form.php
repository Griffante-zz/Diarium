<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'avaliacao-aluno-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nota'); ?>
		<?php echo $form->textField($model,'nota'); ?>
		<?php echo $form->error($model,'nota'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'aluno'); ?>
		<?php echo $form->textField($model,'aluno'); ?>
		<?php echo $form->error($model,'aluno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'avaliacao'); ?>
		<?php echo $form->textField($model,'avaliacao'); ?>
		<?php echo $form->error($model,'avaliacao'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->