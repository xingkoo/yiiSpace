<?php

/**
 * This is the model base class for the table "api_client".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "ApiClient".
 *
 * Columns in table "api_client" available as properties of the model,
 * and there are no model relations.
 *
 * @property string $id
 * @property string $app_id
 * @property string $app_key
 * @property string $app_name
 * @property string $app_domain
 * @property string $app_description
 * @property integer $status
 * @property integer $create_time
 * @property integer $update_time
 * @property integer $modifier_id
 *
 */
abstract class BaseApiClient extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'api_client';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'ApiClient|ApiClients', $n);
	}

	public static function representingColumn() {
		return 'app_id';
	}

	public function rules() {
		return array(
			array('app_name, app_description', 'required'),
			array('status, create_time, update_time, modifier_id', 'numerical', 'integerOnly'=>true),
			array('app_id, app_name', 'length', 'max'=>120),
			array('app_key', 'length', 'max'=>64),
			array('app_domain, app_description', 'length', 'max'=>255),
			array('app_domain, status, create_time, update_time, modifier_id', 'default', 'setOnEmpty' => true, 'value' => null),
			array('id, app_id, app_key, app_name, app_domain, app_description, status, create_time, update_time, modifier_id', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'id' => Yii::t('app', 'ID'),
			'app_id' => Yii::t('app', 'App id'),
			'app_key' => Yii::t('app', 'App Key'),
			'app_name' => Yii::t('app', 'App Name'),
			'app_domain' => Yii::t('app', 'App Domain'),
			'app_description' => Yii::t('app', 'App Description'),
			'status' => Yii::t('app', 'Status'),
			'create_time' => Yii::t('app', 'Create Time'),
			'update_time' => Yii::t('app', 'Update Time'),
			'modifier_id' => Yii::t('app', 'Modifier'),
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id, true);
		$criteria->compare('app_id', $this->app_id, true);
		$criteria->compare('app_key', $this->app_key, true);
		$criteria->compare('app_name', $this->app_name, true);
		$criteria->compare('app_domain', $this->app_domain, true);
		$criteria->compare('app_description', $this->app_description, true);
		$criteria->compare('status', $this->status);
		$criteria->compare('create_time', $this->create_time);
		$criteria->compare('update_time', $this->update_time);
		$criteria->compare('modifier_id', $this->modifier_id);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}