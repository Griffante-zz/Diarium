<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo"><i><?php echo CHtml::encode(Yii::app()->name); ?></i></div>
		<?php 
			if (!Yii::app()->user->isGuest){
				echo "<div id='boas-vindas'><p>Bem-vindo, <span class='nome'><i>".Yii::app()->user->nome."</i></span>.</div>";	
			}
			
		?>
		
		<?php 
			function isRole($role){
			if (!Yii::app()->user->isGuest){
				if(Yii::app()->user->role == $role || Yii::app()->user->role == 'admin'){
					return true;
				}
				else{
					return false;
				}
			}
			else{
				return false;
			}
		}
		
		?>
	</div><!-- header -->

	<div id="mainmenu">
		<?php  $this->widget('zii.widgets.CMenu', array(
			'activeCssClass'=>'active',
			'activateParents'=>true,
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),
				array('label'=>'Disciplinas', 'url'=>array('/site/page', 'view'=>'disciplinas'), 'visible'=>isRole('professor')),
				array('label'=>'Cadastros', 'url'=>array('/site/page', 'view'=>'cadastros'), 
					'items'=>array(
						array('label'=>'Aluno', 'url'=>array('/aluno/index')),
						array('label'=>'Professor', 'url'=>array('/professor/index')),
						array('label'=>'Secretário', 'url'=>array('/secretario/index')),
						array('label'=>'Curso', 'url'=>array('/curso/index')),
						array('label'=>'Disciplina', 'url'=>array('/disciplina/index')),
						array('label'=>'Turma', 'url'=>array('/turma/index')),
						array('label'=>'Horários', 'url'=>array('/horario/index')),
					),
					'visible'=>isRole('secretario')
				),
				array('label'=>'Horários', 'url'=>array('/site/page', 'view'=>'horarios'), 'visible'=>isRole('aluno')),
				array('label'=>'Boletim', 'url'=>array('/site/page', 'view'=>'boletim'), 'visible'=>isRole('aluno')),
				array('label'=>'Sobre', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Contato', 'url'=>array('/site/contact')),
				array('label'=>'Entrar', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Sair', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
		
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by APA Software.<br/>
		Todos Direitos Reservados.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
