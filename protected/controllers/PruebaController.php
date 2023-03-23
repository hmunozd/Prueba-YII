<?php

class PruebaController extends Controller
{
    public function actionIndex()
    {
        $model = new Cliente();

        if (isset($_POST['Cliente'])) {
            $model->attributes = $_POST['Cliente'];
            if ($model->save())
                $this->redirect(array('compra', 'id' => $model->primaryKey));
        }

        $this->render('index', array('model' => $model));
    }

    public function actionCompra($id)
    {
        $model = new CompraForm;
        $cliente = Cliente::model()->findByPk($id);
        if ($cliente === null)
            throw new CHttpException(404, 'The requested page does not exist.');

        if (isset($_POST['CompraForm'])) {
            $model->attributes = $_POST['CompraForm'];
            if ($model->validate())
                $this->redirect(array('extra', 'id' => $id, 'compra' => $model->compra));
        }

        $this->render('compra', array('model' => $model, 'id' => $id));
    }

    public function actionExtra($id, $compra)
    {
        $model = new CamposExtra('extra');

        $cliente = Cliente::model()->findByPk($id);
        if ($cliente === null)
            throw new CHttpException(404, 'The requested page does not exist.');

        $model->id_externo = $id;
        if (isset($_POST['CamposExtra'])) {
            $model->attributes = $_POST['CamposExtra'];
            if($model->validate()){
                if ($model->save())
                $this->redirect(array('index'));
            }
        }

        $this->render('extra', array('model' => $model, 'compra' => $compra));
    }
}
