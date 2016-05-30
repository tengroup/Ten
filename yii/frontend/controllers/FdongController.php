<?php

namespace frontend\controllers;
use Yii;
use yii\data\Pagination;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use frontend\models\User;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 *  @U+           管理中心文章处理程序文件
 *  @Fdong：       房东管理
 *  @Author:      张龙
 *  @Time         2016-05-17
 */
class FdongController extends \yii\web\Controller
{
	/**
     * 定义全局变量
     */
	public $enableCsrfValidation = false;
	/**
     * 右侧
     */
	public function actionIndex(){
		//查询数据库
		$query = User::find();
		// var_dump($query);die;
		//设置每页显示条数
		$pages = new Pagination([
		    'totalCount' => $query->count(),
		    'pageSize'   => 2,
		]);
		//限制记录条数
		$models = $query->offset($pages->offset)
		    ->limit($pages->limit)->asArray()->all();
		    // var_dump($models);die;
	    return $this->renderPartial('fd_list.html', [
		    'res' => $models,
		    'pages' => $pages,
		]);

	}



    /**
     *	ajax搜索+分页
     */
    public function actionReplacelist()
    {
    	$userName = Yii::$app->request->get('userName');
    	$userName = isset($userName)?$userName:NULL;
    	//echo $userName;die;
    	if($userName==NULL){
    		//查询数据库
			$query = User::find();
			//var_dump($query);die;
			//设置每页显示条数
			$pages = new Pagination([
			    'totalCount' => $query->count(),
			    'pageSize'   => 2,
			]);
			//限制记录条数
			$models = $query
			->offset($pages->offset)
			->limit($pages->limit)
			->asArray()
			->all();
		}else{
			//查询数据库
			$query = User::find()->where(['u_name' => $userName]);
			//设置每页显示条数
			$pages = new Pagination([
			    'totalCount' => $query->count(),
			    'pageSize'   => 2,
			]);
			//限制记录条数
			$models = $query
			->offset($pages->offset)
			->limit($pages->limit)
			->asArray()
			->all();
		}
    	//var_dump($userName);die;
    	return $this->renderPartial('replacelist.html', [
		    'res' => $models,
		    'pages' => $pages,
		]);
        
    }

    /**
     *	ajax删除、分页、搜索
     */
    public function actionDeletelist()
    {
    	$userName = Yii::$app->request->get('userName');
    	$userName = isset($userName)?$userName:NULL;
    	$userId = Yii::$app->request->get('userId');
    	//echo $userId;
    	if ($userId!='') {
    		
	    	if($userName==NULL){
		    	$customer = user::findOne($userId);
				$customer->delete();
		    		//查询数据库
				$query = User::find();
				//var_dump($query);die;
				//设置每页显示条数
				$pages = new Pagination([
				    'totalCount' => $query->count(),
				    'pageSize'   => 2,
				]);
				//限制记录条数
				$models = $query
				->offset($pages->offset)
				->limit($pages->limit)
				->asArray()
				->all();
			}else{
				//查询数据库
				$customer = user::findOne($userId);
				$customer->delete();
				$query = User::find()->where(['u_name' => $userName]);
				//设置每页显示条数
				$pages = new Pagination([
				    'totalCount' => $query->count(),
				    'pageSize'   => 2,
				]);
				//限制记录条数
				$models = $query
				->offset($pages->offset)
				->limit($pages->limit)
				->asArray()
				->all();
			}
	    	
	        return $this->renderPartial('replacelist.html', [
			    'res' => $models,
			    'pages' => $pages,
			]);
	        
    	} else {
	    	//echo $userName;die;
	    	if($userName==NULL){
	    		//查询数据库
				$query = User::find();
				//var_dump($query);die;
				//设置每页显示条数
				$pages = new Pagination([
				    'totalCount' => $query->count(),
				    'pageSize'   => 2,
				]);
				//限制记录条数
				$models = $query
				->offset($pages->offset)
				->limit($pages->limit)
				->asArray()
				->all();
			}else{
				//查询数据库
				$query = User::find()->where(['u_name' => $userName]);
				//设置每页显示条数
				$pages = new Pagination([
				    'totalCount' => $query->count(),
				    'pageSize'   => 2,
				]);
				//限制记录条数
				$models = $query
				->offset($pages->offset)
				->limit($pages->limit)
				->asArray()
				->all();
			}
	    	
	        return $this->renderPartial('replacelist.html', [
			    'res' => $models,
			    'pages' => $pages,
			]);
    	}
    }
}
