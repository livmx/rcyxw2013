<?php

/**
* This is the model base class for the table "relationship_category".
* DO NOT MODIFY THIS FILE! It is automatically generated by giix.
* If any changes are necessary, you must set or override the required
* property or method in class "RelationshipCategory".
*
* Columns in table "relationship_category" available as properties of the model,
* and there are no model relations.
*
* @property string $id
* @property integer $user_id
* @property string $name
* @property integer $display_order
* @property integer $mbr_count
*
*/
abstract class BaseRelationshipCategory extends YsActiveRecord {

public static function model($className=__CLASS__) {
return parent::model($className);
}

public function tableName() {
return 'relationship_category';
}

public static function representingColumn() {
return 'name';
}

public function rules() {
return array(
array('user_id, name', 'required'),
array('user_id, display_order, mbr_count', 'numerical', 'integerOnly'=>true),
array('name', 'length', 'max'=>64),
array('display_order, mbr_count', 'default', 'setOnEmpty' => true, 'value' => null),
array('id, user_id, name, display_order, mbr_count', 'safe', 'on'=>'search'),
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
'id' => Yii::t('relationship_category', 'id'),
'user_id' => Yii::t('relationship_category', 'user_id'),
'name' => Yii::t('relationship_category', 'name'),
'display_order' => Yii::t('relationship_category', 'display_order'),
'mbr_count' => Yii::t('relationship_category', 'mbr_count'),
);
}

public function search() {
$criteria = new CDbCriteria;

$criteria->compare('id', $this->id, true);
$criteria->compare('user_id', $this->user_id);
$criteria->compare('name', $this->name, true);
$criteria->compare('display_order', $this->display_order);
$criteria->compare('mbr_count', $this->mbr_count);

return new CActiveDataProvider($this, array(
'criteria' => $criteria,
));
}
}