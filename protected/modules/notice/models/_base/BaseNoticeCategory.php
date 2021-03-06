<?php

/**
* This is the model base class for the table "notice_category".
* DO NOT MODIFY THIS FILE! It is automatically generated by giix.
* If any changes are necessary, you must set or override the required
* property or method in class "NoticeCategory".
*
* Columns in table "notice_category" available as properties of the model,
* and there are no model relations.
*
* @property string $id
* @property string $name
* @property integer $order
* @property integer $enable
*
*/
abstract class BaseNoticeCategory extends GxActiveRecord {

public static function model($className=__CLASS__) {
return parent::model($className);
}

public function tableName() {
return 'notice_category';
}

public static function representingColumn() {
return 'name';
}

public function rules() {
return array(
array('name', 'required'),
array('order, enable', 'numerical', 'integerOnly'=>true),
array('name', 'length', 'max'=>120),
array('order, enable', 'default', 'setOnEmpty' => true, 'value' => null),
array('id, name, order, enable', 'safe', 'on'=>'search'),
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
'id' => Yii::t('notice_category', 'id'),
'name' => Yii::t('notice_category', 'name'),
'order' => Yii::t('notice_category', 'order'),
'enable' => Yii::t('notice_category', 'enable'),
);
}

public function search() {
$criteria = new CDbCriteria;

$criteria->compare('id', $this->id, true);
$criteria->compare('name', $this->name, true);
$criteria->compare('order', $this->order);
$criteria->compare('enable', $this->enable);

return new CActiveDataProvider($this, array(
'criteria' => $criteria,
));
}
}