<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
            'lol' => 'application.protected.actions.LolAction',
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('index');

        /*for example..
        echo ("Привет! Это actionIndex()");*/
    }


	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the contact page
	 */
    public function actionContact()
    {
        $model=new ContactForm;
        if(isset($_POST['ContactForm']))
        {
            $model->attributes=$_POST['ContactForm'];
            if($model->validate())
            {
                $name='=?UTF-8?B?'.base64_encode($model->name).'?=';
                $subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
                $headers="From: $name <{$model->email}>\r\n".
                    "Reply-To: {$model->email}\r\n".
                    "MIME-Version: 1.0\r\n".
                    "Content-Type: text/plain; charset=UTF-8";

                mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
                Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
                $this->refresh();
            }
        }
        $this->render('contact',array('model'=>$model));
    }

	/**
	 * Displays the login page
	 */
    public function actionLogin()
    {
        $model=new LoginForm;

        // if it is ajax validation request
        if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
        {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }

        // collect user input data
        if(isset($_POST['LoginForm']))
        {
            $model->attributes=$_POST['LoginForm'];
            // validate user input and redirect to the previous page if valid
            if($model->validate() && $model->login())
                $this->redirect(Yii::app()->user->returnUrl);
        }
        // display the login form
        $this->render('login',array('model'=>$model));
    }

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}

    public function actionPNH()
    {
        echo "hello, world";
    }

    public function actionMap()
    {
        $info2 = new Info();
        $info3 = $info2->getUserByName('Alee');
        $info3 = array(
            0=>$info2->user_name,
            $info2->user_address,
            $info2->lat,
            $info2->lng,
            $info2->icon
        );

        $inf = Info::model()->findAll("id>0");


        /*return array(
            $value->id,
            $value->user_name,
            $value->user_address,
            $value->lat,
            $value->lng,
            $value->icon
        );*/

//        $info4 = $info2->getUserById();

        $this->render('map',array(
            'userName'=>$info3[0],
            'userAddress'=>$info3[1],
            'userLat'=>$info3[2],
            'userLng'=>$info3[3],
            'userIcon'=>$info3[4],
            'inf'=>$inf,
            /*'name'=>$info4[1],
            'icon'=>$info4[2]*/
            ),
            false);
    }

    public function actionForTest()
    {
        // var_dump('ole');

        // $model = new Arena(new Fighter(new LightArmor(20, 5), new Bow(40, 10), 100, 5), new Fighter(new LightArmor(20, 10), new Sword(120, 5), 100, 4));

        $model = new Arena(new Fighter(new LightArmor(20, 5), new Bow(40, 10), 100, 5), new Fighter(new LightArmor(20, 10), new Sword(120, 5), 100, 4));

        $this->render('fortest', array('cost1'=>$model->getFighter1()->getSum(), 'cost2'=>$model->getFighter2()->getSum()), false);
        // $this->render('fortest', array('arena'=>$model->startFight(), 'cost1'=>$model->getFighter1()->getSum(), 'cost2'=>$model->getFighter2()->getSum()), false);
    }

    public function actionDotest()
    {

        $this->render('test', false);
    }

    public function actionAuthor()
    {
        var_dump('ole');
        $this->render('fortest',array('var1'=>$value1 = 100, 'var2'=>$value1= " Привет! Это Z!"), false);

        echo ("Привет! Это actionAuthor()");

    }
}