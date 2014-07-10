<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - Cadastros';
$this->breadcrumbs=array(
	'Cadastros',
);
?>
<h1>Cadastros</h1>

<div class='panel'>
	<ul>
		<li><?php echo CHtml::link('Aluno', $this->createAbsoluteUrl('/aluno/index')); ?></li>
		<li><?php echo CHtml::link('Professor', $this->createAbsoluteUrl('/professor/index')); ?></li>
		<li><?php echo CHtml::link('Secretário', $this->createAbsoluteUrl('/secretario/index')); ?></li>
		<li><?php echo CHtml::link('Curso', $this->createAbsoluteUrl('/curso/index')); ?></li>
		<li><?php echo CHtml::link('Disciplina', $this->createAbsoluteUrl('/disciplina/index')); ?></li>
		<li><?php echo CHtml::link('Turma', $this->createAbsoluteUrl('/turma/index')); ?></li>
		<li><?php echo CHtml::link('Horários', $this->createAbsoluteUrl('/horario/index')); ?></li>
	</ul>
</div>
