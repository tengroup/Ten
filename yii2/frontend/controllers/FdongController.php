<?php

namespace frontend\controllers;
use Yii;

class FdongController extends \yii\web\Controller
{
    //房东列表
    public function actionFd_list()
    {
        return $this->renderPartial('fd_list.html');
    }
}
