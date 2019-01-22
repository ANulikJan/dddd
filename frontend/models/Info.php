<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "info".
 *
 * @property int $id
 * @property string $email
 * @property string $info
 * @property string $phone
 * @property string $currencies
 */
class Info extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'info';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['email', 'info', 'phone'], 'required'],
            [['email', 'info', 'phone','currencies'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'email' => Yii::t('app', 'Email'),
            'info' => Yii::t('app', 'Info'),
            'phone' => Yii::t('app', 'Phone'),
        ];
    }
}
