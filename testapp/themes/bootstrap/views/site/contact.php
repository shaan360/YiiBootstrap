<?php
$this->pageTitle=Yii::app()->name . ' - Contact Us';
$this->breadcrumbs=array(
	'Contact',
);
?>

<div class="page-header">
	<h1>Contact Us</h1>
</div>

<p>
	If you have business inquiries or other questions, please fill out the following form to contact us. Thank you.
</p>

<?php $form=$this->beginWidget('EBootstrapActiveForm', array(
	'id'=>'contact-form',
	/*'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),*/
	'horizontal' => true,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->beginControlGroup($model, 'name'); ?>
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->beginControls(); ?>
			<?php echo $form->textField($model,'name'); ?>
			<?php echo $form->error($model,'name'); ?>
		<?php echo $form->endControls(); ?>
	<?php echo $form->endControlGroup(); ?>

	<?php echo $form->beginControlGroup($model, 'email'); ?>
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->beginControls(); ?>
			<?php echo $form->textField($model,'email'); ?>
			<?php echo $form->error($model,'email'); ?>
		<?php echo $form->endControls(); ?>
	<?php echo $form->endControlGroup(); ?>

	<?php echo $form->beginControlGroup($model, 'subject'); ?>
		<?php echo $form->labelEx($model,'subject'); ?>
		<?php echo $form->beginControls(); ?>
			<?php echo $form->textField($model,'subject',array('size'=>60,'maxlength'=>128)); ?>
			<?php echo $form->error($model,'subject'); ?>
		<?php echo $form->endControls(); ?>
	<?php echo $form->endControlGroup(); ?>

	<?php echo $form->beginControlGroup($model, 'body'); ?>
		<?php echo $form->labelEx($model,'body'); ?>
		<?php echo $form->beginControls(); ?>
			<?php echo $form->textArea($model,'body',array('rows'=>6, 'cols'=>50)); ?>
			<?php echo $form->error($model,'body'); ?>
		<?php echo $form->endControls(); ?>
	<?php echo $form->endControlGroup(); ?>

	<?php if(CCaptcha::checkRequirements()): ?>
		<div class="captcha">
			<?php echo $form->beginControlGroup($model, 'body'); ?>
				<?php echo $form->labelEx($model,'verifyCode'); ?>
				<?php echo $form->beginControls(); ?>
					<?php $this->widget('CCaptcha'); ?><br />
					<?php echo $form->textField($model,'verifyCode'); ?>

					<?php echo $form->helpBlock('Please enter the letters as they are shown in the image above.<br />Letters are not case-sensitive.'); ?>
					<?php echo $form->error($model,'verifyCode'); ?>
				<?php echo $form->endControls(); ?>
			<?php echo $form->endControls(); ?>
		</div>
	<?php endif; ?>

	<?php echo $form->beginActions(); ?>
		<?php echo $form->submitButton('Submit'); ?>
	<?php echo $form->endActions(); ?>

<?php $this->endWidget(); ?>

<?php /* META */ ?>

<?php 
$this->widget('EBootstrapCollapse', array(
	'sender' => 'a',
	'value' => 'Show Source',
	'valueToggle' => 'Hide Source',
	'htmlOptions' => array(
		'class' => 'btn',
	),
	'target' => '#ebootstrapactiveform-example',
));
?>

<?php $this->beginWidget('EBootstrapCode', array(
	'collapse' => true,
	'htmlOptions' => array(
		'id' => 'ebootstrapactiveform-example',
	),
)); ?>
&lt;?php $form=$this->beginWidget('EBootstrapActiveForm', array(
	'id'=>'contact-form',
	/*'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),*/
	'horizontal' => true,
)); ?&gt;

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	&lt;?php echo $form->errorSummary($model); ?&gt;

	&lt;?php echo $form->beginControlGroup($model, 'name'); ?&gt;
		&lt;?php echo $form->labelEx($model,'name'); ?&gt;
		&lt;?php echo $form->beginControls(); ?&gt;
			&lt;?php echo $form->textField($model,'name'); ?&gt;
			&lt;?php echo $form->error($model,'name'); ?&gt;
		&lt;?php echo $form->endControls(); ?&gt;
	&lt;?php echo $form->endControlGroup(); ?&gt;

	&lt;?php echo $form->beginControlGroup($model, 'email'); ?&gt;
		&lt;?php echo $form->labelEx($model,'email'); ?&gt;
		&lt;?php echo $form->beginControls(); ?&gt;
			&lt;?php echo $form->textField($model,'email'); ?&gt;
			&lt;?php echo $form->error($model,'email'); ?&gt;
		&lt;?php echo $form->endControls(); ?&gt;
	&lt;?php echo $form->endControlGroup(); ?&gt;

	&lt;?php echo $form->beginControlGroup($model, 'subject'); ?&gt;
		&lt;?php echo $form->labelEx($model,'subject'); ?&gt;
		&lt;?php echo $form->beginControls(); ?&gt;
			&lt;?php echo $form->textField($model,'subject',array('size'=>60,'maxlength'=>128)); ?&gt;
			&lt;?php echo $form->error($model,'subject'); ?&gt;
		&lt;?php echo $form->endControls(); ?&gt;
	&lt;?php echo $form->endControlGroup(); ?&gt;

	&lt;?php echo $form->beginControlGroup($model, 'body'); ?&gt;
		&lt;?php echo $form->labelEx($model,'body'); ?&gt;
		&lt;?php echo $form->beginControls(); ?&gt;
			&lt;?php echo $form->textArea($model,'body',array('rows'=>6, 'cols'=>50)); ?&gt;
			&lt;?php echo $form->error($model,'body'); ?&gt;
		&lt;?php echo $form->endControls(); ?&gt;
	&lt;?php echo $form->endControlGroup(); ?&gt;

	&lt;?php if(CCaptcha::checkRequirements()): ?&gt;
		<div class="captcha">
			&lt;?php echo $form->beginControlGroup($model, 'body'); ?&gt;
				&lt;?php echo $form->labelEx($model,'verifyCode'); ?&gt;
				&lt;?php echo $form->beginControls(); ?&gt;
					&lt;?php $this->widget('CCaptcha'); ?&gt;<br />
					&lt;?php echo $form->textField($model,'verifyCode'); ?&gt;

					&lt;?php echo $form->helpBlock('Please enter the letters as they are shown in the image above.<br />Letters are not case-sensitive.'); ?&gt;
					&lt;?php echo $form->error($model,'verifyCode'); ?&gt;
				&lt;?php echo $form->endControls(); ?&gt;
			&lt;?php echo $form->endControls(); ?&gt;
		</div>
	&lt;?php endif; ?&gt;

	&lt;?php echo $form->beginActions(); ?&gt;
		&lt;?php echo $form->submitButton('Submit'); ?&gt;
	&lt;?php echo $form->endActions(); ?&gt;

&lt;?php $this->endWidget(); ?&gt;
<?php $this->endWidget(); ?>