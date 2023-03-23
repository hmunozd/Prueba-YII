<?php
class Cliente extends CActiveRecord
{
    public function tableName()
    {
        return "clientes";
    }

    public function rules()
    {
        return array(
            array('cedula, nombre, telefono, email, genero', 'required'),
            array('cedula', 'length', 'max' => 50),
            array('nombre, email', 'length', 'max' => 150),
            array('telefono', 'length', 'max' => 20),
            array('email', 'length', 'max' => 150),
            array('genero', 'length', 'max' => 10),
            array('email', 'email'),
        );
    }

    public function atributeLabels()
    {
        return array(
            'id_cliente' => 'ID',
            'cedula' => 'Cedula',
            'nombre' => 'Nombre',
            'telefono' => 'Teléfono',
            'email' => 'Correo',
            'genero' => 'Genero',
        );
    }

    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }
}
