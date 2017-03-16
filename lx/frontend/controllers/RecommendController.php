<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;

/**
 * Recommend controller
 */
class RecommendController extends Controller
{
	//账号绑定
	public function actionRecommendlist()
    {
        return $this->renderPartial('recommend_list');
    }
   
}


?>