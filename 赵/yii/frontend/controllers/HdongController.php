<?php

namespace frontend\controllers;
use Yii;

class HdongController extends \yii\web\Controller
{
    //活动列表
    public function actionHd_list()
    {
        return $this->renderPartial('hd_list.html');
    }
}
