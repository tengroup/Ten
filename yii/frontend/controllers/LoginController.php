<?php

namespace frontend\controllers;
use Yii;

class LoginController extends \yii\web\Controller
{
    //登陆
    public function actionLogin()
    {
        return $this->renderPartial('login.html');
    }
}
