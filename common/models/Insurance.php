<?php

namespace common\models;

/**
 * This is the model class for table "{{%insurance}}".
 *
 * @property integer $Id
 * @property string $Name
 * @property integer $Pid
 *
 * @property Insurance $p
 * @property Insurance[] $insurances
 */
class Insurance extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%insurance}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'name'], 'required'],
            [['id', 'pid'], 'integer'],
            [['name'], 'string', 'min' => 2, 'max' => 40],
            // [['pid'], 'exist', 'skipOnError' => true, 'targetClass' => Insurance::className(), 'targetAttribute' => ['Pid' => 'Id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id'   => 'ID',
            'name' => '名称',
            'pid'  => '父类ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getParent()
    {
        return $this->hasOne(Insurance::className(), ['id' => 'pid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInsurances()
    {
        return $this->hasMany(Insurance::className(), ['pid' => 'id']);
    }

}
