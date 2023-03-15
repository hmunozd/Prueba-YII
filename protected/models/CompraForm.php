<?php

class CompraForm extends CFormModel
{
	public $compra;

	private $_identity;

	public function rules()
	{
		return array(
			// username and password are required
			array('compra', 'required'),
			// rememberMe needs to be a boolean
			array('compra', 'boolean'),
		);
	}

	/**
	 * Declares attribute labels.
	 */
	public function attributeLabels()
	{
		return array(
			'compra'=>'¿Desea realizar una compra?',
		);
	}
}
