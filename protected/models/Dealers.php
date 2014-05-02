<?php

/**
 * This is the model class for table "Dealers".
 *
 * The followings are the available columns in table 'Dealers':
 * @property integer $id
 * @property string $Lic_Regn
 * @property string $Lic_Dist
 * @property string $Lic_Cnty
 * @property string $Lic_Type
 * @property string $Lic_Xprdte
 * @property string $Lic_Seqn
 * @property string $Lisc_Name
 * @property string $Busn_Name
 * @property string $Prem_Street
 * @property string $Prem_City
 * @property string $Prem_State
 * @property string $Prem_ZipCode
 * @property string $Mail_Street
 * @property string $Mail_City
 * @property string $Mail_State
 * @property string $Mail_ZipCode
 * @property string $Voice_Phone
 * @property string $bio
 * @property integer $acceptTransfers
 * @property string $transferFee
 */
class Dealers extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Dealers';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Lic_Regn, Lic_Dist, Lic_Cnty, Lic_Type, Lic_Xprdte, Lic_Seqn, Lisc_Name, Busn_Name, Prem_Street, Prem_City, Prem_State, Prem_ZipCode, Mail_Street, Mail_City, Mail_State, Mail_ZipCode, Voice_Phone, bio, transferFee', 'required'),
			array('acceptTransfers', 'numerical', 'integerOnly'=>true),
			array('Lic_Regn, Lic_Dist, Lic_Cnty, Lic_Type, Lic_Xprdte, Lic_Seqn, Prem_State', 'length', 'max'=>10),
			array('Lisc_Name, Busn_Name, Prem_Street, Prem_City, Mail_Street', 'length', 'max'=>50),
			array('Prem_ZipCode, Mail_City, Mail_State, Mail_ZipCode, Voice_Phone', 'length', 'max'=>20),
			array('transferFee', 'length', 'max'=>2),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, Lic_Regn, Lic_Dist, Lic_Cnty, Lic_Type, Lic_Xprdte, Lic_Seqn, Lisc_Name, Busn_Name, Prem_Street, Prem_City, Prem_State, Prem_ZipCode, Mail_Street, Mail_City, Mail_State, Mail_ZipCode, Voice_Phone, bio, acceptTransfers, transferFee', 'safe', 'on'=>'search'),
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
			'Lic_Regn' => 'Lic Regn',
			'Lic_Dist' => 'Lic Dist',
			'Lic_Cnty' => 'Lic Cnty',
			'Lic_Type' => 'Lic Type',
			'Lic_Xprdte' => 'Lic Xprdte',
			'Lic_Seqn' => 'Lic Seqn',
			'Lisc_Name' => 'Lisc Name',
			'Busn_Name' => 'Busn Name',
			'Prem_Street' => 'Prem Street',
			'Prem_City' => 'Prem City',
			'Prem_State' => 'Prem State',
			'Prem_ZipCode' => 'Prem Zip Code',
			'Mail_Street' => 'Mail Street',
			'Mail_City' => 'Mail City',
			'Mail_State' => 'Mail State',
			'Mail_ZipCode' => 'Mail Zip Code',
			'Voice_Phone' => 'Voice Phone',
			'bio' => 'Bio',
			'acceptTransfers' => 'Accept Transfers',
			'transferFee' => 'Transfer Fee',
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
		$criteria->compare('Lic_Regn',$this->Lic_Regn,true);
		$criteria->compare('Lic_Dist',$this->Lic_Dist,true);
		$criteria->compare('Lic_Cnty',$this->Lic_Cnty,true);
		$criteria->compare('Lic_Type',$this->Lic_Type,true);
		$criteria->compare('Lic_Xprdte',$this->Lic_Xprdte,true);
		$criteria->compare('Lic_Seqn',$this->Lic_Seqn,true);
		$criteria->compare('Lisc_Name',$this->Lisc_Name,true);
		$criteria->compare('Busn_Name',$this->Busn_Name,true);
		$criteria->compare('Prem_Street',$this->Prem_Street,true);
		$criteria->compare('Prem_City',$this->Prem_City,true);
		$criteria->compare('Prem_State',$this->Prem_State,true);
		$criteria->compare('Prem_ZipCode',$this->Prem_ZipCode,true);
		$criteria->compare('Mail_Street',$this->Mail_Street,true);
		$criteria->compare('Mail_City',$this->Mail_City,true);
		$criteria->compare('Mail_State',$this->Mail_State,true);
		$criteria->compare('Mail_ZipCode',$this->Mail_ZipCode,true);
		$criteria->compare('Voice_Phone',$this->Voice_Phone,true);
		$criteria->compare('bio',$this->bio,true);
		$criteria->compare('acceptTransfers',$this->acceptTransfers);
		$criteria->compare('transferFee',$this->transferFee,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Dealers the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
