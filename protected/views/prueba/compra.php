<div>
    <h2>¿Desea realizar una compra?</h2>
    
    <?php $form = $this->beginWidget("CActiveForm"); ?>


    <?php if ($form->errorSummary($model)) : ?>
        <div class="alert alert-error">
            <?php echo $form->errorSummary($model); ?>
        </div>
    <?php endif; ?>

    <div>
        <?php echo $form->radioButtonList(
            $model,
            'compra',
            array('1' => 'Si', '0' => 'No'),
            array(
                'separator' => '&nbsp;&nbsp;&nbsp;',
                'labelOptions' => array('style' => 'display:inline'),
            )
        ); ?>
    </div>
    <br>
    <?php echo CHtml::submitButton('Siguiente', array('class' => 'btn btn-primary btn-large')) ?>
    <?php $form = $this->endWidget(); ?>

</div>