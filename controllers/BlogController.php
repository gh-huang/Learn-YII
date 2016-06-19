<?php
namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Blog;

class BlogController extends Controller
{
	public $layout = 'blog';
	public function actionList() 
	{
		if (Yii::$app->request->isPost) 
		{
			//生成模型
			$model = new Blog;
			//接收表单
			$model->attributes = Yii::$app->request->post();
			//验证表单并且插入数据
			if ($model->insert())
			{
				return $this->redirect(['blog/list']);
			}
			else
			{
				var_dump($model->getErrors());
			}
		}

	}

	public function actionIndex()
	{

	}
}