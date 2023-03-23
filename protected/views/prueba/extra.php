<h1>Campos Extra</h1>

<?php $form = $this->beginWidget("CActiveForm", array(
    'id' => 'my-form',
    'enableAjaxValidation' => false,
    'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

<?php if ($form->errorSummary($model)) : ?>
    <div class="alert alert-error">
        <?php echo $form->errorSummary($model); ?>
    </div>
<?php endif; ?>

<?php if ($compra == 1) { ?>
    <div class="">
        <?php echo $form->labelEx($model, 'articulo'); ?>
        <?php echo $form->dropDownList(
            $model,
            'articulo',
            array(
                '' => 'Seleccione un articulo...',
                'shirt' => 'Camisa',
                'pant' => 'Pantalon',
                'shoe' => 'Zapato',
                'jean' => 'Jean'
            )
        ); ?>
        <?php echo $form->error($model, 'articulo'); ?>
    </div>
    <div class="">
        <?php echo $form->labelEx($model, 'precio'); ?>
        <?php echo $form->numberField($model, 'precio', array('name' => 'CamposExtra[precio]')); ?>
        <?php echo $form->error($model, 'precio'); ?>
    </div>
    <div class="">
        <?php echo $form->labelEx($model, 'metodo_pago'); ?>
        <?php echo $form->dropDownList(
            $model,
            'metodo_pago',
            array('' => 'Seleccione un metodo de pago...', 'PSE' => 'PSE', 'Card' => 'Tarjeta debito', 'Paypal' => 'Paypal'),
            array('name' => 'CamposExtra[metodo_pago]')
        ); ?>
        <?php echo $form->error($model, 'metodo_pago'); ?>
    </div>
<?php } elseif ($compra == 0) { ?>
    <div class="">
        <?php echo $form->labelEx($model, 'motivo_negatividad'); ?>
        <?php echo $form->dropDownList(
            $model,
            'motivo_negatividad',
            array(
                '' => 'Seleccione el motivo de negatividad...',
                'Muy caro' => 'Muy caro',
                'Se lo piensa mejor' => 'Se lo piensa mejor',
                'No interesa' => 'No interesa'
            )
        ); ?>
        <?php echo $form->error($model, 'motivo_negatividad'); ?>
    </div>
<?php } ?>

<?php echo CHtml::submitButton('Terminar', array('class' => 'btn btn-primary btn-large')) ?>
<?php $form = $this->endWidget(); ?>