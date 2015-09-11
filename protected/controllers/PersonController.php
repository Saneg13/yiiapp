<?php

class PersonController extends Controller
{
	public function actionIndex()
	{
        $data = array('myValue2'=>$a="А сейчас узнаем ", 'myValue3'=>$b="имя таблицы", 'myValue'=>$c="");

        $this->render('index', array($data));
	}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/

    public function actionAjax()
    {
        $model=new PersonForm;

        // uncomment the following code to enable ajax-based validation
        /*
        if(isset($_POST['ajax']) && $_POST['ajax']==='person-form-edit_person-form')
        {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
        */


        if(isset($_POST['PersonForm']))
        {


            $model->attributes=$_POST['PersonForm'];
            if($model->validate())
            {
                // form inputs are valid, do something here
                print_r($_REQUEST);
                return;



            }
        }
        $this->render('person_form',array('model'=>$model));

    }

    public function actionUpdateAjax()
    {

        $model=new PersonForm;

        $data = array('myValue3'=>$b="нашей БД: ", 'myValue2'=>$a="Имя таблицы ", 'myValue1'=>$c=$model->tableName());

        $this->renderPartial('_ajaxContent', array('myValue1'=>$data), false, true);
    }

    public function actionExample()
    {
        $this->render('exam', false);
    }
}