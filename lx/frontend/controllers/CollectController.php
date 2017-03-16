<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;

/**
 * Collect controller
 */
class CollectController extends Controller
{
	//账号绑定
	public function actionPositions()
    {
        return $this->renderPartial('collections');
    }
   
}


?>