<?php

namespace frontend\controllers;
use Yii;

class UserController extends \yii\web\Controller
{
	//右侧
	public function actionRight()
    {
        return $this->renderPartial('yh_list.html');
    }
    //用户列表
    public function actionYh_list()
    {
        return $this->renderPartial('yh_list.html');
    }
}
