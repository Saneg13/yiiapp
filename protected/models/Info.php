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
			array('lat, lng', 'numerical'),
			array('user_name', 'length', 'max'=>100),
			array('user_address', 'length', 'max'=>300),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, user_name, user_address, lat, lng', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
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

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('user_name',$this->user_name,true);
		$criteria->compare('user_address',$this->user_address,true);
		$criteria->compare('lat',$this->lat);
		$criteria->compare('lng',$this->lng);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Info the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

    /**
     *
     */
    /*public function find()
    {
        return array(
            'select' => array('user_name' , 'user_address', 'lat', 'lng'),
            'condition' => 'id=:id',
            'params' => array(':id' => 2),
        );
    }*/

    public function getUserById($id)
    {
        $info=array(Info::model()->find(array(
            'select'=>array('user_name', 'user_address', 'lat', 'lng'),
            'condition'=>'id=:id',
            'params'=>array(':id'=>$id),
        )),
        );
    }

    /**
     * @param $user_name
     * @return array
     */
    public function getUserByName($user_name)
    {
        $info=array(Info::model()->find(array(
            'select'=>array('user_name', 'user_address', 'lat', 'lng'),
            'condition'=>'user_name=:user_name',
            'params'=>array(':user_name'=>$user_name),
        )),
        );
        /**
         * Перечислим элементы массива find()
         */
        foreach($info as $key => $value) {
            /*echo $value['user_name'], ' ', $value['user_address'], ' ', $value['lat'], ' ', $value['lng'], '<br />';*/
            return array(
                $this->user_name = $value['user_name'],
                $this->user_address = $value['user_address'],
                $this->lat = $value['lat'],
                $this->lng = $value['lng']
            );
        }
    }
}
