<?php

/**
 * This is the model class for table "info".
 *
 * The followings are the available columns in table 'info':
 * @property integer $id
 * @property string $user_name
 * @property string $user_address
 * @property double $lat
 * @property double $lng
 * @property string $icon
 */
class Info extends CActiveRecord
{
    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return 'info';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('icon', 'required'),
            array('lat, lng', 'numerical'),
            array('user_name, icon', 'length', 'max' => 100),
            array('user_address', 'length', 'max' => 300),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, user_name, user_address, lat, lng, icon', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array();
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'id' => 'ID',
            'user_name' => 'User Name',
            'user_address' => 'User Address',
            'lat' => 'Lat',
            'lng' => 'Lng',
            'icon' => 'Icon',
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     *
     * Typical usecase:
     * - Initialize the model fields with values from filter form.
     * - Execute this method to get CActiveDataProvider instance which will filter
     * models according to data in model fields.
     * - Pass data provider to CGridView, CListView or any similar widget.
     *
     * @return CActiveDataProvider the data provider that can return the models
     * based on the search/filter conditions.
     */
    public function search()
    {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('user_name', $this->user_name, true);
        $criteria->compare('user_address', $this->user_address, true);
        $criteria->compare('lat', $this->lat);
        $criteria->compare('lng', $this->lng);
        $criteria->compare('icon', $this->icon, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Info the static model class
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    /**
     * @param $user_name
     * @return array
     */
    public function getUserByName($user_name)
    {
        $info = array(Info::model()->find(array(
            'select' => array('user_name', 'user_address', 'lat', 'lng', 'icon'),
            'condition' => 'user_name=:user_name',
            'params' => array(':user_name' => $user_name),
        )),
        );
        /**
         * Перечислим элементы массива find()
         */
        foreach ($info as $key => $value) {
            // echo $value['user_name'], ' ', $value['user_address'], ' ', $value['lat'], ' ', $value['lng'], '<br />';
            return array(
                $this->user_name = $value['user_name'],
                $this->user_address = $value['user_address'],
                $this->lat = $value['lat'],
                $this->lng = $value['lng'],
                $this->icon = $value['icon']
            );
        }
    }

    public function getUserById()
    {
        $inf = Info::model()->findAll("id>0");

        foreach ($inf as $value) {

            echo $value->user_name.' '.$value->user_address.'<br />'.CHtml::image($value->icon).'<br />';
        }
        return array(
                $value->id,
                $value->user_name,
                $value->user_address,
                $value->lat,
                $value->lng,
                $value->icon
            );

        /*$info = Info::model()->findAllByAttributes(
            array(),
            $condition  = 'id = : id',
            $params     = array(
                ':id' => $id,
            )
        );

        foreach ($info as $key => $value) {
            //echo $value['user_name'], ' ', $value['user_address'], ' ', $value['lat'], ' ', $value['lng'], '<br />';
            return array(
                $this->id = $value['id'],
                $this->user_name = $value['user_name'],
                $this->user_address = $value['user_address'],
                $this->lat = $value['lat'],
                $this->lng = $value['lng'],
                $this->icon = $value['icon']
        );*/

         // Example.. 'findAllByAttributes()'
         /* $found = YourModelClass::model()->findAllByAttributes(
            array(),
            $condition  = 'columnNameInDb = :someVarName AND columnNameInDb02 > :someVarName02',
            $params     = array(
                ':someVarName' => $someVarNameValue,
                ':someVarName02' => $someVarNameValue02,
            )
        );*/
    }
}
