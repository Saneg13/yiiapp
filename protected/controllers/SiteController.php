<?php
Yii::app()->theme = 'test';


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
		);
	}

    /*public function init()
    {
        if(Yii::app()->user->isGuest)
            Yii::app()->theme = 'test';
        else
            Yii::app()->theme = 'classic';

        parent::init();
    }*/

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

    public function actionPortfolio()
    {
        $this->render('portfolio');
    }

    public function actionProject()
    {
        $this->render('project');
    }

    public function actionContactMe()
    {

        $this->render('contact');
    }

    public function actionSource()
    {
        $this->render('source');
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

    public function actionMyClassicTheme()
    {
//        $a = new CThemeManager();
//
//        foreach ($a->themeNames as $theme){
//            echo $theme.'<hr/>';
//        }

        $a = CHtml::encode(Yii::app()->theme = 'classic');
        echo $a;
        $this->redirect(Yii::app()->homeUrl);
//        $name = $a->themeNames[0];
//        $theme = new MyTheme($name);
//        Yii::app()->mytheme->setTheme($name);
//        Yii::app()->mytheme->getTheme();
//        $this->redirect(Yii::app()->homeUrl);
        //$theme = 'classic';
        //$form = new CThemeManager();
        //$form->radioButtonList($form,'theme',array('classic'=>$name = $a->themeNames[0],'test'=>$name = $a->themeNames[1]), array('separator'=>' '));
        //$this->render('index',array('a'=>$a));
    }

    public function actionMyTestTheme()
    {

        //$this->redirect(Yii::app()->theme = 'test');
        $this->redirect(Yii::app()->theme->getTheme('test'));

        //$this->redirect(Yii::app()->homeUrl);
    }
}