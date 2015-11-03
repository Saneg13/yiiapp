<?php
/**
 * Created by PhpStorm.
 * User: sanek
 * Date: 01.11.15
 * Time: 15:53
 */

class MapController extends Controller
{
    public function accessRules()
    {
        return array(
            array('allow',  // allow all users to perform 'index' and 'view' actions
                'actions'=>array('index','view'),
                'users'=>array('*'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions'=>array('create','update'),
                'users'=>array('@'),
            ),
        );
    }

    /**
     *
     */
    public function actionIndex()
    {
        $this->render('index');
    }

    /**
     *
     */
    public function actionExample1()
    {
        $data = Info::model()->findAll("id<0");

        foreach ($data as $data) {}

        $this->render('example1', array('nullArr'=>$data));
    }

    /**
     * @throws CException
     */
    public function actionAjax1()
    {
        $data = Info::model()->findAll();

        $this->renderPartial('_ajaxCont', array('infoList'=>$data), false, true);
    }

    public function actionExample2()
    {
        $this->render('example2');
    }

    public function actionAjax2()
    {
        if (Yii::app()->request->isAjax()) {

            $model = new Info();
            $inf = Info::model()->getUserInfo();;

            echo json_encode($inf);
        }


       /* $somevar = Info::model()->findAll();

        foreach ($somevar as $value) {
            echo $value->user_name.' with coords: ('.$value->lat.','.$value->lng.').<br />';
        }*/
        Yii::app()->end();
    }

    public function actionExample3()
    {
        $info2 = new Info();
        $info3 = $info2->getUserByName('Tulka');
        $info3 = array(
            0=>$info2->user_name,
            $info2->user_address,
            $info2->lat,
            $info2->lng,
            $info2->icon
        );

        $this->render('example3',array(
            'userName'=>$info3[0],
            'userAddress'=>$info3[1],
            'userLat'=>$info3[2],
            'userLng'=>$info3[3],
            'userIcon'=>$info3[4]),
            false);
    }
}