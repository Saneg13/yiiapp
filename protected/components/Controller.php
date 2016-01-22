<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class Controller extends CController
{
	/**
	 * @var string the default layout for the controller view. Defaults to '//layouts/column1',
	 * meaning using a single column layout. See 'protected/views/layouts/column1.php'.
	 */
	public $layout='//layouts/column1';
	/**
	 * @var array context menu items. This property will be assigned to {@link CMenu::items}.
	 */
	public $menu=array();
	/**
	 * @var array the breadcrumbs of the current page. The value of this property will
	 * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
	 * for more details on how to specify this property.
	 */
    public $breadcrumbs=array();

    /*public function beforeAction($action)
    {
        $dynamicTheme = 'classic';

            if(isset($_POST['mytheme']))
            {
                $dynamicTheme = $_POST['mytheme'];
                //Yii::app()->request->cookies['dynamicTheme'] = new CHttpCookie('dynamicTheme', $dynamicTheme);
                $cookie = new CHttpCookie('dynamicTheme', $dynamicTheme);
                $cookie->expire = time()+60*60*24*180;
                Yii::app()->request->cookies['dynamicTheme'] = $cookie;
            }

            if(isset(Yii::app()->request->cookies['dynamicTheme']->value))
            {
                $dynamicTheme = Yii::app()->request->cookies['dynamicTheme']->value;
            }
            else
            {
                //Yii::app()->request->cookies['dynamicTheme'] = new CHttpCookie('dynamicTheme', $dynamicTheme);
                $cookie = new CHttpCookie('dynamicTheme', $dynamicTheme);
                $cookie->expire = time()+60*60*24*180;
                Yii::app()->request->cookies['dynamicTheme'] = $cookie;
            }

            //$dynamicTheme = (isset(Yii::app()->request->cookies['dynamicTheme']->value)) ?    Yii::app()->request->cookies['dynamicTheme']->value : 'classic';
            Yii::app()->theme=$dynamicTheme;

            return parent::beforeAction($action);
    }

    public function init()
    {
        if(Yii::app()->user->isGuest)
            Yii::app()->theme = 'classic';
        else
            Yii::app()->theme = 'test';

        parent::init();
    }*/
}