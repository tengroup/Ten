<?php

namespace frontend\models;

use Yii;
use yii\data\Pagination;

/**
 * This is the model class for table "f_users".
 *
 * @property integer $u_id
 * @property string $u_name
 * @property string $u_pwd
 * @property string $u_tel
 * @property string $u_email
 * @property string $u_card
 * @property string $real_name
 * @property string $pet_name
 * @property integer $u_status
 * @property string $u_lang
 * @property string $reg_time
 * @property string $last_login
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'f_users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['u_status'], 'integer'],
            [['reg_time', 'last_login'], 'safe'],
            [['u_name', 'u_pwd', 'u_tel', 'real_name', 'pet_name'], 'string', 'max' => 20],
            [['u_email'], 'string', 'max' => 30],
            [['u_card'], 'string', 'max' => 50],
            [['u_lang'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'u_id' => 'U ID',
            'u_name' => 'U Name',
            'u_pwd' => 'U Pwd',
            'u_tel' => 'U Tel',
            'u_email' => 'U Email',
            'u_card' => 'U Card',
            'real_name' => 'Real Name',
            'pet_name' => 'Pet Name',
            'u_status' => 'U Status',
            'u_lang' => 'U Lang',
            'reg_time' => 'Reg Time',
            'last_login' => 'Last Login',
        ];
    }
}
