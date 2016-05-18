<?php

namespace frontend\controllers;
use Yii;

class FyuanController extends \yii\web\Controller
{
    //房源列表
    public function actionFy_list()
    {
        return $this->renderPartial('fy_list.html');
    }
}
