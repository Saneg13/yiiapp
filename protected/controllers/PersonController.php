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

    /**
     * @return mixed
     */
    public function actionFind()
    {
        if(isset($_POST['person_list']))
        {
            return PersonForm::model()->findAllPerson($_POST['person_list']);
        }
        $this->render('exam4');
    }

    public function actionExam1()
    {
        $this->render('exam1');
    }

    public function actionExam2()
    {
        $this->render('exam2');
    }

    public function actionExam3()
    {
        $this->render('exam3');
    }

    public function actionExam4()
    {

        //$person = new PersonForm();

        $person=array(PersonForm::model()->find(array(
            'select'=>array('name', 'age'),
            'condition'=>'id=:id',
            'params'=>array(':id'=>2),
        )),
        );

        $this->render('exam4', array('data'=>$person));
        //$this->render('exam4', array('model'=>$person), false);

    }

    public function actionExam5()
    {
        $info2 = new Info();
        $info3 = $info2->getUserByName('Barbar');
        $info3 = array(
            0=>$info2->user_name,
            $info2->user_address,
            $info2->lat,
            $info2->lng
        );

        $json = json_encode($info3);

        $this->render('exam5',array(
            'userName'=>$json[0],
            'userAddress'=>$json[1],
            'userLat'=>$json[2],
            'userLng'=>$json[3]),
            false);

        /*$this->render('exam5');*/
    }

    public function actionExam6()
    {
        $input = Yii::app()->request->getPost('input');
        // для примера будем приводить строку к верхнему регистру
        $output = mb_strtoupper($input, 'utf-8');

        // если запрос асинхронный, то нам нужно отдать только данные
        if(Yii::app()->request->isAjaxRequest){
            echo CHtml::encode($output);
            // Завершаем приложение
            Yii::app()->end();
        }
        else {
            // если запрос не асинхронный, отдаём форму полностью
            $this->render('form', array(
                'input'=>$input,
                'output'=>$output,
            ));
        }
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

        /*if(isset($_POST['ajax']) && $_POST['ajax']==='person-form-edit_person-form')
        {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }*/


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

    public function actionExample()
    {
        $this->render('exam', false);
    }


}