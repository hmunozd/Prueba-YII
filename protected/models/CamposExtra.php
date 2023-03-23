<?php
class CamposExtra extends CActiveRecord
{
    public function tableName()
    {
        return 'campos_extra';
    }

    public function rules()
    {
        return array(
            array('id_externo', 'required'),
            array('articulo, motivo_negatividad', 'length', 'max' => 100),
            array('precio', 'length', 'max' => 150),
            array('metodo_pago', 'length', 'max' => 50),
            array('metodo_pago, precio', 'requiredextra', 'on' => 'extra'),
        );
    }

    public function atributeLabels()
    {
        return array(
            'id_campo' => 'ID',
            'id_externo' => 'Cliente',
            'articulo' => 'Articulo',
            'precio' => 'Precio',
            'metodo_pago' => 'Metodo de pago',
            'motivo_negatividad' => 'Motivo de negatividad',
        );
    }

    public function requiredextra($attribute, $param)
    {
        if($_POST['CamposExtra']['articulo'] == 'pant' || $_POST['CamposExtra']['articulo'] == 'shirt'){
            if (empty($this->$attribute)) {
                $this->addError($attribute, 'El campo "' . $attribute . '" es requerido.');
            }
        }
    }

    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }
}
