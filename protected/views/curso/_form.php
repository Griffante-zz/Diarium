<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'curso-form',
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
		<?php echo $form->labelEx($model,'coordenador'); ?>
		<?php /*echo $form->textField($model,'coordenador'); */
				echo $form->dropDownList($model,'coordenador',
					CHtml::listData(professor::model()->findAll(array('order' => 'nome')),'id','nome')	
				);
		?>
		<?php echo $form->error($model,'coordenador'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Inserir' : 'Salvar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->