<?php

/**
* This is the model base class for the table "sys_object_cmt".
* DO NOT MODIFY THIS FILE! It is automatically generated by giix.
* If any changes are necessary, you must set or override the required
* property or method in class "SysObjectCmt".
*
* Columns in table "sys_object_cmt" available as properties of the model,
* and there are no model relations.
*
* @property string $id
* @property string $object_name
* @property string $table_cmt
* @property string $table_track
* @property integer $per_view
* @property integer $is_ratable
* @property integer $is_on
* @property integer $is_mood
* @property string $trigger_table
* @property string $trigger_field_id
* @property string $trigger_field_cmts
* @property string $class
* @property string $extra_config
*
*/
abstract class BaseSysObjectCmt extends YsActiveRecord {

public static function model($className=__CLASS__) {
return parent::model($className);
}

public function tableName() {
return 'sys_object_cmt';
}

public static function representingColumn() {
return 'object_name';
}

public function rules() {
return array(
array('object_name, table_cmt,  per_view, is_ratable, is_on, is_mood, trigger_table, trigger_field_id, trigger_field_cmts', 'required'),
array('per_view, is_ratable, is_on, is_mood', 'numerical', 'integerOnly'=>true),
array('object_name, table_cmt, table_track', 'length', 'max'=>50),
array('trigger_table, trigger_field_id, trigger_field_cmts, class', 'length', 'max'=>32),
array('extra_config', 'safe'),
array('class, extra_config', 'default', 'setOnEmpty' => true, 'value' => null),
array('id, object_name, table_cmt, table_track, per_view, is_ratable, is_on, is_mood, trigger_table, trigger_field_id, trigger_field_cmts, class, extra_config', 'safe', 'on'=>'search'),
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
'id' => Yii::t('sys_object_cmt', 'id'),
'object_name' => Yii::t('sys_object_cmt', 'object_name'),
'table_cmt' => Yii::t('sys_object_cmt', 'table_cmt'),
'table_track' => Yii::t('sys_object_cmt', 'table_track'),
'per_view' => Yii::t('sys_object_cmt', 'per_view'),
'is_ratable' => Yii::t('sys_object_cmt', 'is_ratable'),
'is_on' => Yii::t('sys_object_cmt', 'is_on'),
'is_mood' => Yii::t('sys_object_cmt', 'is_mood'),
'trigger_table' => Yii::t('sys_object_cmt', 'trigger_table'),
'trigger_field_id' => Yii::t('sys_object_cmt', 'trigger_field_id'),
'trigger_field_cmts' => Yii::t('sys_object_cmt', 'trigger_field_cmts'),
'class' => Yii::t('sys_object_cmt', 'class'),
'extra_config' => Yii::t('sys_object_cmt', 'extra_config'),
);
}

public function search() {
$criteria = new CDbCriteria;

$criteria->compare('id', $this->id, true);
$criteria->compare('object_name', $this->object_name, true);
$criteria->compare('table_cmt', $this->table_cmt, true);
$criteria->compare('table_track', $this->table_track, true);
$criteria->compare('per_view', $this->per_view);
$criteria->compare('is_ratable', $this->is_ratable);
$criteria->compare('is_on', $this->is_on);
$criteria->compare('is_mood', $this->is_mood);
$criteria->compare('trigger_table', $this->trigger_table, true);
$criteria->compare('trigger_field_id', $this->trigger_field_id, true);
$criteria->compare('trigger_field_cmts', $this->trigger_field_cmts, true);
$criteria->compare('class', $this->class, true);
$criteria->compare('extra_config', $this->extra_config, true);

return new CActiveDataProvider($this, array(
'criteria' => $criteria,
));
}
}