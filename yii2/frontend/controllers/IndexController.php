<?php

namespace frontend\controllers;
use Yii;

class IndexController extends \yii\web\Controller
{
    //主页
    public function actionIndex()
    {
        return $this->renderPartial('index.html');
    }
    //菜单栏
	public function actionLeft()
    {
        return $this->renderPartial('left.html');
    }
    //头部
	public function actionAdmin_top()
    {
        return $this->renderPartial('admin_top.html');
    }
}
