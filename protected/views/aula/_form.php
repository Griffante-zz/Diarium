<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'aula-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'conteudo'); ?>
		<?php echo $form->textField($model,'conteudo'); ?>
		<?php echo $form->error($model,'conteudo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'data'); ?>
		<?php echo $form->textField($model,'data'); ?>
		<?php echo $form->error($model,'data'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'diario'); ?>
		<?php echo $form->textField($model,'diario'); ?>
		<?php echo $form->error($model,'diario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'horario'); ?>
		<?php echo $form->textField($model,'horario'); ?>
		<?php echo $form->error($model,'horario'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->