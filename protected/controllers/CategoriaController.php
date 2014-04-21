<?php

class CategoriaController extends BaseController 
{
    public function behaviors()
    {
        return array(
            'jsTreeBehavior' => array(
                'class' => 'application.behaviors.JsTreeBehavior',
                'modelClassName' => 'Categoria',
                'form_alias_path' => 'application.views.categoria._form',
                'view_alias_path' => 'application.views.categoria.view',
                'label_property' => 'nome',
                'rel_property' => 'nome'
            )
        );
    }

    /*public function filters() 
    {
        return array(
            'accessControl', 
        );
    }

    public function accessRules() 
    {
        return array(
            array('allow',
                'actions'=>array('index','view'),
                'users'=>array('*'),
            ),
            array('allow', 
                'actions'=>array(
                    'minicreate', 'create','update','fetchTree',
                    'createnode','createroot','movecopy','remove','rename',
                    'returnform','returnview','updatenode'),
                'users'=>array('@'),
            ),
            array('allow', 
                'actions'=>array('admin','delete'),
                'users'=>array('admin'),
            ),
            array('deny', 
                'users'=>array('*'),
            ),
        );
    }*/

    /*public function actionView($id) {
            $this->render('view', array(
                'model' => $this->loadModel($id, 'Categoria'),
            ));
        }

    public function actionCreate() 
    {
        $model = new Categoria;


        if (isset($_POST['Categoria'])) 
        {
            $model->setAttributes($_POST['Categoria']);
            $model->data_cadastro = $model->data_alteracao = date("d/m/Y H:i:s");
            if ($model->saveNode()) 
            {
                if (Yii::app()->getRequest()->getIsAjaxRequest())
                    Yii::app()->end();
                else
                    $this->redirect(array('view', 'id' => $model->id));
            }
        }

        $this->render('create', array( 'model' => $model));
    }

    public function actionUpdate($id) 
    {
        $model = $this->loadModel($id, 'Categoria');


        if (isset($_POST['Categoria'])) 
        {
            $model->setAttributes($_POST['Categoria']);
            $model->data_alteracao = date("d/m/Y H:i:s");
            if ($model->save()) 
            {
                $this->redirect(array('view', 'id' => $model->id));
            }
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }*/

    public function actionDelete($id) 
    {
        if (Yii::app()->getRequest()->getIsPostRequest()) 
        {
            $this->loadModel($id, 'Categoria')->delete();

            if (!Yii::app()->getRequest()->getIsAjaxRequest())
                $this->redirect(array('admin'));
        }
        else
            throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
    }

    public function actionIndex() 
    {
        $dataProvider = new CActiveDataProvider('Categoria');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    public function actionAdmin() 
    {
        $model = new Categoria('search');
        $model->unsetAttributes();

        if (isset($_GET['Categoria']))
            $model->setAttributes($_GET['Categoria']);

        $this->render('admin', array(
            'model' => $model,
        ));
    }

}