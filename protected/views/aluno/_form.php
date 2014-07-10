<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'aluno-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos com <span class="required">*</span> são obrigatórios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nome'); ?>
		<?php echo $form->textField($model,'nome',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'nome'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'endereco'); ?>
		<?php echo $form->textField($model,'endereco',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'endereco'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'data_nascimento'); ?>
		<?php echo $form->dateField($model,'data_nascimento'); ?>
		<?php echo $form->error($model,'data_nascimento'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($matricula,'curso'); ?>
		<?php echo $form->dropDownList($matricula,'curso',
					CHtml::listData(curso::model()->findAll(array('order' => 'nome')),'id','nome')	
				); ?>
		<?php echo $form->error($matricula,'curso'); ?>
	</div>
	
	
	
	<div class="row">
		<?php echo $form->labelEx($user,'username'); ?>
		<?php echo $form->textField($user,'username',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($user,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($user,'password'); ?>
		<?php echo $form->passwordField($user,'password',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($user,'password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($user,'email'); ?>
		<?php echo $form->textField($user,'email',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($user,'email'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Inserir' : 'Salvar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->