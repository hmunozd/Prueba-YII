<div>
    <h1>Cliente</h1>
    <p>Por favor complete los siguientes campos:</p>

    <?php $form = $this->beginWidget("CActiveForm"); ?>

    <?php if ($form->errorSummary($model)) : ?>
        <div class="alert alert-error">
            <?php echo $form->errorSummary($model); ?>
        </div>
    <?php endif; ?>

    <div class="">
        <?php echo $form->labelEx($model, 'cedula'); ?>
        <?php echo $form->textField($model, 'cedula'); ?>
        <?php echo $form->error($model, 'cedula'); ?>
    </div>
    <div class="">
        <?php echo $form->labelEx($model, 'nombre'); ?>
        <?php echo $form->textField($model, 'nombre'); ?>
        <?php echo $form->error($model, 'nombre'); ?>
    </div>
    <div class="">
        <?php echo $form->labelEx($model, 'telefono'); ?>
        <?php echo $form->telField($model, 'telefono'); ?>
        <?php echo $form->error($model, 'telefono'); ?>
    </div>
    <div class="">
        <?php echo $form->labelEx($model, 'email'); ?>
        <?php echo $form->textField($model, 'email'); ?>
        <?php echo $form->error($model, 'email'); ?>
    </div>
    <div class="">
        <?php echo $form->labelEx($model, 'genero'); ?>
        <?php echo $form->dropDownList($model, 'genero', array('' => 'Seleccione un genero...', 'Masculino' => 'Masculino', 'Femenino' => 'Femenino', 'Otro' => 'Otro')); ?>
        <?php echo $form->error($model, 'genero'); ?>
    </div>

    <?php echo CHtml::submitButton('Continuar', array('class' => 'btn btn-primary btn-large')) ?>
    <?php $form = $this->endWidget(); ?>

</div>