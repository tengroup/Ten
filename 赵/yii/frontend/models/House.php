<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "house".
 *
 * @property integer $h_id
 * @property integer $u_id
 * @property string $h_address
 * @property integer $t_id
 * @property string $h_area
 * @property integer $number
 * @property string $in_time
 * @property string $out_time
 * @property string $receive_time
 * @property string $deposit
 * @property string $pay
 * @property string $content
 * @property string $photo
 * @property string $phone
 * @property string $linkman
 * @property integer $is_hot
 * @property integer $is_best
 * @property integer $is_cheap
 * @property string $x_postion
 * @property string $y_postion
 * @property string $zoom
 */
class House extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'house';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['u_id', 't_id', 'number', 'is_hot', 'is_best', 'is_cheap'], 'integer'],
            [['h_area', 'deposit', 'pay'], 'number'],
            [['in_time', 'out_time', 'receive_time'], 'safe'],
            [['content'], 'string'],
            [['h_address', 'photo'], 'string', 'max' => 255],
            [['phone', 'linkman', 'x_postion', 'y_postion'], 'string', 'max' => 60],
            [['zoom'], 'string', 'max' => 10]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'h_id' => 'H ID',
            'u_id' => 'U ID',
            'h_address' => 'H Address',
            't_id' => 'T ID',
            'h_area' => 'H Area',
            'number' => 'Number',
            'in_time' => 'In Time',
            'out_time' => 'Out Time',
            'receive_time' => 'Receive Time',
            'deposit' => 'Deposit',
            'pay' => 'Pay',
            'content' => 'Content',
            'photo' => 'Photo',
            'phone' => 'Phone',
            'linkman' => 'Linkman',
            'is_hot' => 'Is Hot',
            'is_best' => 'Is Best',
            'is_cheap' => 'Is Cheap',
            'x_postion' => 'X Postion',
            'y_postion' => 'Y Postion',
            'zoom' => 'Zoom',
        ];
    }
}
