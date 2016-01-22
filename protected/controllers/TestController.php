<?php
/**
 * Created by PhpStorm.
 * User: sanek
 * Date: 15.01.16
 * Time: 14:28
 */
Yii::app()->theme = 'classic';

class TestController extends Controller {

    public $defaultAction = 'arena';

    public function actionIndex()
    {
        $info = Info::model()->findAll('user_address = :address
                AND icon > :icon', array(
                ':address' => 'home',
                ':icon' => '',
            )
        );

        foreach($info as $data){
            echo $data->user_name.'<br />';
            echo $data->user_address.'<hr />';
        }

        //$this->render('index');
    }

    public function actionGmap1()
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

        $inf = Info::model()->findAll();

        $this->render('map',array(
            'userName'=>$info3[0],
            'userAddress'=>$info3[1],
            'userLat'=>$info3[2],
            'userLng'=>$info3[3],
            'userIcon'=>$info3[4],
            'inf'=>$inf
        ),
            false);
    }
    //Игра на ООП. Арена
    public function actionArena()
    {
        $model = new Arena(new Fighter(new LightArmor(20, 5), new Bow(40, 10), 100, 5), new Fighter(new LightArmor(20, 10), new Sword(120, 5), 100, 4));

        $this->render('arena', array('arena'=>$model, 'cost1'=>$model->getFighter1()->getSum(), 'cost2'=>$model->getFighter2()->getSum()), false);
    }
    // Тест Drag&Drop'а
    public function actionDragDrop()
    {
        $data = Info::model()->findAll("id<0");

        foreach ($data as $data) {}

        $this->render('dragdrop', array('nullArr'=>$data));
    }

    /**
     * @throws CException
     */
    public function actionAjax1()
    {
        $infoList = Info::model()->findAll();

        $DEFAULT_IMAGE = '/images/icons/avatar-default-icon.png';
        foreach ($infoList as $value) {
            if ($value->icon =='')
            {
                $value->icon = $DEFAULT_IMAGE;
            }
            echo CHtml::image(Yii::app()->request->baseUrl.$value->icon,'',
                array(
                    'width'=>'80px',
                    'height'=>'80px',
                    'title'=>$value->user_name.' live at '.$value->user_address,
                    'class'=>'draggable'
                ));

            /*echo '<br /><b>'.$value->user_name.' live at '.$value->user_address.'</b><br />'.CHtml::image(Yii::app()->request->baseUrl.$value->icon,'',
                    array('width'=>'60px','height'=>'60px','title'=>$value->user_name.' live at '.$value->user_address)).'<br />';*/
        }

        //$this->renderPartial('_ajaxCont', array('infoList'=>$data), false, true);
    }

    public function actionTheme()
    {
        $a = new CThemeManager();

        $this->render('theme', array('a'=>$a));
    }

    public function actionGmap2()
    {
        // $inf = Info::model()->getUserInfo();
        $this->render('map2');
    }

    public function actionGmap3()
    {
        $this->render('map3');
    }

    public function actionShowUsers()
    {
        // if (Yii::app()->request->isAjax()) {

        $model = new Info();
        $inf = Info::model()->getUserInfo();
        $inf = json_encode($inf);
        echo $inf;
        //}

        // Yii::app()->end();
    }

    public function actionYmap()
    {
        //create object Info
        $info2 = new Info();
        //select Info
        $info3 = $info2->getUserByName('Tulka');
        $info3 = array(
            0=>$info2->user_name,
            $info2->user_address,
            $info2->lat,
            $info2->lng,
            $info2->icon
        );
        // output info
        $this->render('ymap',array(
            'userName'=>$info3[0],
            'userAddress'=>$info3[1],
            'userLat'=>$info3[2],
            'userLng'=>$info3[3],
            'userIcon'=>$info3[4]),
            false);
    }

    public function actionUpperReg()
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

    public function actionDebugInfo()
    {
        $info = Info::model()->findAll('id>0');
        $this->render('debugging', array('info'=>$info));
    }

    public function actionCss()
    {
        $this->render('css');
    }

    public function actionTable()
    {
        $table = new Table(8,10);

        $this->render('table', array('table' => $table));
    }
}