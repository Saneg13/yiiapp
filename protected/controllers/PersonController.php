<?php

class PersonController extends Controller
{
	public function actionIndex()
	{
        /*$mode11 = new Info;
        $data1 = "<br />".$mode11->tableName();*/
        $data = "Данные пользователя - ";
        /*$data1 = array(PersonForm::model()->find(array(
            'select'=>array('name', 'age'),
            'condition'=>'id=:id',
            'params'=>array(':id'=>3),
        )),
        );*/

        $data1 = array(PersonForm::model()->find(array(
            'select'=>array('name', 'age'),
            'condition'=>'id=:id',
            'params'=>array(':id'=>1),
        )),
        );

        foreach($data1 as $key => $value) {
            printf($value['name'], '. Возраст: ', $value['age'], '<br />');
        }

        $this->render('index', array('myValue'=>$data, 'myValue2'=>$data1));
	}

    public function actionUpdateAjax()
    {
        /*$model=new PersonForm;

        $data2 = $model->tableName();*/
        $data = "Новые данные пользователя - ";
        $data2=array(PersonForm::model()->find(array(
            'select'=>array('name', 'age'),
            'condition'=>'id=:id',
            'params'=>array(':id'=>2),
        )),
        );

        $this->renderPartial('_ajaxContent', array('myValue1'=>$data, 'myValue3'=>$data2), false, true);
    }

    /**
     * @return array
     */
    public function accessRules()
    {
        return array(
            array('allow',  // allow all users to perform 'index' and 'view' actions
                'actions'=>array('index','view'),
                'users'=>array('*'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions'=>array('create','update', 'findallperson'),
                'users'=>array('@'),
            ),
        );
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
	}*/
}