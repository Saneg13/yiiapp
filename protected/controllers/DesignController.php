<?php
/**
 * Created by PhpStorm.
 * User: sanek
 * Date: 28.01.16
 * Time: 10:43
 */
Yii::app()->theme = 'parallax';
class DesignController extends Controller {
    public $defaultAction = 'index';

    public function actions()
    {
        return array(
            // page action renders "static" pages stored under 'protected/views/site/pages'
            // They can be accessed via: index.php?r=one/page&view=FileName
            'page'=>array(
                'class'=>'CViewAction',
            ),
        );
    }

    public function actionIndex()
    {
        $infoList = Info::model()->findAll();

        $this->render('index', array('list' => $infoList));
    }

}